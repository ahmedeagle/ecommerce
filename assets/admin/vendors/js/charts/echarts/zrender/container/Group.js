/**
 * Group是一个容器，可以插入子节点，Group的变换也会被应用到子节点上
 * @module zrender/graphic/Group
 * @example
 *     var Group = require('zrender/container/Group');
 *     var Circle = require('zrender/graphic/shape/Circle');
 *     var g = new Group();
 *     g.position[0] = 100;
 *     g.position[1] = 100;
 *     g.add(new Circle({
 *         style: {
 *             x: 100,
 *             y: 100,
 *             r: 20,
 *         }
 *     }));
 *     zr.add(g);
 */
define(function (require) {

    var zrUtil = require('../core/util');
    var Element = require('../Element');
    var BoundingRect = require('../core/BoundingRect');

    /**
     * @alias module:zrender/graphic/Group
     * @constructor
     * @extends module:zrender/mixin/Transformable
     * @extends module:zrender/mixin/Eventful
     */
    var Group = function (opts) {

        opts = opts || {};

        Element.call(this, opts);

        for (var key in opts) {
            this[key] = opts[key];
        }

        this._children = [];

        this.__storage = null;

        this.__dirty = true;
    };

    Group.prototype = {

        constructor: Group,

        /**
         * @type {string}
         */
        type: 'group',

        /**
         * 所有子孙元素是否响应鼠标事件
         * @name module:/zrender/container/Group#silent
         * @type {boolean}
         * @default false
         */
        silent: false,

        /**
         * @return {Array.<module:zrender/Element>}
         */
        children: function () {
            return this._children.slice();
        },

        /**
         * 获取指定 index 的儿子节点
         * @param  {number} idx
         * @return {module:zrender/Element}
         */
        childAt: function (idx) {
            return this._children[idx];
        },

        /**
         * 获取指定名字的儿子节点
         * @param  {string} name
         * @return {module:zrender/Element}
         */
        childOfName: function (name) {
            var children = this._children;
            for (var i = 0; i < children.length; i++) {
                if (children[i].name === name) {
                    return children[i];
                }
             }
        },

        /**
         * @return {number}
         */
        childCount: function () {
            return this._children.length;
        },

        /**
         * 添加子节点到最后
         * @param {module:zrender/Element} child
         */
        add: function (child) {
            if (child && child !== this && child.parent !== this) {

                this._children.push(child);

                this._doAdd(child);
            }

            return this;
        },

        /**
         * 添加子节点在 nextSibling 之前
         * @param {module:zrender/Element} child
         * @param {module:zrender/Element} nextSibling
         */
        addBefore: function (child, nextSibling) {
            if (child && child !== this && child.parent !== this
                && nextSibling && nextSibling.parent === this) {

                var children = this._children;
                var idx = children.indexOf(nextSibling);

                if (idx >= 0) {
                    children.splice(idx, 0, child);
                    this._doAdd(child);
                }
            }

            return this;
        },

        _doAdd: function (child) {
            if (child.parent) {
                child.parent.remove(child);
            }

            child.parent = this;

            var storage = this.__storage;
            var zr = this.__zr;
            if (storage && storage !== child.__storage) {

                storage.addToMap(child);

                if (child instanceof Group) {
                    child.addChildrenToStorage(storage);
                }
            }

            zr && zr.refresh();
        },

        /**
         * 移除子节点
         * @param {module:zrender/Element} child
         */
        remove: function (child) {
            var zr = this.__zr;
            var storage = this.__storage;
            var children = this._children;

            var idx = zrUtil.indexOf(children, child);
            if (idx < 0) {
                return this;
            }
            children.splice(idx, 1);

            child.parent = null;

            if (storage) {

                storage.delFromMap(child.id);

                if (child instanceof Group) {
                    child.delChildrenFromStorage(storage);
                }
            }

            zr && zr.refresh();

            return this;
        },

        /**
         * 移除所有子节点
         */
        removeAll: function () {
            var children = this._children;
            var storage = this.__storage;
            var child;
            var i;
            for (i = 0; i < children.length; i++) {
                child = children[i];
                if (storage) {
                    storage.delFromMap(child.id);
                    if (child instanceof Group) {
                        child.delChildrenFromStorage(storage);
                    }
                }
                child.parent = null;
            }
            children.length = 0;

            return this;
        },

        /**
         * 遍历所有子节点
         * @param  {Function} cb
         * @param  {}   context
         */
        eachChild: function (cb, context) {
            var children = this._children;
            for (var i = 0; i < children.length; i++) {
                var child = children[i];
                cb.call(context, child, i);
            }
            return this;
        },

        /**
         * 深度优先遍历所有子孙节点
         * @param  {Function} cb
         * @param  {}   context
         */
        traverse: function (cb, context) {
            for (var i = 0; i < this._children.length; i++) {
                var child = this._children[i];
                cb.call(context, child);

                if (child.type === 'group') {
                    child.traverse(cb, context);
                }
            }
            return this;
        },

        addChildrenToStorage: function (storage) {
            for (var i = 0; i < this._children.length; i++) {
                var child = this._children[i];
                storage.addToMap(child);
                if (child instanceof Group) {
                    child.addChildrenToStorage(storage);
                }
            }
        },

        delChildrenFromStorage: function (storage) {
            for (var i = 0; i < this._children.length; i++) {
                var child = this._children[i];
                storage.delFromMap(child.id);
                if (child instanceof Group) {
                    child.delChildrenFromStorage(storage);
                }
            }
        },

        dirty: function () {
            this.__dirty = true;
            this.__zr && this.__zr.refresh();
            return this;
        },

        /**
         * @return {module:zrender/core/BoundingRect}
         */
        getBoundingRect: function (includeChildren) {
            // TODO Caching
            // TODO Transform
            var rect = null;
            var tmpRect = new BoundingRect(0, 0, 0, 0);
            var children = includeChildren || this._children;
            var tmpMat = [];

            for (var i = 0; i < children.length; i++) {
                var child = children[i];
                if (child.ignore || child.invisible) {
                    continue;
                }

                var childRect = child.getBoundingRect();
                var transform = child.getLocalTransform(tmpMat);
                if (transform) {
                    tmpRect.copy(childRect);
                    tmpRect.applyTransform(transform);
                    rect = rect || tmpRect.clone();
                    rect.union(tmpRect);
                }
                else {
                    rect = rect || childRect.clone();
                    rect.union(childRect);
                }
            }
            return rect || tmpRect;
        }
    };

    zrUtil.inherits(Group, Element);

    return Group;
});
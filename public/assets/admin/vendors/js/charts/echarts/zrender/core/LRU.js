// Simple LRU cache use doubly linked list
// @module zrender/core/LRU
define(function(require) {

    /**
     * Simple double linked list. Compared with array, it has O(1) remove operation.
     * @constructor
     */
    var LinkedList = function() {

        /**
         * @type {module:zrender/core/LRU~Entry}
         */
        this.head = null;

        /**
         * @type {module:zrender/core/LRU~Entry}
         */
        this.tail = null;

        this._len = 0;
    };

    var linkedListProto = LinkedList.prototype;
    /**
     * Insert a new value at the tail
     * @param  {} val
     * @return {module:zrender/core/LRU~Entry}
     */
    linkedListProto.insert = function(val) {
        var entry = new Entry(val);
        this.insertEntry(entry);
        return entry;
    };

    /**
     * Insert an entry at the tail
     * @param  {module:zrender/core/LRU~Entry} entry
     */
    linkedListProto.insertEntry = function(entry) {
        if (!this.head) {
            this.head = this.tail = entry;
        }
        else {
            this.tail.next = entry;
            entry.prev = this.tail;
            this.tail = entry;
        }
        this._len++;
    };

    /**
     * Remove entry.
     * @param  {module:zrender/core/LRU~Entry} entry
     */
    linkedListProto.remove = function(entry) {
        var prev = entry.prev;
        var next = entry.next;
        if (prev) {
            prev.next = next;
        }
        else {
            // Is head
            this.head = next;
        }
        if (next) {
            next.prev = prev;
        }
        else {
            // Is tail
            this.tail = prev;
        }
        entry.next = entry.prev = null;
        this._len--;
    };

    /**
     * @return {number}
     */
    linkedListProto.len = function() {
        return this._len;
    };

    /**
     * @constructor
     * @param {} val
     */
    var Entry = function(val) {
        /**
         * @type {}
         */
        this.value = val;

        /**
         * @type {module:zrender/core/LRU~Entry}
         */
        this.next;

        /**
         * @type {module:zrender/core/LRU~Entry}
         */
        this.prev;
    };

    /**
     * LRU Cache
     * @constructor
     * @alias module:zrender/core/LRU
     */
    var LRU = function(maxSize) {

        this._list = new LinkedList();

        this._map = {};

        this._maxSize = maxSize || 10;
    };

    var LRUProto = LRU.prototype;

    /**
     * @param  {string} key
     * @param  {} value
     */
    LRUProto.put = function(key, value) {
        var list = this._list;
        var map = this._map;
        if (map[key] == null) {
            var len = list.len();
            if (len >= this._maxSize && len > 0) {
                // Remove the least recently used
                var leastUsedEntry = list.head;
                list.remove(leastUsedEntry);
                delete map[leastUsedEntry.key];
            }

            var entry = list.insert(value);
            entry.key = key;
            map[key] = entry;
        }
    };

    /**
     * @param  {string} key
     * @return {}
     */
    LRUProto.get = function(key) {
        var entry = this._map[key];
        var list = this._list;
        if (entry != null) {
            // Put the latest used entry in the tail
            if (entry !== list.tail) {
                list.remove(entry);
                list.insertEntry(entry);
            }

            return entry.value;
        }
    };

    /**
     * Clear the cache
     */
    LRUProto.clear = function() {
        this._list.clear();
        this._map = {};
    };

    return LRU;
});
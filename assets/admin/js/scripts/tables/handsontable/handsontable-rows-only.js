/*=========================================================================================
    File Name:handsontable-rows-only.js
    Description: Handsontable Rows Columns.
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

document.addEventListener("DOMContentLoaded", function() {

    /***********************
     *      Scrolling       *
     ***********************/

    var
        tpl = ['one', 'two', 'three'],
        data = [
            ['', 'Kia', 'Nissan', 'Toyota', 'Honda'],
            ['2014', 10, 11, 12, 13],
            ['2015', 20, 11, 14, 13],
            ['2016', 30, 15, 12, 13]
        ],
        container = document.getElementById('populating'),
        hot1;

    function isEmptyRow(instance, row) {
        var rowData = instance.getData()[row];

        for (var i = 0, ilen = rowData.length; i < ilen; i++) {
            if (rowData[i] !== null) {
                return false;
            }
        }

        return true;
    }

    function defaultValueRenderer(instance, td, row, col, prop, value, cellProperties) {
        var args = arguments;

        if (args[5] === null && isEmptyRow(instance, row)) {
            args[5] = tpl[col];
            td.style.color = '#999';
        } else {
            td.style.color = '';
        }
        Handsontable.renderers.TextRenderer.apply(this, args);
    }

    hot1 = new Handsontable(container, {
        startRows: 8,
        startCols: 5,
        minSpareRows: 1,
        contextMenu: true,
        cells: function(row, col, prop) {
            var cellProperties = {};

            cellProperties.renderer = defaultValueRenderer;

            return cellProperties;
        },
        beforeChange: function(changes) {
            var instance = hot1,
                ilen = changes.length,
                clen = instance.colCount,
                rowColumnSeen = {},
                rowsToFill = {},
                i,
                c;

            for (i = 0; i < ilen; i++) {
                // if oldVal is empty
                if (changes[i][2] === null && changes[i][3] !== null) {
                    if (isEmptyRow(instance, changes[i][0])) {
                        // add this row/col combination to cache so it will not be overwritten by template
                        rowColumnSeen[changes[i][0] + '/' + changes[i][1]] = true;
                        rowsToFill[changes[i][0]] = true;
                    }
                }
            }
            for (var r in rowsToFill) {
                if (rowsToFill.hasOwnProperty(r)) {
                    for (c = 0; c < clen; c++) {
                        // if it is not provided by user in this change set, take value from template
                        if (!rowColumnSeen[r + '/' + c]) {
                            changes.push([r, c, null, tpl[c]]);
                        }
                    }
                }
            }
        }
    });

    hot1.loadData(data);
});

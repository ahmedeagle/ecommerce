/*=========================================================================================
    File Name: line.js
    Description: Morris line chart
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Line chart
// ------------------------------
$(window).on("load", function(){

    Morris.Line({
        element: 'line-chart',
        data: [{
            "year": "2010",
            "iphone": 100,
            "samsung": 40,
            "htc": 62
        }, {
            "year": "2011",
            "iphone": 150,
            "samsung": 200,
            "htc": 120
        }, {
            "year": "2012",
            "iphone": 175,
            "samsung": 105,
            "htc": 80
        }, {
            "year": "2013",
            "iphone": 125,
            "samsung": 150,
            "htc": 75
        }, {
            "year": "2014",
            "iphone": 150,
            "samsung": 275,
            "htc": 100
        }, {
            "year": "2015",
            "iphone": 200,
            "samsung": 325,
            "htc": 80
        }, {
            "year": "2016",
            "iphone": 260,
            "samsung": 130,
            "htc": 90
        }],
        xkey: 'year',
        ykeys: ['iphone', 'samsung', 'htc'],
        labels: ['iPhone', 'Samsung', 'HTC'],
        resize: true,
        smooth: false,
        pointSize: 3,
        pointStrokeColors:['#00A5A8', '#FF7D4D','#FF4558'],
        gridLineColor: '#e3e3e3',
        behaveLikeLine: true,
        numLines: 6,
        gridtextSize: 14,
        lineWidth: 3,
        hideHover: 'auto',
        lineColors: ['#00A5A8', '#FF7D4D','#FF4558']
    });
});
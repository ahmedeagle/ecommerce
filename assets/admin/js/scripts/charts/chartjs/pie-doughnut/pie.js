/*=========================================================================================
    File Name: pie.js
    Description: Chartjs pie chart
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Pie chart
// ------------------------------
$(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#pie-chart");

    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration:500,
    };

    // Chart Data
    var chartData = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [{
            label: "My First dataset",
            data: [65, 59, 80, 81, 56],
            backgroundColor: ['#00A5A8', '#626E82', '#FF7D4D','#FF4558', '#28D094'],
        }, {
            label: "My Second dataset",
            data: [28, 48, 40, 19, 86],
            backgroundColor: ['#00A5A8', '#626E82', '#FF7D4D','#FF4558', '#28D094'],
        }, {
            label: "My Third dataset - No bezier",
            data: [45, 25, 16, 36, 67],
            backgroundColor: ['#00A5A8', '#626E82', '#FF7D4D','#FF4558', '#28D094'],
        }, {
            label: "My Fourth dataset",
            data: [17, 62, 78, 88, 26],
            backgroundColor: ['#00A5A8', '#626E82', '#FF7D4D','#FF4558', '#28D094'],
        }]
    };

    var config = {
        type: 'pie',

        // Chart Options
        options : chartOptions,

        data : chartData
    };

    // Create the chart
    var pieChart = new Chart(ctx, config);
});
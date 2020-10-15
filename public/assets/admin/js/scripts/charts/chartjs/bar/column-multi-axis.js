/*=========================================================================================
    File Name: column-multi-axis.js
    Description: Chartjs column multi axis chart
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Column multi axis chart
// ------------------------------
$(window).on("load", function(){

    //Get the context of the Chart canvas element we want to select
    var ctx = $("#column-multi-axis");

    // Chart Options
    var chartOptions = {
        responsive: true,
        maintainAspectRatio: false,
        responsiveAnimationDuration:500,
        hoverMode: 'label',
        stacked: false,
        title:{
            display:false,
            text:"Chart.js Bar Chart - Multi Axis"
        },
        scales: {
            xAxes: [{
                display: true,
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                }
            }],
            yAxes: [{
                type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                display: true,
                position: "left",
                id: "y-axis-1",
                gridLines: {
                    color: "#f3f3f3",
                    drawTicks: false,
                },
                scaleLabel: {
                    display: true,
                }
            }, {
                type: "linear", // only linear but allow scale type registration. This allows extensions to exist solely for log scale for instance
                display: true,
                position: "right",
                id: "y-axis-2",
                gridLines: {
                    drawOnChartArea: false
                }
            }],
        }
    };

    // Chart Data
    var chartData = {
        labels: ["January", "February", "March", "April", "May"],
        datasets: [{
            label: "My First dataset",
            data: [45, -19, -32, 48, -56],
            backgroundColor: "#5175E0",
            hoverBackgroundColor: "rgba(81,117,224,.8)",
            borderColor: "transparent",
            yAxisID: "y-axis-1",
        }, {
            label: "My Second dataset",
            data: [28, -48, 40, -19, 66],
            backgroundColor: "#28D094",
            hoverBackgroundColor: "rgba(22,211,154,.8)",
            borderColor: "transparent",
            yAxisID: "y-axis-2",
        },
        {
            label: "My Third dataset",
            data: [-40, 25, -16, -36, 57],
            backgroundColor: "#F98E76",
            hoverBackgroundColor: "rgba(249,142,118,.8)",
            borderColor: "transparent",
            yAxisID: "y-axis-1",
        }]
    };

    var config = {
        type: 'bar',

        // Chart Options
        options : chartOptions,

        data : chartData
    };

    // Create the chart
    var lineChart = new Chart(ctx, config);

});
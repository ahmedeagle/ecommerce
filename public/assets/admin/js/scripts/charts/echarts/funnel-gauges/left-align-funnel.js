/*=========================================================================================
    File Name: left-align-funnel.js
    Description: echarts left align funnel chart
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Left align funnel chart
// ------------------------------
$(window).on("load", function(){

    // Set paths
    // ------------------------------

    require.config({
        paths: {
            echarts: '../../../app-assets/vendors/js/charts/echarts'
        }
    });


    // Configuration
    // ------------------------------

    require(
        [
            'echarts',
            'echarts/chart/funnel',
            'echarts/chart/gauge'
        ],


        // Charts setup
        function (ec) {

            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('left-align-funnel'));

            // Chart Options
            // ------------------------------
            chartOptions = {

                // Add tooltip
                tooltip: {
                    trigger: 'item',
                    formatter: "{a} <br/>{b}: {c}%"
                },

                // Add legend
                legend: {
                    orient: 'vertical',
                    x: 'left',
                    y: 75,
                    data: ['Work', 'Eat', 'Commute', 'Watch TV', 'Sleep']
                },

                // Add Custom Colors
                color: ['#00A5A8', '#626E82', '#FF7D4D','#FF4558', '#28D094'],

                // Enable drag recalculate
                calculable: true,

                // Add series
                series: [
                    {
                        name: 'Funnel',
                        type: 'funnel',
                        funnelAlign: 'left',
                        x: '25%',
                        x2: '25%',
                        y: '17.5%',
                        width: '50%',
                        height: '80%',
                        data: [
                            {value: 60, name: 'Work'},
                            {value: 30, name: 'Eat'},
                            {value: 10, name: 'Commute'},
                            {value: 80, name: 'Watch TV'},
                            {value: 100, name: 'Sleep'}
                        ]
                    }
                ]
            };

            // Apply options
            // ------------------------------

            myChart.setOption(chartOptions);



            // Resize chart
            // ------------------------------

            $(function () {

                // Resize chart on menu width change and window resize
                $(window).on('resize', resize);
                $(".menu-toggle").on('click', resize);

                // Resize function
                function resize() {
                    setTimeout(function() {

                        // Resize chart
                        myChart.resize();
                    }, 200);
                }
            });
        }
    );
});
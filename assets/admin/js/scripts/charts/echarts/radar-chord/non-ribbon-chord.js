/*=========================================================================================
    File Name: non-ribbon-chord.js
    Description: echarts non ribbon chord chart
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Non ribbon chord chart
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
            'echarts/chart/radar',
            'echarts/chart/chord'
        ],


        // Charts setup
        function (ec) {
            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('non-ribbon-chord'));

            // Chart Options
            // ------------------------------
            chartOptions = {

                // Add tooltip
                tooltip: {
                    trigger: 'item',
                    formatter: function (params) {
                        if (params.indicator2) { // is edge
                            return params.indicator2 + ': ' + params.indicator;
                        }
                        else { // is node
                            return params.name
                        }
                    }
                },

                // Add legend
                legend: {
                    orient: 'vertical',
                    x: 'left',
                    data: ['Arsenal', 'Bayern', 'Dortmund']
                },

                // Add series
                series: [
                    {
                        type: 'chord',
                        sort: 'ascending',
                        sortSub: 'descending',
                        showScale: false,
                        ribbonType: false,
                        radius: '68%',
                        minRadius: 7,
                        maxRadius: 20,
                        itemStyle: {
                            normal: {
                                chordStyle: {
                                    color: '#999'
                                },
                                label: {
                                    rotate: true
                                }
                            }
                        },
                        nodes: [
                            {name: 'Gibbs'},
                            {name: 'Ozil'},
                            {name: 'Podolski'},
                            {name: 'Neuer'},
                            {name: 'Boateng'},
                            {name: 'Schweinsteiger'},
                            {name: 'Ram'},
                            {name: 'Cross'},
                            {name: 'Muller'},
                            {name: 'Goetze'},
                            {name: 'Hummels'},
                            {name: 'Reus'},
                            {name: 'Durm'},
                            {name: 'Sahin'},
                            {name: 'Arsenal'},
                            {name: 'Bayern'},
                            {name: 'Dortmund'}
                        ],
                        links: [
                            {source: 'Arsenal', target: 'Gibbs', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Arsenal', target: 'Ozil', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Arsenal', target: 'Podolski', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Bayern', target: 'Neuer', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Bayern', target: 'Boateng', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Bayern', target: 'Schweinsteiger', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Bayern', target: 'Ram', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Bayern', target: 'Cross', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Bayern', target: 'Muller', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Bayern', target: 'Goetze', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Dortmund', target: 'Hummels', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Dortmund', target: 'Reus', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Dortmund', target: 'Durm', weight: 0.9, name: 'Effectiveness'},
                            {source: 'Dortmund', target: 'Sahin', weight: 0.9, name: 'Effectiveness'},

                            // Ribbon Type
                            {target: 'Arsenal', source: 'Gibbs', weight: 1},
                            {target: 'Arsenal', source: 'Ozil', weight: 1},
                            {target: 'Arsenal', source: 'Podolski', weight: 1},
                            {target: 'Bayern', source: 'Neuer', weight: 1},
                            {target: 'Bayern', source: 'Boateng', weight: 1},
                            {target: 'Bayern', source: 'Schweinsteiger', weight: 1},
                            {target: 'Bayern', source: 'Ram', weight: 1},
                            {target: 'Bayern', source: 'Cross', weight: 1},
                            {target: 'Bayern', source: 'Muller', weight: 1},
                            {target: 'Bayern', source: 'Goetze', weight: 1},
                            {target: 'Dortmund', source: 'Hummels', weight: 1},
                            {target: 'Dortmund', source: 'Reus', weight: 1},
                            {target: 'Dortmund', source: 'Durm', weight: 1},
                            {target: 'Dortmund', source: 'Sahin', weight: 1}
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
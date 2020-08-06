/*=========================================================================================
    File Name: dashboard-crypto.js
    Description: intialize dashboard crypto
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: GeeksLabs
    Author URL: http://www.themeforest.net/user/geekslabs
==========================================================================================*/

(function(window, document, $) {
    'use strict';

    /********************************************
    *               BTC Card                    *
    ********************************************/
    //Get the context of the Chart canvas element we want to select
    var btcChartjs = document.getElementById("btc-chartjs").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = btcChartjs.createLinearGradient(0, 0, 0, 100);
    blue_trans_gradient.addColorStop(0, 'rgba(255, 145, 73,0.4)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var BTCStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(255, 145, 73,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var BTCMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "BTC",
            data: [20, 18, 35, 60, 38, 40, 70],
            backgroundColor: blue_trans_gradient,
            borderColor: "#FF9149",
            borderWidth: 1.5,
            strokeColor : "#FF9149",
            pointRadius: 0,
        }]
    };

    var BTCCardconfig = {
        type: 'line',

        // Chart Options
        options : BTCStats,

        // Chart Data
        data : BTCMonthData
    };

    // Create the chart
    var BTCAreaChart = new Chart(btcChartjs, BTCCardconfig);

    /********************************************
    *               ETH Card                    *
    ********************************************/
    //Get the context of the Chart canvas element we want to select
    var ethChartjs = document.getElementById("eth-chartjs").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = ethChartjs.createLinearGradient(0, 0, 0, 100);
    blue_trans_gradient.addColorStop(0, 'rgba(120, 144, 156,0.4)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var ETHStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(120, 144, 156,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var ETHMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "ETH",
            data: [40, 30, 60, 40, 45, 30, 60],
            backgroundColor: blue_trans_gradient,
            borderColor: "#78909C",
            borderWidth: 1.5,
            strokeColor : "#78909C",
            pointRadius: 0,
        }]
    };

    var ETHCardconfig = {
        type: 'line',
        // Chart Options
        options : ETHStats,
        // Chart Data
        data : ETHMonthData
    };

    // Create the chart
    var ETHAreaChart = new Chart(ethChartjs, ETHCardconfig);

    /********************************************
    *               XRP Card                    *
    ********************************************/
    //Get the context of the Chart canvas element we want to select
    var xrpChartjs = document.getElementById("xrp-chartjs").getContext("2d");
    // Create Linear Gradient
    var blue_trans_gradient = xrpChartjs.createLinearGradient(0, 0, 0, 100);
    blue_trans_gradient.addColorStop(0, 'rgba(30,159,242,0.4)');
    blue_trans_gradient.addColorStop(1, 'rgba(255,255,255,0)');
    // Chart Options
    var XRPStats = {
        responsive: true,
        maintainAspectRatio: false,
        datasetStrokeWidth : 3,
        pointDotStrokeWidth : 4,
        tooltipFillColor: "rgba(30,159,242,0.8)",
        legend: {
            display: false,
        },
        hover: {
            mode: 'label'
        },
        scales: {
            xAxes: [{
                display: false,
            }],
            yAxes: [{
                display: false,
                ticks: {
                    min: 0,
                    max: 85
                },
            }]
        },
        title: {
            display: false,
            fontColor: "#FFF",
            fullWidth: false,
            fontSize: 30,
            text: '52%'
        }
    };

    // Chart Data
    var XRPMonthData = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
        datasets: [{
            label: "XRP",
            data: [70, 20, 35, 60, 20, 40, 30],
            backgroundColor: blue_trans_gradient,
            borderColor: "#1E9FF2",
            borderWidth: 1.5,
            strokeColor : "#1E9FF2",
            pointRadius: 0,
        }]
    };

    var XRPCardconfig = {
        type: 'line',

        // Chart Options
        options : XRPStats,

        // Chart Data
        data : XRPMonthData
    };

    // Create the chart
    var XRPAreaChart = new Chart(xrpChartjs, XRPCardconfig);
})(window, document, jQuery);


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
            'echarts/chart/line',
            'echarts/chart/scatter',
            'echarts/chart/k',
        ],


        // Charts setup
        function (ec) {

            // Initialize chart
            // ------------------------------
            var myChart = ec.init(document.getElementById('btc-candlestick-control'));

            // Chart Options
            // ------------------------------
            chartOptions = {
                legend:{
                    show: false,
                },
                // Setup grid
                grid: {
                    x: 40,
                    x2: 0,                    
                    borderColor: '#e3e3e3'
                },

                // Add tooltip
                tooltip : {
                    trigger: 'axis',
                    formatter: function (params) {
                        var res = params[0].seriesName + ' - ' + params[0].name;
                        res += '<br/>  Opening : ' + params[0].value[0];
                        res += '<br/>  Closing : ' + params[0].value[1];
                        res += '<br/>  Highest : ' + params[0].value[3];
                        res += '<br/>  Lowest : ' + params[0].value[2];
                        return res;
                    },
                    axisPointer: {
                        type: 'line',
                        lineStyle: {
                            color: '#1E9FF2',
                            width: 2,
                            type: 'solid'
                        },
                    }
                },

                // Add legend
                legend: {
                    show: false,
                    data:['BTC']
                },

                // Data Zoom
                dataZoom : {
                    show : true,
                    realtime: true,
                    start : 0,
                    end : 50
                },

                // Add custom colors
                color: ['#24CB8C', '#1EC481', '#18BE77'],

                // Enable drag recalculate
                calculable: true,

                // Horizontal axis
                xAxis : [
                    {
                        type : 'category',
                        boundaryGap : true,
                        axisLine: {
                            lineStyle: {
                                color: '#fff'                                
                            }
                        },
                        axisTick: {onGap:false},
                        splitLine: {show:false},                        
                        data : [
                            "2017/1/24", "2017/1/25", "2017/1/28", "2017/1/29", "2017/1/30",
                            "2017/1/31", "2017/2/1", "2017/2/4", "2017/2/5", "2017/2/6",
                            "2017/2/7", "2017/2/8", "2017/2/18", "2017/2/19", "2017/2/20",
                            "2017/2/21", "2017/2/22", "2017/2/25", "2017/2/26", "2017/2/27",
                            "2017/2/28", "2017/3/1", "2017/3/4", "2017/3/5", "2017/3/6",
                            "2017/3/7", "2017/3/8", "2017/3/11", "2017/3/12", "2017/3/13",
                            "2017/3/14", "2017/3/15", "2017/3/18", "2017/3/19", "2017/3/20",
                            "2017/3/21", "2017/3/22", "2017/3/25", "2017/3/26", "2017/3/27",
                            "2017/3/28", "2017/3/29", "2017/4/1", "2017/4/2", "2017/4/3",
                            "2017/4/8", "2017/4/9", "2017/4/10", "2017/4/11", "2017/4/12",
                            "2017/4/15", "2017/4/16", "2017/4/17", "2017/4/18", "2017/4/19",
                            "2017/4/22", "2017/4/23", "2017/4/24", "2017/4/25", "2017/4/26",
                            "2017/5/2", "2017/5/3", "2017/5/6", "2017/5/7", "2017/5/8",
                            "2017/5/9", "2017/5/10", "2017/5/13", "2017/5/14", "2017/5/15",
                            "2017/5/16", "2017/5/17", "2017/5/20", "2017/5/21", "2017/5/22",
                            "2017/5/23", "2017/5/24", "2017/5/27", "2017/5/28", "2017/5/29",
                            "2017/5/30", "2017/5/31", "2017/6/3", "2017/6/4", "2017/6/5",
                            "2017/6/6", "2017/6/7", "2017/6/13"
                        ]
                    }
                ],

                // Vertical axis
                yAxis : [
                    {
                        type : 'value',
                        scale:true,
                        boundaryGap: [0.01, 0.01],
                        axisLine: {
                            lineStyle: {
                                color: '#fff'
                            }
                        },
                        splitLine: {
                            lineStyle: {
                                color: '#e3e3e3',
                            }
                        },
                    }
                ],

                // Add series
                series : [
                    {
                        name:'BTC',
                        type:'k',
                        barMaxWidth: 20,
                        itemStyle: {
                            normal: {
                                color: '#94E8CA',           // Fill color candle
                                color0: '#FFA4B0',   // Yin fill color
                                lineStyle: {
                                    width: 2,
                                    color: '#28D094',    // Candle border color
                                    color0: '#FF4961'     // Yin border color
                                }
                            },
                            emphasis: {
                                color: '#28D094',         // Fill color candle
                                color0: '#FF4961'         // Yin fill color
                            }
                        },
                        data:[ // Opening and closing, the minimum and maximum
                            {
                                value:[2320.26,2302.6,2287.3,2362.94],
                                itemStyle: {
                                    normal: {
                                        color0: '#FFA4B0',         // Yin fill color
                                        lineStyle: {
                                            width: 3,
                                            color0: '#FF4961'      // Yin border color
                                        }
                                    },
                                    emphasis: {
                                        color0: '#FF4961'          // Yin fill color
                                    }
                                }
                            },
                            [2300,2291.3,2288.26,2308.38],
                            [2295.35,2346.5,2295.35,2346.92],
                            [2347.22,2358.98,2337.35,2363.8],
                            [2360.75,2382.48,2347.89,2383.76],
                            [2383.43,2385.42,2371.23,2391.82],
                            [2377.41,2419.02,2369.57,2421.15],
                            [2425.92,2428.15,2417.58,2440.38],
                            [2411,2433.13,2403.3,2437.42],
                            [2432.68,2434.48,2427.7,2441.73],
                            [2430.69,2418.53,2394.22,2433.89],
                            [2416.62,2432.4,2414.4,2443.03],
                            [2441.91,2421.56,2415.43,2444.8],
                            [2420.26,2382.91,2373.53,2427.07],
                            [2383.49,2397.18,2370.61,2397.94],
                            [2378.82,2325.95,2309.17,2378.82],
                            [2322.94,2314.16,2308.76,2330.88],
                            [2320.62,2325.82,2315.01,2338.78],
                            [2313.74,2293.34,2289.89,2340.71],
                            [2297.77,2313.22,2292.03,2324.63],
                            [2322.32,2365.59,2308.92,2366.16],
                            [2364.54,2359.51,2330.86,2369.65],
                            [2332.08,2273.4,2259.25,2333.54],
                            [2274.81,2326.31,2270.1,2328.14],
                            [2333.61,2347.18,2321.6,2351.44],
                            [2340.44,2324.29,2304.27,2352.02],
                            [2326.42,2318.61,2314.59,2333.67],
                            [2314.68,2310.59,2296.58,2320.96],
                            [2309.16,2286.6,2264.83,2333.29],
                            [2282.17,2263.97,2253.25,2286.33],
                            [2255.77,2270.28,2253.31,2276.22],
                            [2269.31,2278.4,2250,2312.08],
                            [2267.29,2240.02,2239.21,2276.05],
                            [2244.26,2257.43,2232.02,2261.31],
                            [2257.74,2317.37,2257.42,2317.86],
                            [2318.21,2324.24,2311.6,2330.81],
                            [2321.4,2328.28,2314.97,2332],
                            [2334.74,2326.72,2319.91,2344.89],
                            [2318.58,2297.67,2281.12,2319.99],
                            [2299.38,2301.26,2289,2323.48],
                            [2273.55,2236.3,2232.91,2273.55],
                            [2238.49,2236.62,2228.81,2246.87],
                            [2229.46,2234.4,2227.31,2243.95],
                            [2234.9,2227.74,2220.44,2253.42],
                            [2232.69,2225.29,2217.25,2241.34],
                            [2196.24,2211.59,2180.67,2212.59],
                            [2215.47,2225.77,2215.47,2234.73],
                            [2224.93,2226.13,2212.56,2233.04],
                            [2236.98,2219.55,2217.26,2242.48],
                            [2218.09,2206.78,2204.44,2226.26],
                            [2199.91,2181.94,2177.39,2204.99],
                            [2169.63,2194.85,2165.78,2196.43],
                            [2195.03,2193.8,2178.47,2197.51],
                            [2181.82,2197.6,2175.44,2206.03],
                            [2201.12,2244.64,2200.58,2250.11],
                            [2236.4,2242.17,2232.26,2245.12],
                            [2242.62,2184.54,2182.81,2242.62],
                            [2187.35,2218.32,2184.11,2226.12],
                            [2213.19,2199.31,2191.85,2224.63],
                            [2203.89,2177.91,2173.86,2210.58],
                            [2170.78,2174.12,2161.14,2179.65],
                            [2179.05,2205.5,2179.05,2222.81],
                            [2212.5,2231.17,2212.5,2236.07],
                            [2227.86,2235.57,2219.44,2240.26],
                            [2242.39,2246.3,2235.42,2255.21],
                            [2246.96,2232.97,2221.38,2247.86],
                            [2228.82,2246.83,2225.81,2247.67],
                            [2247.68,2241.92,2231.36,2250.85],
                            [2238.9,2217.01,2205.87,2239.93],
                            [2217.09,2224.8,2213.58,2225.19],
                            [2221.34,2251.81,2210.77,2252.87],
                            [2249.81,2282.87,2248.41,2288.09],
                            [2286.33,2299.99,2281.9,2309.39],
                            [2297.11,2305.11,2290.12,2305.3],
                            [2303.75,2302.4,2292.43,2314.18],
                            [2293.81,2275.67,2274.1,2304.95],
                            [2281.45,2288.53,2270.25,2292.59],
                            [2286.66,2293.08,2283.94,2301.7],
                            [2293.4,2321.32,2281.47,2322.1],
                            [2323.54,2324.02,2321.17,2334.33],
                            [2316.25,2317.75,2310.49,2325.72],
                            [2320.74,2300.59,2299.37,2325.53],
                            [2300.21,2299.25,2294.11,2313.43],
                            [2297.1,2272.42,2264.76,2297.1],
                            [2270.71,2270.93,2260.87,2276.86],
                            [2264.43,2242.11,2240.07,2266.69],
                            [2242.26,2210.9,2205.07,2250.63],
                            [2190.1,2148.35,2126.22,2190.1]
                        ],
                        markPoint : {
                            symbol: 'star',                            
                            //symbolSize:20,
                            itemStyle:{
                                normal:{label:{position:'top'}}
                            },
                            data : [
                                {name : 'highest', value : 2444.8, xAxis: '2017/2/18', yAxis: 2466}
                            ]
                        }
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
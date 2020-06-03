/*!
 * stack-admin-theme (https://pixinvent.com/bootstrap-admin-template/stack)
 * Copyright 2018 PIXINVENT
 * Licensed under the Themeforest Standard Licenses
 */
$(window).on("load",function(){var options={series:{pie:{innerRadius:.5,show:!0}},colors:["#FFC400","#FF7D4D","#FF4558","#626E82","#28D094","#00A5A8"]},data=[{label:"Series1",data:50},{label:"Series2",data:70},{label:"Series3",data:60},{label:"Series4",data:90},{label:"Series5",data:80},{label:"Series6",data:110}];$.plot("#donut-hole-chart",data,options)});
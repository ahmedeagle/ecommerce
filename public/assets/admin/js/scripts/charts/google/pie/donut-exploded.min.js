/*!
 * stack-admin-theme (https://pixinvent.com/bootstrap-admin-template/stack)
 * Copyright 2018 PIXINVENT
 * Licensed under the Themeforest Standard Licenses
 */
function drawDonutExploded(){var data=google.visualization.arrayToDataTable([["Task","Hours per Day"],["Work",11],["Eat",2],["Commute",2],["Watch TV",2],["Sleep",7]]),options_donut_exploded={title:"My Daily Activities",height:400,fontSize:12,colors:["#99B898","#FECEA8","#FF847C","#E84A5F","#474747"],pieHole:.55,chartArea:{left:"5%",width:"90%",height:350},slices:{1:{offset:.15},3:{offset:.1},4:{offset:.12},5:{offset:.1}}},donutExploded=new google.visualization.PieChart(document.getElementById("donut-exploded"));donutExploded.draw(data,options_donut_exploded)}google.load("visualization","1.0",{packages:["corechart"]}),google.setOnLoadCallback(drawDonutExploded),$(function(){function resize(){drawDonutExploded()}$(window).on("resize",resize),$(".menu-toggle").on("click",resize)});
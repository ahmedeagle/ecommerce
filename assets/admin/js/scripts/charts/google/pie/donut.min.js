/*!
 * stack-admin-theme (https://pixinvent.com/bootstrap-admin-template/stack)
 * Copyright 2018 PIXINVENT
 * Licensed under the Themeforest Standard Licenses
 */
function drawDonut(){var data=google.visualization.arrayToDataTable([["Task","Hours per Day"],["Work",11],["Eat",2],["Commute",2],["Watch TV",2],["Sleep",7]]),options_donut={title:"My Daily Activities",height:400,fontSize:12,colors:["#99B898","#FECEA8","#FF847C","#E84A5F","#474747"],pieHole:.55,chartArea:{left:"5%",width:"90%",height:350}},donut=new google.visualization.PieChart(document.getElementById("donut-chart"));donut.draw(data,options_donut)}google.load("visualization","1.0",{packages:["corechart"]}),google.setOnLoadCallback(drawDonut),$(function(){function resize(){drawDonut()}$(window).on("resize",resize),$(".menu-toggle").on("click",resize)});
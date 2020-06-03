/*!
 * stack-admin-theme (https://pixinvent.com/bootstrap-admin-template/stack)
 * Copyright 2018 PIXINVENT
 * Licensed under the Themeforest Standard Licenses
 */
$(window).on("load",function(){for(var d1=[],i=0;i<14;i+=.5)d1.push([i,Math.sin(i)]);for(var d2=[[0,3],[4,8],[8,5],[9,13]],d3=[],i=0;i<14;i+=.5)d3.push([i,Math.cos(i)]);for(var d4=[],i=0;i<14;i+=.1)d4.push([i,Math.sqrt(10*i)]);for(var d5=[],i=0;i<14;i+=.5)d5.push([i,Math.sqrt(i)]);for(var d6=[],i=0;i<14;i+=.5+Math.random())d6.push([i,Math.sqrt(2*i+Math.sin(i)+5)]);$.plot("#series-types",[{data:d1,lines:{show:!0,fill:!0}},{data:d2,bars:{show:!0}},{data:d3,points:{show:!0}},{data:d4,lines:{show:!0}},{data:d5,lines:{show:!0},points:{show:!0}},{data:d6,lines:{show:!0,steps:!0}}],{grid:{borderWidth:1,borderColor:"#e9e9e9",color:"#999",minBorderMargin:20,labelMargin:10,margin:{top:8,bottom:20,left:20}},xaxis:{tickLength:0,tickDecimals:0},yaxis:{tickSize:5},colors:["#00A5A8","#FF7D4D","#FF4961","#F25E75","#626E82"]})});
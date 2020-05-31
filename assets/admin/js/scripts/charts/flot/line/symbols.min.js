/*!
 * stack-admin-theme (https://pixinvent.com/bootstrap-admin-template/stack)
 * Copyright 2018 PIXINVENT
 * Licensed under the Themeforest Standard Licenses
 */
$(window).on("load",function(){function generate(offset,amplitude){for(var res=[],start=0,end=10,i=0;i<=50;++i){var x=start+i/50*(end-start);res.push([x,amplitude*Math.sin(x+offset)])}return res}var data=[{data:generate(2,1.8),points:{symbol:"circle"}},{data:generate(3,1.5),points:{symbol:"square"}},{data:generate(4,.9),points:{symbol:"diamond"}},{data:generate(6,1.4),points:{symbol:"triangle"}},{data:generate(7,1.1),points:{symbol:"cross"}}];$.plot("#symbols",data,{series:{points:{show:!0,radius:3}},grid:{borderWidth:1,borderColor:"#e9e9e9",color:"#999",minBorderMargin:20,labelMargin:10,margin:{top:8,bottom:20,left:20},hoverable:!0},colors:["#00A5A8","#626E82","#FF7D4D","#FF4558","#1B2942"]})});
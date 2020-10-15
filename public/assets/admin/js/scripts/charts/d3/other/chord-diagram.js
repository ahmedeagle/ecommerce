/*=========================================================================================
    File Name: chord-diagram.js
    Description: D3 chord diagram chart
    ----------------------------------------------------------------------------------------
    Item Name: Modern Admin - Clean Bootstrap 4 Dashboard HTML Template
    Version: 1.0
    Author: PIXINVENT
    Author URL: http://www.themeforest.net/user/pixinvent
==========================================================================================*/

// Chord Diagram
// ------------------------------
$(window).on("load", function(){

    var ele = d3.select("#chord-diagram"),
    width = 600,
    height = 600;

    var formatValue = d3.formatPrefix(",.0", 1e3);

    // Matrix
    var matrix = [
        [11975,  5871, 8916, 2868],
        [ 1951, 10048, 2060, 6171],
        [ 8010, 16145, 8090, 8045],
        [ 1013,   990,  940, 6907]
    ];

    // Colors
    var color = d3.scale.ordinal()
        .domain(d3.range(4))
        .range(["#99B898", "#FECEA8", "#FF847C", "#E84A5F"]);

    // Chart
    var container = ele.append("svg");

    var svg = container,
        outerRadius = Math.min(width, height) * 0.5 - 40,
        innerRadius = outerRadius - 30;

    var chord = d3.chord()
        .padAngle(0.05)
        .sortSubgroups(d3.descending);

    var arc = d3.svg.arc()
        .innerRadius(innerRadius)
        .outerRadius(outerRadius);

    var ribbon = d3.ribbon()
        .radius(innerRadius);


    // Group
    var g = svg.append("g")
        .attr("transform", "translate(" + width / 2 + "," + height / 2 + ")")
        .datum(chord(matrix));

    var group = g.append("g")
        .attr("class", "groups")
    .selectAll("g")
        .data(function(chords) { return chords.groups; })
    .enter().append("g");

    group.append("path")
        .style("fill", function(d) { return color(d.index); })
        .style("stroke", function(d) { return d3.rgb(color(d.index)).darker(); })
        .attr("d", arc);

    var groupTick = group.selectAll(".group-tick")
        .data(function(d) { return groupTicks(d, 1e3); })
    .enter().append("g")
        .attr("class", "group-tick")
        .attr("transform", function(d) { return "rotate(" + (d.angle * 180 / Math.PI - 90) + ") translate(" + outerRadius + ",0)"; });

    groupTick.append("line")
        .attr("x2", 6);

    groupTick
      .filter(function(d) { return d.value % 5e3 === 0; })
      .append("text")
        .attr("x", 8)
        .attr("dy", ".35em")
        .attr("transform", function(d) { return d.angle > Math.PI ? "rotate(180) translate(-16)" : null; })
        .style("text-anchor", function(d) { return d.angle > Math.PI ? "end" : null; })
        .text(function(d) { return formatValue(d.value); });

    g.append("g")
        .attr("class", "ribbons")
      .selectAll("path")
        .data(function(chords) { return chords; })
      .enter().append("path")
        .attr("d", ribbon)
        .style("fill", function(d) { return color(d.target.index); })
        .style("stroke", function(d) { return d3.rgb(color(d.target.index)).darker(); });

    // Returns an array of tick angles and values for a given group and step.
    function groupTicks(d, step) {
        var k = (d.endAngle - d.startAngle) / d.value;
        return d3.range(0, d.value, step).map(function(value) {
            return {value: value, angle: value * k + d.startAngle};
        });
    }
});
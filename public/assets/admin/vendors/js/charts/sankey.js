d3.sankey = function() {
  var sankey = {},
      nodeWidth = 24,
      nodePadding = 8, // was 8, needs to be much bigger. these numbers are actually overwritten in the html when we instantiate the viz!
      size = [1, 1],
      nodes = [],
      links = [];

  sankey.nodeWidth = function(_) {
    if (!arguments.length) return nodeWidth;
    nodeWidth = +_;
    return sankey;
  };

  sankey.nodePadding = function(_) {
    if (!arguments.length) return nodePadding;
    nodePadding = +_;
    return sankey;
  };

  sankey.nodes = function(_) {
    if (!arguments.length) return nodes;
    nodes = _;
    return sankey;
  };

  sankey.links = function(_) {
    if (!arguments.length) return links;
    links = _;
    return sankey;
  };

  sankey.size = function(_) {
    if (!arguments.length) return size;
    size = _;
    return sankey;
  };

  sankey.layout = function(iterations) {
    computeNodeLinks();
    computeNodeValues();
    
    // big changes here
    // change the order and depths (y pos) won't need iterations
    computeNodeDepths();
    computeNodeBreadths(iterations);
    
    computeLinkDepths();
    return sankey;
  };

  sankey.relayout = function() {
    computeLinkDepths();
    return sankey;
  };

  sankey.link = function() {
    var curvature = .5;

      // x0 = line start X
      // y0 = line start Y
      
      // x1 = line end X
      // y1 = line end Y
      
      // y2 = control point 1 (Y pos)
      // y3 = control point 2 (Y pos)
      
    function link(d) {

        // big changes here obviously, more comments to follow
        var x0 = d.source.x + d.sy + d.dy / 2,
            x1 = d.target.x + d.ty + d.dy / 2,
          y0 = d.source.y + nodeWidth,
          y1 = d.target.y,
          yi = d3.interpolateNumber(y0, y1),
          y2 = yi(curvature),
          y3 = yi(1 - curvature);

        // ToDo - nice to have - allow flow up or down! Plenty of use cases for starting at the bottom,
        // but main one is trickle down (economics, budgets etc), not up
        
      return "M" + x0 + "," + y0        // start (of SVG path)
           + "C" + x0 + "," + y2      // CP1 (curve control point)
           + " " + x1 + "," + y3      // CP2
           + " " + x1 + "," + y1;       // end
    }

    link.curvature = function(_) {
      if (!arguments.length) return curvature;
      curvature = +_;
      return link;
    };

    return link;
  };

  // Populate the sourceLinks and targetLinks for each node.
  // Also, if the source and target are not objects, assume they are indices.
  function computeNodeLinks() {
    nodes.forEach(function(node) {
      node.sourceLinks = [];
      node.targetLinks = [];
    });
    links.forEach(function(link) {
      var source = link.source,
          target = link.target;
      if (typeof source === "number") source = link.source = nodes[link.source];
      if (typeof target === "number") target = link.target = nodes[link.target];
      source.sourceLinks.push(link);
      target.targetLinks.push(link);
    });
  }

  // Compute the value (size) of each node by summing the associated links.
  function computeNodeValues() {
    nodes.forEach(function(node) {
      node.value = Math.max(
        d3.sum(node.sourceLinks, value),
        d3.sum(node.targetLinks, value)
      );
    });
  }

  // take a grouping of the nodes - the vertical columns
  // there shouldnt be 8 - there will be more, the total number of 1st level sources
  // then iterate over them and give them an incrementing x
  // because the data structure is ALL nodes, just flattened, don't just apply at the top level
  // then everything should have an X
  // THEN, for the Y
  // do the same thing, this time on the grouping of 8! i.e. 8 different Y values, not loads of different ones!
  function computeNodeBreadths(iterations) {
          var nodesByBreadth = d3.nest()
        .key(function(d) { return d.y; })
        .sortKeys(d3.ascending)
        .entries(nodes)
        .map(function(d) { return d.values; }); // values! we are using the values also as a way to seperate nodes (not just stroke width)?

      // this bit is actually the node sizes (widths)
      //var ky = (size[1] - (nodes.length - 1) * nodePadding) / d3.sum(nodes, value)
      // this should be only source nodes surely (level 1)
      var ky = (size[0] - (nodesByBreadth[0].length - 1) * nodePadding) / d3.sum(nodesByBreadth[0], value);
      // I'd like them to be much bigger, this calc doesn't seem to fill the space!?

      nodesByBreadth.forEach(function(nodes) {
        nodes.forEach(function(node, i) {
          node.x = i;
          node.dy = node.value * ky;
        });
      });

      links.forEach(function(link) {
          link.dy = link.value * ky;
      });
      
      resolveCollisions();
      
      for (var alpha = 1; iterations > 0; --iterations) {
        relaxLeftToRight(alpha);
        resolveCollisions();
            
        relaxRightToLeft(alpha *= .99);
        resolveCollisions();
      }
      
      // these relax methods should probably be operating on one level of the nodes, not all!?
      
      function relaxLeftToRight(alpha) {
        nodesByBreadth.forEach(function(nodes, breadth) {
            nodes.forEach(function(node) {
                if (node.targetLinks.length) {
                    var y = d3.sum(node.targetLinks, weightedSource) / d3.sum(node.targetLinks, value);
                    node.x += (y - center(node)) * alpha;
                }
            });
        });

      function weightedSource(link) {
        return center(link.source) * link.value;
      }
    }

    function relaxRightToLeft(alpha) {
      nodesByBreadth.slice().reverse().forEach(function(nodes) {
        nodes.forEach(function(node) {
          if (node.sourceLinks.length) {
            var y = d3.sum(node.sourceLinks, weightedTarget) / d3.sum(node.sourceLinks, value);
            node.x += (y - center(node)) * alpha;
          }
        });
      });

      function weightedTarget(link) {
        return center(link.target) * link.value;
      }
    }
      
      function resolveCollisions() {
        nodesByBreadth.forEach(function(nodes) {
            var node,
            dy,
            x0 = 0,
            n = nodes.length,
            i;

            // Push any overlapping nodes right.
            nodes.sort(ascendingDepth);
            for (i = 0; i < n; ++i) {
                node = nodes[i];
                dy = x0 - node.x;
                if (dy > 0) node.x += dy;
                x0 = node.x + node.dy + nodePadding;
            }

            // If the rightmost node goes outside the bounds, push it left.
            dy = x0 - nodePadding - size[0]; // was size[1]
            if (dy > 0) {
                x0 = node.x -= dy;

                // Push any overlapping nodes left.
                for (i = n - 2; i >= 0; --i) {
                    node = nodes[i];
                    dy = node.x + node.dy + nodePadding - x0; // was y0
                    if (dy > 0) node.x -= dy;
                        x0 = node.x;
                    }
                }
            });
        }
      
    function ascendingDepth(a, b) {
        //return a.y - b.y; // flows go up
        return b.x - a.x; // flows go down
        //return a.x - b.x;
    }
    }
    
  // this moves all end points (sinks!) to the most extreme bottom
  function moveSinksDown(y) {
    nodes.forEach(function(node) {
      if (!node.sourceLinks.length) {
        node.y = y - 1;
      }
    });
  }

  // shift their locations out to occupy the screen
  function scaleNodeBreadths(kx) {
    nodes.forEach(function(node) {
      node.y *= kx;
    });
  }

  function computeNodeDepths() {
        var remainingNodes = nodes,
        nextNodes,
        y = 0;

        while (remainingNodes.length) {
          nextNodes = [];
          remainingNodes.forEach(function(node) {
            node.y = y;
            //node.dx = nodeWidth;
            node.sourceLinks.forEach(function(link) {
              if (nextNodes.indexOf(link.target) < 0) {
                nextNodes.push(link.target);
              }
            });
          });
          remainingNodes = nextNodes;
          ++y;
        }

        // move end points to the very bottom
        moveSinksDown(y);
    
        scaleNodeBreadths((size[1] - nodeWidth) / (y - 1));
    }
    
  // .ty is the offset in terms of node position of the link (target)
  function computeLinkDepths() {
    nodes.forEach(function(node) {
      node.sourceLinks.sort(ascendingTargetDepth);
      node.targetLinks.sort(ascendingSourceDepth);
    });
    nodes.forEach(function(node) {
      var sy = 0, ty = 0;
          //ty = node.dy;
      node.sourceLinks.forEach(function(link) {
        link.sy = sy;
        sy += link.dy;
      });
      node.targetLinks.forEach(function(link) {
          // this is simply saying, for each target, keep adding the width of the link
          // so what if it was the other way round. start with full width then subtract?
        link.ty = ty;
        ty += link.dy;
        //ty -= link.dy;
      });
    });

    function ascendingSourceDepth(a, b) {
      //return a.source.y - b.source.y;
        return a.source.x - b.source.x;
    }

    function ascendingTargetDepth(a, b) {
      //return a.target.y - b.target.y;
        return a.target.x - b.target.x;
    }
  }

  function center(node) {   
      return node.y + node.dy / 2;
  }

  function value(link) {
    return link.value;
  }

  return sankey;
};
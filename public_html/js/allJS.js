$('.triggerSide').click(function(){


$('.left.sidebar')
  .sidebar('setting', 'transition', 'overlay')
  .sidebar('show')
;
});



   var doughnutData = [
          {
            value: 26,
            color:"#F7464A",
            highlight: "#FF5A5E",
            label: "Lazer"
          },
          {
            value: 25,
            color: "#46BFBD",
            highlight: "#5AD3D1",
            label: "Alimentação"
          },
          {
            value: 19,
            color: "#FDB45C",
            highlight: "#FFC870",
            label: "Ônibus"
          }




        ];



        window.onload = function(){
          var ctx = document.getElementById("chart-area").getContext("2d");
          window.myDoughnut = new Chart(ctx).Doughnut(doughnutData, {
            responsive : true,
            animationEasing: "easeOutQuart",
            tooltipTemplate: "<%if (label){%><%=label%>: <%}%>R$ <%= value %>",
            segmentStrokeColor : "#f9f9f9",
            legendTemplate : "<ul class=\"<%=name.toLowerCase()%>-legend\"><% for (var i=0; i<segments.length; i++){%><li><span style=\"background-color:<%=segments[i].fillColor%>\"></span><%if(segments[i].label){%><%=segments[i].label%> - <div class=\"comm-how\">R$<%=segments[i].value%></div><%}%></li><%}%></ul>"
         	
          });

           var helpers = Chart.helpers;
           var legendHolder = document.getElementById('my-doughnut-legend')
      legendHolder.innerHTML = myDoughnut.generateLegend();
      // Include a html legend template after the module doughnut itself
      helpers.each(legendHolder.firstChild.childNodes, function(legendNode, index){
          helpers.addEvent(legendNode, 'mouseover', function(){
              var activeSegment = myDoughnut.segments[index];
              activeSegment.save();
              activeSegment.fillColor = activeSegment.highlightColor;
              myDoughnut.showTooltip([activeSegment]);
              activeSegment.restore();
          });
      });
      helpers.addEvent(legendHolder.firstChild, 'mouseout', function(){
          myDoughnut.draw();
      });
      canvas.parentNode.parentNode.appendChild(legendHolder.firstChild);
          

          myDoughnut.generateLegend();
          document.getElementById('my-doughnut-legend').innerHTML = myDoughnut.generateLegend();
        };


          $('#v-previsto-progress').progress();
  $('#v-gasto-progress').progress();
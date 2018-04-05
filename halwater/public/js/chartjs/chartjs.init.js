
/**
* Theme: Velonic Admin Template
* Author: Coderthemes
* Chart Js Page
*/

!function($) {
    "use strict";

    var ChartJs = function() {};

    ChartJs.prototype.respChart = function respChart(selector,type,data, options) {
        // get selector by context
        var ctx = selector.get(0).getContext("2d");
        // pointing parent container to make chart js inherit its width
        var container = $(selector).parent();

        // enable resizing matter
        $(window).resize( generateChart );

        // this function produce the responsive Chart JS
        function generateChart(){
            // make chart width fit with its container
            var ww = selector.attr('width', $(container).width() );
            switch(type){
                case 'Line':
                    new Chart(ctx).Line(data, options);
                    break;
               
            }
            // Initiate new chart or Redraw

        };
        // run function - render chart at first load
        generateChart();
    },
    //init
    ChartJs.prototype.init = function() {
        //creating lineChart
        var data = {
            labels : ["January","February","March","April","May","June","July"],
            datasets : [
                {
                    fillColor : "rgba(235, 193, 66, 0.4)",
                    strokeColor : "rgba(235, 193, 66, 1)",
                    pointColor : "#ebc142",
                    pointStrokeColor : "#fff",
                    data : [33,52,63,92,50,53,46]
                },
                {
                    fillColor : "rgba(3, 169, 244, 0.4)",
                    strokeColor : "rgba(3, 169, 244, 1)",
                    pointColor : "rgba(3, 169, 244, 1)",
                    pointStrokeColor : "#fff",
                    data : [22,20,30,60,29,25,12]
                },
                {
                    fillColor : "rgba(0, 150, 136, 0.4)",
                    strokeColor : "rgba(0, 150, 136, 1)",
                    pointColor : "rgba(0, 150, 136, 1)",
                    pointStrokeColor : "#fff",
                    data : [14,16,12,5,32,9,33]
                }

            ]
        };
        
        this.respChart($("#lineChart"),'Line',data);

      
    },
    $.ChartJs = new ChartJs, $.ChartJs.Constructor = ChartJs

}(window.jQuery),

//initializing 
function($) {
    "use strict";
    $.ChartJs.init()
}(window.jQuery);
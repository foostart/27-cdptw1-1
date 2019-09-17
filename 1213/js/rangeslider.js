/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function () {
    var options =
            {
                range: true,
                min: 0,
                max: 500,
                values: [0, 250],
                slide: function (event, ui) {
                    $("#amount").val("$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ]);
                }
            };

    $("#slider-range").slider(
            options
            );
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
            " - $" + $("#slider-range").slider("values", 1));



});
$(document).ready(function(){
		$(".button-collapse").sideNav();
                $('.slider').slider({full_width: true});
                $('select').material_select();
                $('.collapsible').collapsible();
                $('.datepicker').pickadate({
                    selectMonths: true, // Creates a dropdown to control month
                    selectYears: 15, // Creates a dropdown of 15 years to control year,
                    today: 'Hoje',
                    clear: 'Limpar',
                    close: 'Ok',
                    format: 'd/m/yyyy',
                    closeOnSelect: false // Close upon selecting a date,
                  });

});
function sliderPrev(){
	$('.slider').slider('pause');
	$('.slider').slider('prev');
}

function sliderNext(){
	$('.slider').slider('pause');
	$('.slider').slider('next');
}

var dmJSON = "/categorias";
$.getJSON( dmJSON, function(data) {
	$.each(data, function(i, option) {
        $('#sel').append($('<option/>').attr("value", option.id).text(option.categoria));
    });
})
var dmJSON = "/categorias";
$.getJSON( dmJSON, function(data) {
	$.each(data, function(i, option) {
        $('#mobile').append($('<option/>').attr("value", option.id).text(option.categoria));
    });
})

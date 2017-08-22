$(document).foundation()

var imgObit = $('#rata');


$(document).ready(function (){
		/*if (imgObit != null){
			//imgObit.addClass('orbit-image') ; 
			 imgObit.css('height', 'auto') ; 
		}*/


});

$(function() {
   $(window).on('resize', function(e) {
        /*var x = $(this).width(),    
            y = $(this).height(),   
            z = x/y,    
            
            output = $('#myOutput').length ? $('#myOutput').empty() : $('<div />', { id: 'myOutput', style: 'background: #ffa; padding: 10px; position: fixed; right: 30px; top: 30px; z-index: 999;' }).appendTo('body'),
            
            pX = $('<p />', { text: 'x: '+x }).appendTo(output),
            pY = $('<p />', { text: 'y: '+y }).appendTo(output);
        */
            if (imgObit != null){

			    imgObit.css('height', 'auto') ; 
                imgObit.css('max-height', 'auto') ; 
			}

    });
})
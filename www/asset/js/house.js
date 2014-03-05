$(document).ready(function () {
  	// Change the background every five seconds
  	window.setInterval(function(){
  		var image = $('#heading');
    	image.fadeOut(10000, function () {
        	image.css("background-image", "url(/asset/images/heading/"+ Math.floor((Math.random()*10)+1)  + ".jpg)"); 
        	image.fadeIn(10000);
    	});
	}, 15000);
});
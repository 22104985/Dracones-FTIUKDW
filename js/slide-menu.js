$(document).ready(function() {

		$("#topnav li").prepend("<span></span>"); 

		$("#topnav li").each(function() { 
			var linkText = $(this).find("a").html(); 
			$(this).find("span").show().html(linkText); 
		}); 

		$("#topnav li").hover(function() {    //On hover...
			$(this).find("span").stop().animate({
				marginTop: "-40" 
			}, 500);
		} , function() { //On hover out...
			$(this).find("span").stop().animate({
				marginTop: "0" 
			}, 500);
		});

	});
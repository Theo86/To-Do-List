// JavaScript Document

$(document).ready(function(){
	$("a").click(function(e){
		e.preventDefault();	
		var thepage = $(this).attr("href");
		
		$(".entry").fadeOut(100, function(){
			$(".entry").load(thepage);
		});
		
		
		$(".entry").fadeIn(100);
		
	});
	
});
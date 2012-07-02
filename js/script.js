// JavaScript Document

$(document).ready(function(){
	$("a[href='add.php'],a[href='register.php']").click(function(e){
		e.preventDefault();	
		var thepage = $(this).attr("href");
		$("#platform").fadeOut(100, function(){
			$("#platform").load(thepage);
		});
		
		
		$("#platform").fadeIn(100);
		
	});
	
});
$(document).ready( function() {
	openAntiMSIE();
	
	$('body').click( function() {
		closeAntiMSIE();
	});

	function closeAntiMSIE() {
		$('#anti-msie_popup').fadeOut("slow");
	}	
	
	function openAntiMSIE() {
		$('#anti-msie_popup').fadeIn("slow");		
	}
	
});

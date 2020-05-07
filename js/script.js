$(document).ready(function(){

	$(".filter-button").click(function(){
		var value = $(this).attr('data-filter');
		
		if(value == "all")
		{
			$('.filter').show();
		}
		else
		{
			$(".filter").not('.'+value).hide();
			$('.filter').filter('.'+value).show();
		}
	});
	
	if ($(".filter-button").removeClass("active")) {
	$(this).removeClass("active");
	}
	$(this).addClass("active");
	
});
(function(){
	$('#filtre button').hide();
	$('#region').click(function(){
		$('#filtre button').show();
	})
}(jQuery))

(function(){
	$('.field').hide();
	$('form button').hide();
	$('#shareExperience').click(function(){
		$('.field').show();
		$('form button').show();
	})
}(jQuery))
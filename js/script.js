// function filtre on page display site
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
//function hide filtre while user doesn't choose how he wants filter, here by region or by altitude
(function(){
	$('.field').hide();
	$('form button').hide();
	$('#shareExperience').click(function(){
		$('.field').show();
		$('form button').show();
	})
}(jQuery))
// function hide form while user doesn't click on add Experience
(function(){
	$('#filtre button').hide();
	$('#region').click(function(){
		$('.regionButton').show();
		$('#filtreAltitude').hide();
	})
	$('#filtreAltitude').click(function(){
		$('.altitudeButton').show();
		$('#region').hide();
	})
}(jQuery))

//function for change color of field when it doesn't correct
/*function surligneField(field, error)
{
   if(error)
      field.style.backgroundColor = "#FF0000";
   else
      field.style.backgroundColor = "";
}
//function for check if pseudo is correct
function checkPseudo(field)
{
   if(field.value.length > 2 || field.value.length < 20)
   {
		surligneField(field, false);
		return true;
   }
   else
   {
		surligneField(field, true);
		return false;
   }
}
//function for check if content's lenght is correct
function checkContent(field)
{
   if(field.value.length > 5 || field.value.length < 2000)
   {
		surligneField(field, false);
		return true;
   }
   else
   {
		surligneField(field, true);
		return false;
   }
}
// check function for field's form and send if is correct else print alert
function checkForm(f)
{
   var pseudoOk = checkPseudo(f.pseudo);
   var contentOk = CheckContent(f.content);
   
   if(pseudoOk && contentOk)
      return true;
   else
   {
      alert("Veuillez remplir correctement tous les champs");
      return false;
   }
}*/


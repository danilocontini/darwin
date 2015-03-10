$(document).ready(function(){  
	$('.cnpj').mask('00.000.000/0000-00');
	
	/*$("#login").submit(function(){
		
		var data = {
			"action": "test"
		};
		
		data = $(this).serialize() + "&" + $.param(data);
		
		$.ajax({
			type: "POST",
			dataType: "json",
			url: "validate.php", //Relative or absolute path to response.php file
			data: data,
			success: function(data) {
			//$(".the-return").html("Favorite beverage: " + data["favorite_beverage"] + "<br />Favorite restaurant: " + data["favorite_restaurant"] + "<br />Gender: " + data["gender"] + "<br />JSON: " + data["json"]);
			alert("Form submitted successfully.\nReturned json: " + data["json"]);

			}
		});
		return false;
	});*/
});
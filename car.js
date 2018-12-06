function car_data()
{
	
	$.ajax({
			url: 'https://python-pea.herokuapp.com/car_data',
			method: 'GET',
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response) {
						var obj = jQuery.parseJSON(response);
                        alert(obj[0].car_num);
                    }			
			});
}
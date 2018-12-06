function car_data()
{
	
	$.ajax({
			url: 'https://python-pea.herokuapp.com/car_data',
			method: 'GET',
			data: false,
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response) {
                        alert("มันมาแล้ว");
                    }			
			});
}
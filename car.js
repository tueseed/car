function car_data()
{
	alert("fdsfsdfdf");
	$.ajax({
			url: 'https://python-pea.herokuapp.com/car_data',
			method: 'GET',
			async: true,
			cache: false,
			processData: false,
			contentType: false,
			success: function(response) {
                        alert(response);
                    }			
			});
}
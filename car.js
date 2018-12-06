function car_data()
{
	
	$.ajax({
			url: 'https://python-pea.herokuapp.com/car_data',
			method: 'POST',
			async: true,
			cache: false,
			processData: false,
			crossDomain: true,
			contentType: false,
			success: function(response) {
						//var obj = jQuery.parseJSON(response);
						var obj = JSON.parse(response);
                        //alert(obj.car1.car_num);
						var table = document.getElementById("tbl");
						for(i in obj)
						{
							var x = obj[i].carnum + x;
							var row = table.insertRow(i);
							var cell1 = row.insertCell(0);
							cell1.innerHTML = x;
							//document.getElementById("tbl").innerHTML = "<tr><td>" + x +"</td></tr>"
						}
						alert(x);
                    },
			});
}
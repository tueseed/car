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
							var row = table.insertRow(i);
							var cell1 = row.insertCell(0);
							var cell2 = row.insertCell(1);
							var cell3 = row.insertCell(2);
							var cell4 = row.insertCell(3);
							cell1.innerHTML = obj[i].car_num;
							cell2.innerHTML = obj[i].type;
							cell3.innerHTML = obj[i].brand;
							cell4.innerHTML = obj[i].fuel;
						}
                    },
			});
}

function add_car()
{
	$.ajax({
			url: 'https://python-pea.herokuapp.com/add_car',
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
							cell1.innerHTML = obj[i].carnum;
							//document.getElementById("tbl").innerHTML = "<tr><td>" + x +"</td></tr>"
						}
                    },
			});
}
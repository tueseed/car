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
							var x = obj[i].car_num + x;
							var row = table.insertRow(i);
							var cell1 = row.insertCell(0);
							var cell2 = row.insertCell(1);
							var cell3 = row.insertCell(2);
							var cell4 = row.insertCell(3);
							var cell5 = row.insertCell(4);
							cell1.innerHTML = i;
							cell2.innerHTML = obj[i].car_num;
							cell3.innerHTML = obj[i].type;
							cell4.innerHTML = obj[i].brand;
							cell5.innerHTML = obj[i].fuel;
							//document.getElementById("tbl").innerHTML = "<tr><td>" + x +"</td></tr>"
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
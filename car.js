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
							var cell5 = row.insertCell(4);
							var cell6 = row.insertCell(5);
							cell1.innerHTML = obj[i].car_num;
							cell2.innerHTML = obj[i].car_type;
							cell3.innerHTML = obj[i].brand;
							cell4.innerHTML = obj[i].fuel;
							//var data_send = "'" + obj[i].car_num + "'"; 
							cell5.innerHTML = "<button type='submit' data-toggle='modal' href='#qrcode' class='btn btn-success' onclick='creat_qr(\""+ obj[i].car_num +"\")'>QRCODE</button>";
							cell6.innerHTML = '<button type="submit" class="btn btn-success">REPORT</button>';
						}
                    },
			});
}

function add_car()
{
	var formData = new FormData();
	formData.append('car_num', $("#car_num").val());
	formData.append('car_type', $("#car_type").val());
	formData.append('brand', $("#brand").val());
	formData.append('fuel', $("#fuel").val());
	$.ajax({
			url: 'https://python-pea.herokuapp.com/add_car',
			method: 'POST',
			data: formData,
			async: true,
			cache: false,
			processData: false,
			crossDomain: true,
			contentType: false,
			success: function(response) {
						alert(response);
                    },
			complete: function() {
                        location.reload();
                    }
			});
}
function creat_qr(car_num_in)
{
	var qr_head = document.getElementById("qr_car_num")
	qr_head.innerHTML = "หมายเลขทะเบียน";
	new QRCode(document.getElementById("qrc"), car_num_in);
}
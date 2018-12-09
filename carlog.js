function find_car()
{
	var url_string = window.location.href;
	var url = new URL(url_string);
	var car_num = url.searchParams.get("car_num");
	var txt_car_num = document.getElementById("car_num");
	txt_car_num.v = car_num;
}
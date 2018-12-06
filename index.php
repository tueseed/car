<html>
	<head>
		<title>ระบบแจ้งเตือนการประชุมผ่านแอพพลิเคชั่นไลน์</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0," charset="utf-8">
		<link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link href="tagsinput.css" rel="stylesheet" type="text/css">
		<script src="tagsinput.js"></script>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<script src="kpi.js"></script>
		<style type="text/css">
			.row-center
			{
				text-align:center;
			}
			body 
			{
				font-family: 'Kanit', sans-serif;
			}
			iframe 
			{
				width: 100%;
				height: 100%;
			}
			.table-group 
			{
				display: block;
				max-height: 200px;
				overflow-y: auto;
				-ms-overflow-style: -ms-autohiding-scrollbar;
			}
			.switch 
			{
				position: relative;
				display: inline-block;
				width: 60px;
				height: 34px;
			}
			.switch input 
			{ 
				opacity: 0;
				width: 0;
				height: 0;
			}
			.slider 
			{
			  position: absolute;
			  cursor: pointer;
			  top: 0;
			  left: 0;
			  right: 0;
			  bottom: 0;
			  background-color: #ccc;
			  -webkit-transition: .4s;
			  transition: .4s;
			}
			.slider:before
			{
			  position: absolute;
			  content: "";
			  height: 26px;
			  width: 26px;
			  left: 4px;
			  bottom: 4px;
			  background-color: white;
			  -webkit-transition: .4s;
			  transition: .4s;
			}
			input:checked + .slider 
			{
				background-color: #2196F3;
			}
			input:focus + .slider 
			{
				box-shadow: 0 0 1px #2196F3;
			}
			input:checked + .slider:before 
			{
				-webkit-transform: translateX(26px);
				-ms-transform: translateX(26px);
				transform: translateX(26px);
			}
			/* Rounded sliders */
			.slider.round 
			{
			  border-radius: 34px;
			}
			.slider.round:before 
			{
			  border-radius: 50%;
			}
			.sidenav 
			{
				height: 100%;
				width: 0;
				position: fixed;
				z-index: 1;
				top: 0;
				left: 0;
				background-color: #111;
				overflow-x: hidden;
				transition: 0.5s;
				padding-top: 60px;
			}

			.sidenav a 
			{
				padding: 8px 8px 8px 32px;
				text-decoration: none;
				font-size: 25px;
				color: #818181;
				display: block;
				transition: 0.3s;
			}

			.sidenav a:hover 
			{
				color: #f1f1f1;
			}

			.sidenav .closebtn 
			{
				position: absolute;
				top: 0;
				right: 25px;
				font-size: 36px;
				margin-left: 50px;
			}

			@media screen and (max-height: 450px) 
			{
			  .sidenav {padding-top: 15px;}
			  .sidenav a {font-size: 18px;}
			}
		</style>
	</head>
	<script>
	function openNav() 
	{
		document.getElementById("mySidenav").style.width = "250px";
	}

	function closeNav() {
		document.getElementById("mySidenav").style.width = "0";
	}
	</script>
	<body>
		<?php
			$server = "us-cdbr-iron-east-01.cleardb.net";
			$username = "b946a03b24557c";
			$password = "0000fb9a";
			$db = "heroku_91b59e978ea198b";
			$conn = new mysqli($server, $username, $password, $db);
			mysqli_query($conn, "SET NAMES utf8");
		?>
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		  <a href="index.php">สร้างการประชุม</a>
		  <a href="edit.php">แก้ไขการประชุม</a>
		  <a href="inform.php">ประชาสัมพันธ์</a>
		</div>
		<div class="container-fluid" style="background-color:#b461fb;">
			<div class="row row-center" >
				<div class="col-lg-1">
					<h3><span style="cursor:pointer" onclick="openNav()">&#9776;</span></h3>
				</div>
				<div class="col-lg-10" style="background-color:#b461fb;">
					<h3>ระบบแจ้งเตือนการประชุมผ่านแอพพลิเคชั่นไลน์</h3>
				</div>
			</div>
		</div>
		<div class="mt-2 container-fluid">
			<div class="row row-center">
				<div class="col-lg-4 offset-lg-4">
					<input type="button" class="btn btn-success" data-toggle="modal" href="#addtopic" value="สร้างการประชุม">
				</div>
			</div>
			<div class="modal fade" id="addtopic" role="dialog">
				<script src="putin.js"></script>
				<div class="modal-dialog modal-lg">
					<div class="modal-content">
						<form name="form1" id="form1" onsubmit="send()">
						<div class="modal-header">
							<h4 class="modal-title">เพิ่มการประชุม</h4>
							<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>
						<div class="modal-body">
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="meeting_topic">หัวข้อการประชุม</label>
										<input class="form-control" type="text" name="meeting_topic" id="meeting_topic" placeholder="หัวข้อการประชุม" required />
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="meeting_date">วันที่</label>
										<input class="form-control" type="date" name="meeting_date" id="meeting_date" required>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="meeting_time">ตั้งแต่เวลา</label>
										<input class="form-control" type="time" name="meeting_time" id="meeting_time" required >
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="meeting_time2">ถึงเวลา</label>
										<input class="form-control" type="time" name="meeting_time2" id="meeting_time2" required >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label for="meeting_place">สถานที่</label>
										<input class="form-control" type="text" name="meeting_place" id="meeting_place" required >
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label for="meeting_detial">รายละเอียด/ผู้เข้าประชุม</label>
										<input class="form-control" type="text" name="meeting_detail" id="meeting_detail" required >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-group">
										<label>ลิ้งค์เอกสาร</label>       
										<input class="form-control" type="text" name="link" id="link" required >
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-group">
										<label>แจ้งเตือน</label>       
										<input class="form-control" type="text" name="notice" id="notice" readonly >
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="table-responsive table-group">
										<table class="table table-hover">
											<thead class="thead-dark">
												<tr>
													<th scope="col">Gr.no</th>
													<th scope="col">ชื่อกลุ่ม</th>
													<th scope="col">การแจ้งเตือน</th>
												</tr>
											</thead>
											<tbody>
												<?php
													require('db/connect-db.php');
													$sql_group = "SELECT * FROM tbl_group";
													$query_group = mysqli_query($conn,$sql_group);
													while($obj = mysqli_fetch_array($query_group))
													{
														echo "<tr>";
														echo "<td>".$obj["group_num"]."</td>";
														echo "<td>".$obj["group_name"]."</td>";
												?>
												<td>
													<label class="switch">
													  <input type="checkbox"  id="check<?php echo $obj["group_num"];?>" onchange="put_in(<?php echo $obj["group_num"].",'".$obj["group_name"]."'";?>)">
													  <span class="slider round"></span>
													</label>
												</td>
												<?php
														echo "</tr>";
													}
												?>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-default" >ตกลง</button>
						</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<div class="mt-2 container-fluid">
			<div class="row">
				<div class="col-lg-12">
					<div class="table-responsive">
						<table class="table table-hover">
							<thead class="thead-dark">
								<tr>
									<th scope="col">#</th>
									<th scope="col">หัวข้อการประชุม</th>
									<th scope="col">วันที่</th>
									<th scope="col">ตั้งแต่เวลา</th>
									<th scope="col">ถึงเวลา</th>
									<th scope="col">สถานที่</th>
									<th scope="col">รายละเอียด/ผู้เข้าประชุม</th>
								</tr>
							</thead>
							<tbody>
								<?php
									require('db/connect-db.php');
									$a = 1;
									$sql_meeting = "SELECT * FROM tbl_meeting";
									$query_meeting = mysqli_query($conn,$sql_meeting);
									while($obj_meet = mysqli_fetch_array($query_meeting))
									{
										echo "<tr>";
										echo "<td>".$a."</td>";
										echo "<td>".$obj_meet["meeting_topic"]."</td>";
										echo "<td>".$obj_meet["meeting_date"]."</td>";
										echo "<td>".$obj_meet["meeting_time"]."</td>";
										echo "<td>".$obj_meet["meeting_time2"]."</td>";
										echo "<td>".$obj_meet["meeting_place"]."</td>";
										echo "<td>".$obj_meet["meeting_detail"]."</td>";
								?>
										<td><input type="button" class="btn btn-success" value="เอกสาร"></td>
										<td><input type="button" class="btn btn-success" value="แจ้งเตือน" onclick="push_now(<?php echo $obj_meet["id"];?>)"></td>
										<td><input type="button" class="btn btn-success" value="ลบ" onclick="del(<?php echo $obj_meet["id"].",'".$obj_meet["meeting_topic"]."'";?>)"></td>
								<?php
										echo "</tr>";
										$a = $a +1 ;
									}
								?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</body>
</hmtl>
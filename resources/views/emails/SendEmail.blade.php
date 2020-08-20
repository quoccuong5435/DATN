<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Send Email</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table class="responsive-table">
							<tbody>
								<tr>
									<td>Tên khách sạn</td>
									<td>:</td>
									<td>{{$details['hotel_name']}}</td>
								</tr>
								<tr>
									<td>Tên khách hàng</td>
									<td>:</td>
									<td>{{$details['user_name']}}</td>
								</tr>
								<tr>
									<td>Số lượng phòng</td>
									<td>:</td>
									<td>{{$details['room']}}</td>
								</tr>
									<tr>
									<td>Phòng</td>
									<td>:</td>
									
									
									<td>{{$details['name_room']}}</td>
									
								</tr>
								<tr>
									<td>Ngày nhận phòng</td>
									<td>:</td>
									
									<td>{{$details['date_to']}}</td>
								</tr>
								<tr>
									<td>Ngày trả phòng</td>
									<td>:</td>
									
									<td>{{$details['date_from']}}</td>
								</tr>
								<tr>
									<td>Tổng tiền</td>
									<td>:</td>
									
									<td>{{$details['price']}}</td>
								</tr>
								
								


							</tbody>
						</table>
</body>
</html>
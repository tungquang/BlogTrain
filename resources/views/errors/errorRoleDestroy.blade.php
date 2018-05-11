<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>Tài khoản {{$user->name}} không có quyền này</p>
	<p>Xin quay lại trang quản lý</p>
	<a href='{{url('admin')}}'>Admin</a>
</body>
</html>
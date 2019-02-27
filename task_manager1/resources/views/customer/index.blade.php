<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hiển thị danh sách khách hàng</title>
</head>
<body>
<h1>Danh sách khách hàng</h1>
<a href="/customer/create">Thêm mới</a>
<table border="1">
    <thead>
    <tr>
        <th>STT</th>
        <th>Họ và tên</th>
        <th>Số điện thoại</th>
        <th>Email</th>
        <th>Thao tác</th>
    </tr>
    </thead>
    <tbody>
    <?php
    $stt = 0;
    foreach ($customer as $value):
        $stt +=1;
    ?>
    <tr>
        <td align="center">{{ $stt }}</td>
        <td>{{ $value['name'] }}</td>
        <td>0{{ $value['phone'] }}</td>
        <td>{{ $value['email'] }}</td>
        <td>
            <a href="/customer/detail/{{ $value['id'] }}">Xem</a> | <a href="/customer/edit/{{ $value['id'] }}">Sửa</a> | <a href="/customer/delete/{{ $value['id'] }}">Xóa</a>
        </td>
    </tr>
    <?php
    endforeach
    ?>
    </tbody>
</table>
</body>
</html>
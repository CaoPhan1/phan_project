<!DOCTYPE html>
<html>
<head>
    <title>Sign In</title>
</head>
<body>

<h2>Đăng ký tài khoản</h2>

<form method="POST" action="{{ route('signin.check') }}">
    @csrf

    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    Re-Password: <input type="password" name="repass"><br><br>
    MSSV: <input type="text" name="mssv"><br><br>
    Lớp môn học: <input type="text" name="lopmonhoc"><br><br>

    Giới tính:
    <select name="gioitinh">
        <option value="nam">Nam</option>
        <option value="nu">Nữ</option>
    </select>
    <br><br>

    <button type="submit">Sign In</button>
</form>

</body>
</html>

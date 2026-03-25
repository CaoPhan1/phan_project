<!DOCTYPE html>
<html>
<head>
    <title>Thêm sản phẩm</title>
</head>
<body>

<h2>Thêm sản phẩm mới</h2>

<form method="POST" action="{{ route('product.store') }}">
    @csrf

    <label>Tên sản phẩm:</label><br>
    <input type="text" name="name" placeholder="Nhập tên sản phẩm"><br><br>

    <label>Giá:</label><br>
    <input type="number" name="price" placeholder="Nhập giá"><br><br>

    <button type="submit">Thêm</button>
</form>


<br>
<a href="/product">⬅ Quay lại danh sách</a>

</body>
</html>

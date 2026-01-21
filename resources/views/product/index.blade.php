<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
</head>
<body>

<h2>Danh sách sản phẩm</h2>

<ul>
    @foreach($products as $p)
        <li>{{ $p['name'] }}</li>
    @endforeach
</ul>

<a href="{{ route('product.add') }}">
    <button>Thêm mới sản phẩm</button>
</a>

</body>
</html>

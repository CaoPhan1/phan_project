<!DOCTYPE html>
<html lang ="en">
<head>
    <title>Product List</title>
</head>
<body>
    <h1>{{ $title }}</h1>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
    </tr>
    @foreach($products as $product)
        <tr>
            <td>{{ $product['id'] }}</td>
            <td>{{ $product['name'] }}</td>
            <td>{{ $product['price'] }}</td>
        </tr>
    @endforeach
    </table>




</body>
</html>

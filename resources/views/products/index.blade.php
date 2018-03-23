<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('product.create') }}">Add</a>
    <table>
        <tr>
            <td><p> Дугаар </p></td>
            <td><p> Нэр </p></td>
            <td><p> Тоо </p></td>
            <td><p> Үнэ </p></td>
            <td></td>
        </tr>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->id }}</td>
            <td>{{ $product->name }}</td>
            <td>{{ $product->too }}</td>
            <td>{{ $product->price }}</td>
            <td>
                <a href="{{ route('product.edit', ['id' => $product->id]) }}">Засах</a>
                <a href="{{ route('product.show', ['id' => $product->id]) }}">Дэлгэрэнгүй</a>
            </td>         
        </tr>
        @endforeach
    </table>
</body>
</html>
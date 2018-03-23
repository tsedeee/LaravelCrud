<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('product.store') }}" method="POST">
        {{ csrf_field() }}
        <div>
            <label for="">Нэр</label>
            <input type="text" name="name" />
        </div>
        <div>
            <label for="">Too</label>
            <input type="text" name="too" />
        </div>
        <div>
            <label for="">Үнэ</label>
            <input type="text" name="price" />
        </div>
        <div>
            <label for="">Дэлгэрэнгүй</label>
            <textarea name="description" id="" cols="20" rows="10"></textarea>
        </div>
        <div>
            <input type="submit" name="Хадгалах" />
        </div>
    </form>
</body>
</html>
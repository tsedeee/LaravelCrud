<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div>
        <div><b>Дугаар</b>: {{ $model->id }}</div>
        <div><b>Нэр</b>: {{ $model->name }}</div>
        <div><b>Тоо</b>: {{ $model->too }}</div>
        <div><b>Үнэ</b>: {{ $model->price }}</div>
        <div><b>Дэлгэрэнгүй</b>: {{ $model->description }}</div>
    <div><a href="{{ route('product.index') }}">Буцах</a></div>

    </div>
    <form action="{{ route('product.destroy', ['id' => $model->id]) }}" method="post">
        <input type="hidden" name="_method" value="DELETE" />
        {{ csrf_field() }}
        <hr>
        <input type="submit" value="Устгах" />
    </form>
</body>
</html>
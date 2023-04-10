<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>Product</title>
</head>
<body>
    <div class="product">
        @if ($product["status"] === "R")
        <div class="R">
            <h1>{{ $product["name"] }}</h1>
            <h3>{{ $product["price"] }}</h3>
            <h3>{{ $product["status"] }}</h3>
            <p>{{ $product["desc"] }}</p>
        </div>

        @elseif ($product["status"] === "SR")
            <div class="SR">
                <h1>{{ $product["name"] }}</h1>
                <h3>{{ $product["price"] }}</h3>
                <h3>{{ $product["status"] }}</h3>
                <p>{{ $product["desc"] }}</p>
            </div>

        @elseif ($product["status"] === "SSR")
            <div class="SSR">
                <h1>{{ $product["name"] }}</h1>
                <h3>{{ $product["price"] }}</h3>
                <h3>{{ $product["status"] }}</h3>
                <p>{{ $product["desc"] }}</p>
            </div>

        @endif
        <br>
        <a href="/products">Back to Product List</a>
    </div>

</body>
</html>

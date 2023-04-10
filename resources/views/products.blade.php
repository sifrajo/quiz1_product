<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/style.css">
    <title>QUIZ1_PRODUCT</title>
</head>
<body>
    <div class="products">
        <h1 class="title">PRODUCT LIST</h1>

        @foreach ($products as $product)
            @if ($product["status"] === "R")
                <div class="R">
                    <h1>
                        <a href="/products/{{ $product["slug"] }}">{{ $product["name"] }}</a>
                    </h1>
                    <h3>{{ $product["price"] }}</h3>
                    <h3>{{ $product["status"] }}</h3>
                    <p>{{ $product["desc"] }}</p>
                </div>

            @elseif ($product["status"] === "SR")
                <div class="SR">
                    <h1>
                        <a href="/products/{{ $product["slug"] }}">{{ $product["name"] }}</a>
                    </h1>
                    <h3>{{ $product["price"] }}</h3>
                    <h3>{{ $product["status"] }}</h3>
                    <p>{{ $product["desc"] }}</p>
                </div>

            @elseif ($product["status"] === "SSR")
                <div class="SSR">
                    <h1>
                        <a href="/products/{{ $product["slug"] }}">{{ $product["name"] }}</a>
                    </h1>
                    <h3>{{ $product["price"] }}</h3>
                    <h3>{{ $product["status"] }}</h3>
                    <p>{{ $product["desc"] }}</p>
                </div>

            @endif
            <br>
        @endforeach
    </div>

</body>
</html>

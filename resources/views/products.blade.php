@extends('layouts.main')

@section('title', 'Products')

{{-- @section('meta_description',{{ $products["desc"]}}->meta_description) --}}

@section('container')
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
@stop

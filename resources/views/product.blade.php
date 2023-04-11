@extends('layouts.main')

@section('title', 'Products')

@section('detail', 'Product Detail')

@section('container')
    @if ($product["status"] === "R")
        <div class="R">
            <h1>{{ $product["name"] }}</h1>
            <h3>{{ $product["price"] }}</h3>
            <h3>{{ $product["status"] }}</h3>
            <p>{{ $product["desc"] }}</p>
            <img src="/assets/R.jpg" alt="" class="img">
        </div>

    @elseif ($product["status"] === "SR")
        <div class="SR">
            <h1>{{ $product["name"] }}</h1>
            <h3>{{ $product["price"] }}</h3>
            <h3>{{ $product["status"] }}</h3>
            <p>{{ $product["desc"] }}</p>
            <img src="/assets/SR.jpg" alt="" class="img">
        </div>

    @elseif ($product["status"] === "SSR")
        <div class="SSR">
            <h1>{{ $product["name"] }}</h1>
            <h3>{{ $product["price"] }}</h3>
            <h3>{{ $product["status"] }}</h3>
            <p>{{ $product["desc"] }}</p>
            <img src="/assets/SSR.jpg" alt="" class="img">
        </div>

    @endif
    <br>
    <br>
    <a href="/products" class="back">Back to Product List</a>
@stop

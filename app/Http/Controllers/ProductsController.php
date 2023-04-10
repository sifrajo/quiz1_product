<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductsController extends Controller
{
    public function index(){
        $products = [
            [
                "name"   => "Twice Hoodie 4TH World Tour Merchandise Sweatshirt Sweater",
                "slug" => "product-1",
                "desc"   => "Kpop hoodie, suitable for Spring Summer Autumn and Winter
                Material: Made of durable and practical Material, soft and comfortable to sport
                New album Twice merchandise. Super fashion look with cool style.
                The sweater is a nice gift for army, show your support for Tzuyu Momo Sana Nayeon
                Style: korea, Kpop merchandise,Please check size information in the description before order",
                "price"  => "$18.98 - $25.98",
                "status" => "R"
            ],
            [
                "name"   => "Twice Lovely Keychain Keyring Bag Ornaments",
                "slug" => "product-2",
                "desc"   => "Kpop twice plush dolls,idol souvenir keychain,size about 12cm/4.7inch
                Material:igh quality PP cotton, soft and delicate
                USAGE:Key chain accessories,phone accessories,bag pendant accessories
                Great for Twice fans to show your support for Momo, Jihyo, Tzuyu, Nayeon, Dahyun, Jeongyeon, Sana and Chaeyoung
                WARM TIPS: If you have any question, please feel free to contact us, we will reply as soon as we could",
                "price"  => "$49.99",
                "status" => "SR"
            ],
            [
                "name"   => "Twice Light Band Kit 5th Official Merchandise",
                "slug" => "product-3",
                "desc"   => "⌚ Twice 5th Anniversary Light Band Kit (Limited Edition)
                📡 Wireless LED Control Light Band
                📦 Components : Light Band, Necklace, Photo card Set, Guarantee Card
                🎁 Seller Gift : Random Twice Transparent Photocard Set
                📅 Released on Nov 11th, 2020 : We will send the brand newproduct right after it's released",
                "price"  => "$45.99",
                "status" => "SSR"
            ]
        ];

        return view('products', [
            "title"   => "Products",
            "products"  => $products
        ]);
    }

    public function detail($slug){
        $products = [
            [
                "name"   => "Twice Hoodie 4TH World Tour Merchandise Sweatshirt Sweater",
                "slug" => "product-1",
                "desc"   => "Kpop hoodie, suitable for Spring Summer Autumn and Winter
                Material: Made of durable and practical Material, soft and comfortable to sport
                New album Twice merchandise. Super fashion look with cool style.
                The sweater is a nice gift for army, show your support for Tzuyu Momo Sana Nayeon
                Style: korea, Kpop merchandise,Please check size information in the description before order",
                "price"  => "$18.98 - $25.98",
                "status" => "R"
            ],
            [
                "name"   => "Twice Lovely Keychain Keyring Bag Ornaments",
                "slug" => "product-2",
                "desc"   => "Kpop twice plush dolls,idol souvenir keychain,size about 12cm/4.7inch
                Material:igh quality PP cotton, soft and delicate
                USAGE:Key chain accessories,phone accessories,bag pendant accessories
                Great for Twice fans to show your support for Momo, Jihyo, Tzuyu, Nayeon, Dahyun, Jeongyeon, Sana and Chaeyoung
                WARM TIPS: If you have any question, please feel free to contact us, we will reply as soon as we could",
                "price"  => "$49.99",
                "status" => "SR"
            ],
            [
                "name"   => "Twice Light Band Kit 5th Official Merchandise",
                "slug" => "product-3",
                "desc"   => "⌚ Twice 5th Anniversary Light Band Kit (Limited Edition)
                📡 Wireless LED Control Light Band
                📦 Components : Light Band, Necklace, Photo card Set, Guarantee Card
                🎁 Seller Gift : Random Twice Transparent Photocard Set
                📅 Released on Nov 11th, 2020 : We will send the brand newproduct right after it's released",
                "price"  => "$45.99",
                "status" => "SSR"
            ]
        ];

        $newProduct = [];

        foreach($products as $product) {
            if($product["slug"] === $slug) {
                $newProduct = $product;
            }
        }

        return view('product', [
            "title" => "Product",
            "product"  => $newProduct
        ]);
    }
}

<!DOCTYPE html>
<html>
    <head>
        <title>My First Webpage</title>
        </head>
    <body>
        <h1>Daftar Produk<h1>
            <ul>
                @foreach($products as $id => $product)
                <li>
                    <a href ="{{ url('/product/' . $id) }}">
                        {{ $product['name'] }} - Rp{{ number_format($product['price'], 0, ',', '.') }} 
                    </a>
                </li>
                @endforeach
            </ul>
     </body>
<html>
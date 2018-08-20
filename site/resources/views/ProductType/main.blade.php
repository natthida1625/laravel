<h1> producttype </h1>
<ul>
@foreach($products as $product) 
<li> 
    {{ $product->product_name }}
</li>
@endforeach
</ul>
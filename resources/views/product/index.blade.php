@extends('product.layout');


@section('title',"index page")
    
@section('content')

<div class="card_container" style="display: flex; flex-wrap: wrap;">    
@foreach ($prod as $item)
<div class="container text-white bg-primary mb-3" style="max-width: 18rem; height: auto;padding: 10px;">
    <div class="crad-header">product ({{ $item['id'] }})</div>
    <hr> 
    <div class="card-txt" style="line-height: 100%">
    <p>Name : <span style="font-weight: bold; font-size: 130%">{{ $item['name'] }}</span> </p>
    <p>Price : <span style="font-weight: bold; font-size: 130%">{{ $item['price'] }}</span> </p>
    <p>Details : <span style="font-weight: bold; font-size: 130%">{{ $item['details'] }}</span></p>
</div>
</div>
@endforeach
</div>
@endsection

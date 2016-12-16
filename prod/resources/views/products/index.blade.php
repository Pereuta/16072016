@extends('layouts.app')
@section('content')
@if (count($products) > 0)
@foreach($products as $product)
<div class="col-md-9 blogShort">
    
    <h2>{{$product->name}}</h2>    
    <article>
        <p>{{$product->description}}</p>        
    </article>
    <a class="btn btn-blog pull-right marginBottom10" href="{{route('product',['product'=>$product->id])}}">More Information</a> 
</div>
@endforeach
@endif
@endsection
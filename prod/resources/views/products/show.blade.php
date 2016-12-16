@extends('layouts.app')
@section('content')
@if ($product)
<div class="col-md-9 blogShort">
    <h2>{{$product->name}}</h2>
    <article>
        <p>{{$product->description}}</p>
    </article>
    </div>
@endif
@endsection
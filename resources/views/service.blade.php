@extends('app')

@section('title','services page')

@section('content')
<ul>
@foreach ($collection as $item)
    <li> {{$item}} </li>
@endforeach
</ul>
@endsection
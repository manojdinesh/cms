@extends('layouts.app')

@section('content')

<h1>contact page</h1>

@if(count($people))

<ul>
    @foreach($people as $person)

    <li>{{$person}}</li>

    @endforeach
</ul>

@endif

@endsection

@section('footer')

<script>alert("Hellow visitor")</script>

@endsection
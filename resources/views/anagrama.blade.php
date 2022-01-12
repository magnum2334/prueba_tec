@extends('layouts.app')
@section('content')
    @include('from', ['method' => 'POST', 'url' => route('anagrama')])  
@endsection
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="d-flex justify-content-center">
                    <a href="{{route('create') }}" class="btn btn-outline-dark btn-fab btn-lg " id ="btn-post" title="anagram">
                        anagrama
                   </a>
                   <a href="{{route('matriz') }}" class="btn btn-outline-dark btn-fab btn-lg mx-3" id ="btn-post" title="matriz">
                    matriz 3x3
                    </a>
                    <a href="{{route('sam') }}" class="btn btn-outline-dark btn-fab btn-lg" id ="btn-post" title="matriz">
                        La casa de Sam 
                    </a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

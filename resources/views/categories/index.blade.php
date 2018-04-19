@extends('layouts.app')

@section('stylesheets')

    <link href="{{ asset('css/categories.css') }}" rel="stylesheet">

@endsection

@section('content')
    <div class="container">
        <div class="row categories">
            @foreach ($categories as $category)
                <div class="col-md-12 category">
                    <h5>{{ $category->name }}</h5>
                    <hr/>

                    @foreach ($category->children as $sub)
                        <a href="{{ route('listings.index', [$area, $sub]) }}" class="cat">{{ $sub->name }} ({{ $sub->listings->count() }})</a>
                    @endforeach

                </div>
            @endforeach
        </div>
    </div>
@endsection

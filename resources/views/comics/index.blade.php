@extends('layouts.main')

@section('title', 'Comics')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12 ps-4">
                <h1>Comics:</h1>
                @foreach ($comics as $comic)
                <div class="col-3">
                    <div class="card" style="width: 18rem;">
                        <img src="{{ $comic->thumb }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $comic->title }}</h5>
                            <p class="card-text">{{ $comic->series }}</p>
                            <p class="card-text">{{ $comic->sale_date }}</p>
                            <p class="card-text">{{ $comic->price }}</p>
                            <a href="#" class="btn btn-primary">Info</a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
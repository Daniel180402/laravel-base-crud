@extends('layouts.main')

@section('title', 'Train')

@section('content')
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-12 d-flex justify-content-center">
                <h1>Ecco le informazioni che ha cercato!</h1>
            </div>
            <div class="col-4 d-flex justify-content-center">
                <div class="card mb-5" style="width: 18rem;">
                    <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $comic->title }}</h5>
                        <p class="card-text">Series: {{ $comic->series }}</p>
                        <p class="card-text">Release Date: {{ $comic->sale_date }}</p>
                        <p class="card-text">Price: {{ $comic->price }}$</p>
                        <a href="{{ route('comics.index') }}" class="btn btn-primary">back</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
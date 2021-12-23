@extends('layouts.default')


@section('page_title', 'Movies')

@section('content')
    <div class="container">
        <div class="row row-cols-3">
            @foreach ($movies as $movie)
                <div class="col ">
                    @include('partials.card')
                </div>
            @endforeach
        </div>
    </div>


@endsection

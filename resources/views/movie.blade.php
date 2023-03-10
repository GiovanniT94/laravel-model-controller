@extends('guest.layouts.base')

@section('content')
<div class="row p-5">
    @foreach ($movies as $movie)
    <div class="col-3">
            <a href="/movie">
                <div class="card h-100">
                    <div class="card-body">
                    <h5 class="card-title">Title: {{$movie['title']}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Original title: {{$movie['original_title']}}</h6>
                    <div class="card-text">Nationality: {{$movie['nationality']}}</div>
                    <div class="card-text">Date: {{$movie['date']}}</div>
                    <div class="card-text">Vote: {{$movie['vote']}}</div>
                    </div>
                </div>
            </a>
            </div>
        @endforeach
</div>
@endsection
@extends('layouts.main')
@section('title', 'Homepage')
@section('content')
    <div class="row">
        @foreach ($games as $game)
            <div class="col-md-6">
                <div class="card m-4" style="min-height: 40em">
                    <div class="custom-card-image">
                        <img src="{{ $game['img'] }}" class="card-img-top" alt="{{ $game['name'] }}" style="max-height: 25em;">
                    </div>
                    <div class="card-body">
                        <h5 class="card-title">{{ $game['name'] }}</h5>
                        <p class="card-text">{{ $game['description'] }}</p>
                        <a href="game/{{ $game['id'] }}" class="btn btn-primary">Info Selengkapnya</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection

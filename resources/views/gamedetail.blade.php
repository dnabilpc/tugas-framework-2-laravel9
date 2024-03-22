@extends('layouts.main')
@section('title', 'Homepage')
@section('content')
    <div class="container">

        <div class="row">
            <div class="col">
                {{-- Disini ditampilkan isi data dari  variable $gamedetails (dikirim )--}}
                <h1>{{ $gamedetails['name'] }} </h1>
                <img src="{{ $gamedetails['img'] }}" alt="{{ $gamedetails['name'] }}" style="width: 50em;">
                <p>Rp.{{ $gamedetails['price'] }},00</p>
                <br>
                <p>Genre : {{ $gamedetails['genre'] }}</p>
                <p>{{$gamedetails['description']}}</p>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        @include('elements.nav')
    </div>
    @include('elements.carousel')
    <div class="container">
        <img class="img-fluid" src="{{asset('storage/komplet_treningowy.jpg')}}" />
    </div>

    @include('elements.footer')
@endsection

@extends('default')
@section('content')
    <ul>
        @foreach($huisdieren as $huisdier)
            @include('homepage.components.homeCard--index')
        @endforeach
    </ul>
@endsection
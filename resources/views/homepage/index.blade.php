@extends('default')
@section('content')
    <ul class="u-ul-padding">
        @foreach($huisdieren as $huisdier)
            @include('homepage.components.homeCard--index')
        @endforeach
    </ul>
@endsection
@extends('default')
@section('content')
@include('homepage.components.checkbox--index')
    <ul class="u-ul-padding u-ul-grid">
        @foreach($huisdieren as $huisdier)
            @include('homepage.components.homeCard--index')
        @endforeach
    </ul>
@endsection
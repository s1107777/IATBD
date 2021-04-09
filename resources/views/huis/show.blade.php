@extends('default')
@section('content')
    <ul class="fotoHuis">
        @foreach($foto as $foto)
            @include('huis.components.fotoCard--show')
        @endforeach
    </ul>
        
@endsection
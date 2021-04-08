@extends('default')
@section('content')
    <ul class="fotoHuis">
        @foreach($foto as $foto)
            <li>
                <article >
                    <figure>
                        <img class="fotoHuis__image" src="{{$foto->image}}" alt="huis">
                    </figure>
                </article>
            </li>
        @endforeach
    </ul>
        
@endsection
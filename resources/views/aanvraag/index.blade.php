@extends('default')
@section('content')
    <ul class="u-ul-padding-7 u-list-style-none u-ul-grid">
        @foreach($aanvragen as $aanvraag)
            @include('aanvraag.components.aanvraagCard--index')
        @endforeach
    </ul>
@endsection

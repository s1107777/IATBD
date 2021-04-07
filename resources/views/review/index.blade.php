@extends('default')
@section('content')
    <ul class="u-ul-padding-7 u-list-style-none u-ul-grid">
        @foreach($reviews as $review)
            @include('review.components.reviewCard--index')
        @endforeach
    </ul>

@endsection

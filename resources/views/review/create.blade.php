@extends('default')
@section('content')
<article class="create-form">
    <form class="create-form__form card" action="/review" method="post">
        @csrf
        <section class="create-form__section">
            <label for="naam">Naam:</label>
            <input class="create-form__section--input" type="text" name="naam" id="naam">
        </section>

        <section class="create-form__section" >
            <label for="bericht">Schrijf hier je review:</label>
            <textarea class="create-form__section--input" name="bericht" id="bericht" cols="30" rows="10"></textarea>
        </section>

        <section class="create-form__section">
            <button class="create-from__form--button">Verstuur</button>
        </section>
    </form>
</article>
@endsection
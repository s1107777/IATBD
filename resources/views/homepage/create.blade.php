@extends('default')
@section('content')
<article class="create-form">
    <form class="create-form__form card" action="/home" method="post">
        @csrf
        <section class="create-form__section">
            <label class="create-form__label" for="naam">Naam</label>
            <input class="create-form__input" type="text" name="naam" id="naam">
        </section>

        <section class="create-form__section">
            <label class="create-form__label" for="huisdierNaam">Naam huisdier:</label>
            <select class="create-form__input" id="huisdierNaam" name="huisdierNaam">
                @foreach($huisdieren as $huisdier)
                    <option value="{{$huisdier->naam}}">{{$huisdier->naam}}</option>
                @endforeach
            </select>
        </section>

        <section class="create-form__section" >
            <label class="create-form__label" for="vraag">Stel je vraag:</label>
            <textarea class="create-form__input" name="vraag" id="vraag" cols="30" rows="10"></textarea>
        </section>

        <section class="create-form__section">
            <button class="create-from__form--button">Verstuur</button>
        </section>
    </form>
</article>
@endsection
@extends('default')
@section('content')
    @foreach ($huis as $huis)
        <article class="profielHuis ">
            <figure>
                <img class="profielHuis__img" src="{{$huis->image}}" alt="huis">
            </figure>
            <section class="profielHuis__section">
                <div class="profielHuis__Section--div">
                    <p><b>Straatnaam + huisnummer:</b> {{$huis->straatnaam}} {{$huis->huisnummer}}</p>
                </div>
                <div class="profielHuis__Section--div">
                    <p><b>Postcode:</b> {{$huis->postcode}}</p>
                </div>
                <div class="profielHuis__Section--div">
                    <p><b>Woonplaats:</b> {{$huis->woonplaats}}</p>
                </div>                
            </section>
            <section class="profielHuis__sectionBtn">
                <a class="profielHuis__sectionBtn--button" href="/fotos/{{$huis->huis_id}}" type=button>Alle foto's</a>
                <a class="profielHuis__sectionBtn--button" href="/fotos" type=button >Uploaden</a>
            </section>
        </article>
    @endforeach
@endsection
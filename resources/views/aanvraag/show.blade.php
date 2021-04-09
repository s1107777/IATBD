@extends('default')
@section('content')
    <article class="u-ul-padding-7">
        <div class="card aanvraagCard__article u-div-width">
            <section class="aanvraagCard__section u-section-bold">
                <h1>{{$aanvraag->naam}}</h1>
            </section>
            <section class="aanvraagCard__section">
                <p>{{$aanvraag->naamDier}}</p>
            </section>
            <section" class="aanvraagCard__section">
                <p>{{$aanvraag->vraag}}</p>
            </section>
        </div>
        <section class="aanvraagCard__sectionBtn">
            <form action="/review/create" method="get">
                {{csrf_field()}}
                <button class="aanvraagCard__sectionBtn--btn">Accepteren</button>
            </form>
            <form action="/aanvraag/{{$aanvraag->aanvraag_id}}/delete" method="delete">
                {{csrf_field()}}
                <button class="aanvraagCard__sectionBtn--btn" >Verwijderen</button>
            </form>
            <form action="/profiel" method="get">
                {{csrf_field()}}
                <button class="aanvraagCard__sectionBtn--btn">Profiel bekijken</button>
            </form>
            <form action="/admin/{{$aanvraag->user_id}}" method="post">
                {{csrf_field()}}
                <input type="submit"value="Blokkeren" class="aanvraagCard__sectionBtn--btn"></input>
            </form>
        </section>
        
    </article>
@endsection
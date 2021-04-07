@extends('default')
@section('content')
    <article class="u-ul-padding-7">
        <div class="card">
            <header>
                <h1>{{$aanvraag->naam}}</h1>
            </header>
            <section>
                <p>{{$aanvraag->naamDier}}</p>
            </section>
            <section">
                <p>{{$aanvraag->vraag}}</p>
            </section>
            <section>
                <button>Accepteren</button>
                <button>Verwijderen</button>
                <button>Blokkeren</button>
            </section>
        </div>
    </article>
@endsection
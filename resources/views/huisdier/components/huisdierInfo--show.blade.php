<article class="huisdier">
    <header class="huisdier__header">
        <h1 class="huisdier__heading">{{$huisdier->naam}}</h1>
    </header>
    <figure class="huisdier__figure">
        <img class="huisdier__img" 
            srcset="
            {{$huisdier->foto640}} 640w,
            {{$huisdier->foto1280}} 1280w,
            {{$huisdier->foto1920}} 1920w"
            sizes="(min-width: 1250px) 1920px, (min-width: 950px) 1280px, 640px"
            src="{{$huisdier->foto640}}" alt="{{$huisdier->naam}}">
    </figure>
    <section class="huisdier__sectionInfo">
        <p>Dit is {{$huisdier->naam}} en {{$huisdier->naam}} is {{$huisdier->leeftijd}} jaar oud.</p>
        <p>{{$huisdier->naam}} woont in {{$huisdier->plaatsnaam}} en zoekt een oppas voor {{$huisdier->aantal_dagen}} dagen.</p>
        <p>Het gaat om de datum {{$huisdier->begin_dag}}.</p>
        <p>Het dagtarief is €{{$huisdier->dagtarief}}</p>
        <p>Vind je het leuk om op mijn lieve {{$huisdier->soort}} te passen? Aarzel dan niet en reageer!</p>
    </section>
    @if(Auth::user()->role == 'Gebruiker')
        <a class="huisdier__button" href="/home/create">Reageren</a>
    @endif
</article>

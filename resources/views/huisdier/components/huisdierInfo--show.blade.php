<article class="huisdier">
    <header class="huisdier__header">
        <h1 class="huisdier__heading">{{$huisdier->naam}}</h1>
    </header>
    <figure class="huisdier__figure">
        <img class="huisdier__img" src="{{$huisdier->foto}}" alt="">
    </figure>
    <section class="huisdier__sectionInfo">
        <p>Dit is {{$huisdier->naam}} en {{$huisdier->naam}} is {{$huisdier->leeftijd}} jaar oud.</p>
        <p>{{$huisdier->naam}} woont in {{$huisdier->plaatsnaam}} en zoekt een oppas voor {{$huisdier->aantal_dagen}} dagen.</p>
        <p>Het gaat om de datum {{$huisdier->begin_dag}}.</p>
        <p>Het dagtarief is €{{$huisdier->dagtarief}}</p>
        <p>Vind je het leuk om op mijn lieve {{$huisdier->soort}} te passen? Aarzel dan niet en reageer!</p>
    </section>
    <section class="huisdier__sectionBtn">
        <button class="huisdier__button">Reageren</button>
    </section>
</article>
<li class="u-list-style-none homeCard card" data-soort-huisdier={{$huisdier->soort}}>
    <a href="/home/{{$huisdier->huisdier_id}}">
        <article class="homeCard__article">
            <header class="homeCard__article--header">
                <h1 class="homeCard__article--heading">{{$huisdier->naam}}</h1>
            </header>
            <figure class="homeCard__article--figure">
                <img class="homeCard__article--image" src="{{$huisdier->foto}}" alt="">
            </figure>
            <section class="homeCard__article--section">
                <button class="homeCard__article--div">Meer informatie</button>
            </section>
        </article>
    </a>
</li> 
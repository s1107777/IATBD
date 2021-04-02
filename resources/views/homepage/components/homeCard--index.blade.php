<li class="u-list-style-none homeCard">
    <a href="/home/{{$huisdier->huisdier_id}}">
        <article class="homeCard__article">
            <header class="homeCard__article--header">
                <h1 class="homeCard__article--heading">{{$huisdier->naam}}</h1>
            </header>
            <figure class="homeCard__article--figure">
                <img class="homeCard__article--image" src="{{$huisdier->foto}}" alt="">
            </figure>
            <section class="homeCard__article--sectionBtn">
                <button class="homeCard__article--button">Meer informatie</button>
            </section>
        </article>
    </a>
</li> 
<li class="u-list-style-none homeCard card" data-soort-huisdier={{$huisdier->soort}}>
    <a href="/home/{{$huisdier->huisdier_id}}">
        <article class="homeCard__article">
            <header class="homeCard__article--header">
                <h1 class="homeCard__article--heading">{{$huisdier->naam}}</h1>
            </header>
            <figure class="homeCard__article--figure">
                <img class="homeCard__article--image" srcset="
                    {{$huisdier->foto640}} 640w,
                    {{$huisdier->foto1280}} 1280w,
                    {{$huisdier->foto1920}} 1920w"
                    sizes="(min-width: 1250px) 1920px, (min-width: 950px) 1280px, 640px"
                    src="{{$huisdier->foto640}}" alt="{{$huisdier->naam}}">
            </figure>
            <section class="homeCard__article--section">
                <button class="homeCard__article--section-btn">Meer informatie</button>
            </section>
        </article>
    </a>
</li> 
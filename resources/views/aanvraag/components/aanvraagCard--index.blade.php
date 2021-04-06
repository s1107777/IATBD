<li class="aanvraagCard">
    <a href="/aanvraag/{{$aanvraag->aanvraag_id}}">
        <article class="aanvraagCard__article card">
            <section class="aanvraagCard__section u-section-bold">
                <p>{{$aanvraag->naam}}</p>
            </section>
            <section class="aanvraagCard__section">
                <p>{{$aanvraag->naamDier}}</p>
            </section>
            <section class="aanvraagCard__section">
                <p>{{$aanvraag->vraag}}</p>
            </section>
        </article>
    </a>
</li>
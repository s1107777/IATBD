<article class="u-ul-padding-7">
    <section class="card uploadSection">
        <header class="uploadSection__header">
            <h1 class="uploadSection__heading">Upload een nieuwe foto van je huis!</h1>
        </header>
        <form class="uploadSection_form" action="/upload" method="post" enctype="multipart/form-data">
            @csrf
            <label class="uploadSection__form--label" for="foto">Zoek een foto:</label>
            <input class="uploadSection__form--input" type="file" name="foto" >

            <button class="uploadSection__form--button" type="submit">Upload</button>
        </form>
    </section>
</article>
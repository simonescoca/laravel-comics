<main>
    <div class="container d-flex flex-wrap">
        @foreach ($comics as $comic)
            <div class="card">
                <img src="{{ $comic["thumb"] }}" class="card-img-top" alt="{{ $comic["title"] }}">
                <div class="card-body p-0 py-3">
                    <p class="card-title m-0">
                        {{ $comic["title"] }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
    <div class="container d-flex my-3">
        <div class="m-auto my_load-more">
            load more
        </div>
    </div>
</main>

<body>
<header>
    @section("header")
    @endsection
</header>
<main>
    <section class="wrapper">
        <section class="divider d-flex flex-row gap-2 ">

            @include("layouts.panel.sidebar")

            <article id="content" class="bg-color" style="width: 85%">

                @include("layouts.panel.searchBox")

                @if($errors->any())
                    <div class="alert mx-8 my-2 bg-danger px-1 py-1 text-center">
                    <span>
                        <ul>
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </ul>
                    </span>
                    </div>
                @endif

                @section("body")

                @show
            </article>
        </section>
    </section>
</main>

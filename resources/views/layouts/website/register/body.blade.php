<body>
<header>
    @section("header")
    @endsection
</header>
<main>
    @if($errors->any())
        <div class="error d-flex justify-content-center align-items-center my-3 ">
            <div class="message bg-danger px-1 py-2 text-center" style="width: 70%">
                <ol>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ol>
            </div>
        </div>
    @endif
    @section("body")

    @show
</main>

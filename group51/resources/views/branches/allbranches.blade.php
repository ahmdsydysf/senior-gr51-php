<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<h2>

    {{-- <form action="{{ route('branch.index') }}" method="get">
        <input type="text" name="search">
        <button>search</button>
    </form> --}}
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">cat name</th>
                <th scope="col">cat code</th>
                <th scope="col">cat image</th>
                <th scope="col">cat state</th>
                <th scope="col">cat desc</th>
                <th scope="col">cat Parent</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            {{-- @dd($allData) --}}


            @foreach ($allData->Products as $prod )
            {{-- @foreach ( $prod->Users as $user )
            {{ $user->name }}
            @endforeach --}}
            @dump($prod)
            @endforeach




        </tbody>
    </table>
    <a href="{{ route('category.create') }}"> add new </a>
    {{-- <a href="{{ url('branches/add') }}"> add new </a> --}}
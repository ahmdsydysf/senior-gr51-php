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
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $allData as $data )

            <tr>
                <th scope="row">{{ $data->id }}</th>
                <td>{{ $data->name }}</td>
                <td>{{ $data->code }}</td>
                <td><img width="150" height="150" src="{{ asset('uploads/category/' . $data->cat_img) }}" alt=""
                        srcset=""></td>
                <td>{{ $data->status }}</td>
                <td>{{ $data->description }}</td>
                <td>
                    {{-- <a href="" class="btn btn-info">edit</a> --}}
                    <form action="{{ route('category.destroy' , $data->id ) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger">delete</button>
                    </form>
                    @if ($data->deleted_at)

                    <a href="{{ route('category.show',['category' => $data->id ]) }}">restore</a>
                    @endif
                    <a href="{{ route('category.edit',['category' => $data->id ]) }}">edit</a>
                    {{-- <a href="{{ route('branch.show',['id' => 1]) }}">delete</a> --}}
                    {{-- <a href="{{ route('branch.edit',1) }}">edit</a>
                    <a href="{{ url('branches/edit/1') }}">edit</a> --}}
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    <a href="{{ route('category.create') }}"> add new </a>
    {{-- <a href="{{ url('branches/add') }}"> add new </a> --}}
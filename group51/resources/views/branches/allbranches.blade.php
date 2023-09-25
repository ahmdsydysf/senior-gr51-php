<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<h2>{{ $dataCount }}

    <form action="{{ route('branch.index') }}" method="get">
        <input type="text" name="search">
        <button>search</button>
    </form>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">branch name</th>
                <th scope="col">branch location</th>
                <th scope="col">branch phone</th>
                <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>

            @foreach ( $allData as $data )

            <tr>
                <th scope="row">{{ $data->id }}</th>
                <td>{{ $data->branch_name }}</td>
                <td>{{ $data->branch_location }}</td>
                <td>{{ $data->branch_phone }}</td>
                <td>
                    <a href="" class="btn btn-info">edit</a>
                    <a href="" class="btn btn-danger">delete</a>
                    {{-- <a href="{{ route('branch.edit',['id' => 1]) }}">edit</a>
                    <a href="{{ route('branch.show',['id' => 1]) }}">delete</a> --}}
                    {{-- <a href="{{ route('branch.edit',1) }}">edit</a>
                    <a href="{{ url('branches/edit/1') }}">edit</a> --}}
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    <a href=""> add new </a>
    {{-- <a href="{{ url('branches/add') }}"> add new </a> --}}
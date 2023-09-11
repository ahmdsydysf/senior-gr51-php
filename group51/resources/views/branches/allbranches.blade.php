{{ $webName }}
{{ $ty }}
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>
                <a href="{{ route('branch.edit',['id' => 1]) }}">edit</a>
                <a href="{{ route('branch.show',['id' => 1]) }}">delete</a>
                {{-- <a href="{{ route('branch.edit',1) }}">edit</a>
                <a href="{{ url('branches/edit/1') }}">edit</a> --}}
            </td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>
                <a href="{{ route('branch.edit',['id' => 2]) }}">edit</a>
                <a href="{{ route('branch.show',['id' => 2]) }}">delete</a>

                {{-- <a href="{{ route('branch.edit',1) }}">edit</a>
                <a href="{{ url('branches/edit/1') }}">edit</a> --}}
            </td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td colspan="2">Larry the Bird</td>
            <td>
                <a href="{{ route('branch.edit',['id' => 3]) }}">edit</a>
                <a href="{{ route('branch.show',['id' => 3]) }}">delete</a>

                {{-- <a href="{{ route('branch.edit',1) }}">edit</a>
                <a href="{{ url('branches/edit/1') }}">edit</a> --}}
            </td>
        </tr>
    </tbody>
</table>
<a href="{{ asset('PHP_Start.pdf') }}"> add new </a>
{{-- <a href="{{ url('branches/add') }}"> add new </a> --}}

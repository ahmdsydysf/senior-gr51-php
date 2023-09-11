<h1> dle data {{ $id }}</h1>

are you sure deleting this data

<form action="{{ route('branch.del', $id) }}" method="post">
    @csrf
    @method('DELETE')
    <button>yes</button>
</form>
<a href="{{ route('branch.all') }}">no</a>

<form action="{{ route('pro.store') }}" method="post">
    @csrf
    <input type="text" name="a">
    <input type="text" name="b">
    <input type="text" name="c">
    <button>add</button>
</form>
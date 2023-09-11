<h1> edit data {{ $id }} </h1>


<form action="{{ route('branch.update' , $id ) }}" method="post">
    @csrf
    @method('PUT')
    <input type="text" value="{{ $id }}">
    <input type="text" value="{{ $id }}">
    <input type="text" value="{{ $id }}">
    <button>update</button>
</form>

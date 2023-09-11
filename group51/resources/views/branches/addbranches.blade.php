<h1> add new </h1>
<form action="{{ route('branch.store') }}" method="post">
    @csrf
    <input type="checkbox" name="course" value="b1" id="">b1
    <input type="checkbox" name="course" value="b2" id="">b2
    <input type="checkbox" name="course" value="b3" id="">b3
    <input type="text" name="bName">
    {{-- <input type="text" name="bName[1]">
    <input type="text" name="bName[2]"> --}}
    <input type="text" name="bTele">
    <input type="text" name="bAddress">
    <button>add</button>
</form>

<h1> add new </h1>
<form action="{{ route('category.store') }}" method="post" enctype="multipart/form-data">
    @csrf

    <input type="text" name="name" value="{{ old('name') }}" placeholder="cat name" id="">
    @error('name')
    {{ $message }}
    @enderror
    <input type="text" name="code" value="" placeholder="cat code" id="">

    <textarea name="description" id="" cols="30" rows="10">

    </textarea>

    <input type="file" name="cat_img" id="">

    <input type="radio" name="status" value="actv" id="">active
    <input type="radio" name="status" value="not_actv" id="">not active

    <button>add</button>
</form>
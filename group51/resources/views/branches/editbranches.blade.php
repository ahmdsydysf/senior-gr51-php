<h1> edit data {{ $category->id }} </h1>
<form action="{{ route('category.update' , $category->id) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <input type="text" name="name" value="{{ $category->name }}" placeholder="cat name" id="">
    @error('name')
    {{ $message }}
    @enderror
    <input type="text" name="code" value="{{ $category->code }}" placeholder="cat code" id="">

    <textarea name="description" id="" cols="30" rows="10">
        {{ $category->description }}
    </textarea>

    <input type="file" name="cat_img" id="">

    <input type="radio" name="status" {{ $category->status == 'actv' ? 'checked' : '' }} value="actv" id="">active
    <input type="radio" name="status" @checked($category->status == 'not_actv') value="not_actv" id="">not active

    <button>add</button>
</form>
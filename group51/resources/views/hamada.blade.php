@if ($errors->any())
@foreach ( $errors->all() as $error )
<h1>{{ $error }}</h1>
@endforeach
@endif

<style>
    .b-red {
        border: solid 2px red;
    }
</style>
<form action="{{ url('sessionTest') }}" method="post" enctype="multipart/form-data">
    {{-- <form action="/sessionTest" method="post" enctype="multipart/form-data"> --}}
        {{-- <form action="{{ route('session.test') }}" method="post" enctype="multipart/form-data"> --}}
            @csrf
            <label for="">user</label>
            <input value="{{ old('username') }}" type="text" name="username" class="@error('username')
                b-red
            @enderror">
            @error('username')
            {{ $message }}
            @enderror
            <label for="">email</label>
            <input value="{{ old('email') }}" type="text" name="email">
            @error('email')
            {{ $message }}
            @enderror
            <label for="">pass</label>
            <input value="{{ old('password') }}" type="text" name="password">
            @error('password')
            {{ $message }}
            @enderror
            <button type="submit">add</button>
        </form>
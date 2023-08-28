<h1> this is webdata / products / all Data {{ $id }} and age is {{ $catid }} </h1>
{{ $categoryData }}
{{ $productData['name'] }}

<a href="{{ route('pro.add') }}">Add new product</a>
<a href="{{ url('product/add') }}">Add new product</a>
{{-- {{ $data['name'] }} --}}


{{-- @foreach ( $data as $snglData )
<h2> <span> {{ $snglData }} </span> </h2>
@endforeach --}}
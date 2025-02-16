<x-playout>
    <h1>
        New Product
    </h1>
   
    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{old('name')}}">

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10">{{old('description')}}</textarea>

        <label for="size">Size</label>
        <input type="text" name="size" id="size" value="{{old('size')}}">

        <button>Save</button>
    </form>
</x-playout>
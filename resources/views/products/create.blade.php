<x-playout>
    <h1>
        New Product
    </h1>
    <form action="{{ route('product.store') }}" method="post">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="name">

        <label for="description">Description</label>
        <textarea name="description" id="description" cols="30" rows="10"></textarea>

        <label for="size">Size</label>
        <input type="text" name="size" id="size">

        <button>Save</button>
    </form>
</x-playout>
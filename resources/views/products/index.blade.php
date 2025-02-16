<x-layout>
  <div>
    Simplicity is an acquired taste. - Katharine Gerould 
  </div>
  <div>
    @foreach ($products as $product)
    <h2>{{$product->name }}</h2>
    <p>{{$product->description }}</p>
    <p>{{$product->size }}</p>
    @endforeach
  </div>
  <div>
    <a href="{{ route('home') }}">Home</a><br>
    <a href="{{ route('info.index') }}">Info</a>
  </div>
</x-layout>

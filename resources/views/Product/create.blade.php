@extends('layouts.main')

@section('content')
<main>
<div class="container-fluid px-4">
<h1 class="mt-4">Create Product</h1>  
<form action="{{ route('product.store')}}" method="POST">
    @csrf
  <div class="form-group mb-2">
    <label for="category">Category</label>
    <select name="category" id="category" class="form-control">
        <option value="" selected-disable>Choose category</option>
        @foreach ($categories as $cat)
        <option value="{{ $cat->id }}">{{ $cat->name }}</option>
        @endforeach
    </select>
    <label for="name">Name</label>
    <input type="text" class="form-control" id="name"  name="name" required>
    <label for="price">Price</label>
    <input type="text" class="form-control" id="price"  name="price" required>
    <label for="sale_price">Sale Price</label>
    <input type="text" class="form-control" id="sale_price"  name="sale_price" required>
    <label for="brands">brand</label>
    <input type="text" class="form-control" id="brands"  name="brands" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>

</main>
@endsection
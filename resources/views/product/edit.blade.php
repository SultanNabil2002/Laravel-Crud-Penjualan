@extends('layouts.app')

@section('body')
    <div class="container">
        <h1 class="mb-3">Edit Product</h1>
        <hr>
        <form action="{{ route('produk.update', $product->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="product_id">Product ID</label>
                        <input type="text" name="product_id" class="form-control" id="product_id" placeholder="Masukkan product_id" value="{{ $product->product_id }}">
                    </div>

                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" name="name" class="form-control" id="name" placeholder="Masukkan nama barang" value="{{ $product->name }}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label for="price" class="text-start">Price</label>
                        <input type="text" name="price" class="form-control" id="price" placeholder="Harganya berapa" value="{{ $product->price }}">
                    </div>

                    <div class="form-group">
                        <label for="description" class="text-start">Description</label>
                        <textarea class="form-control" name="description" id="description" placeholder="Description">{{ $product->description }}</textarea>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" id="image">
            </div>

            <br>
            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
@endsection

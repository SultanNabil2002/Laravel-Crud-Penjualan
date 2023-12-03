@extends('layouts.app')

@section('body')
    <div class="container">
        <h1 class="mb-3">Detail Product</h1>
        <hr>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Product ID</label>
                <input type="text" name="product_id" class="form-control" value="{{ $product->product_id }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Name</label>
                <input type="text" name="name" class="form-control" value="{{ $product->name }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Price</label>
                <input type="text" name="price" class="form-control" value="{{ $product->price }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Image</label>
                <div>
                    @if ($product->image)
                        <img src="{{ asset('C:\Users\Nabil Luthfi\Pictures\Screenshots' . $product->image) }}" alt="Product Image" class="mt-2" style="max-width: 200px;">
                    @else
                        <span class="text-muted">No image available</span>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Description</label>
                <textarea class="form-control" name="description" readonly>{{ $product->description }}</textarea>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Created At</label>
                <input type="text" name="created_at" class="form-control" value="{{ $product->created_at }}" readonly>
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Updated At</label>
                <input type="text" name="updated_at" class="form-control" value="{{ $product->updated_at }}" readonly>
            </div>
        </div>
    </div>
@endsection

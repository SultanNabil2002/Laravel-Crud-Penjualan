@extends('layouts.app')

@section('body')
    <div class="container">
        <h1 class="mb-3">Tambahkan Barang</h1>
        <hr />

        <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="product_id" class="form-label">ID Produk</label>
                        <input type="text" name="product_id" class="form-control" placeholder="Masukkan ID Produk">
                    </div>

                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" name="name" class="form-control" placeholder="Masukkan Nama Produk">
                    </div>

                    <div class="mb-3">
                        <label for="image" class="form-label">Foto</label>
                        <input type="file" name="image" class="form-control-file">
                        @error('image')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="price" class="form-label">Harga</label>
                        <input type="text" name="price" class="form-control" placeholder="Masukkan Harga">
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" name="description" placeholder="Masukkan Deskripsi"></textarea>
                    </div>
                </div>
            </div>

            <div class="mb-3">
                <button class="btn btn-success" type="submit">Simpan</button>
            </div>
        </form>
    </div>
@endsection

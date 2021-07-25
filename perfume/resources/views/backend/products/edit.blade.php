@extends('backend.master')
@section('content')
    <div class="container-fluid content">
        <h3>EDIT PRODUCT</h3>
        <form method="post" enctype="multipart/form-data" action="{{route('product.update', $product->id)}}">
            @csrf

            <div class="mb-3">
                <label for="name-product" class="form-label">Name</label>
                <input type="text" required class="form-control" id="name-product" name="name_product" value="{{$product->name}}" >
            </div>
            <div class="mb-3">
                <label for="price-product" class="form-label">Price</label>
                <input type="text" required class="form-control" id="price-product" name="price_product" value="{{$product->price}}">
            </div>
            <div class="mb-3">
                <label for="id-category" class="form-label">ID-Category</label>
                <input type="number" required class="form-control" id="id-category" name="id_category" value="{{$product->id_category}}">
            </div>
            <div class="mb-3">
                <label for="describes" class="form-label">Describes</label>
                <input type="text" class="form-control" id="describes" name="describes" value="{{$product->describes}}">
            </div>
            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <input type="number" class="form-control" id="status" name="status" value="{{$product->status}}">
            </div>
            <div class="mb-3">
                <label for="avt" class="form-label">Image</label>
                <input type="file" class="form-control" id="avt" name="fileToUpload">
            </div>
            <button type="submit" class="btn btn-primary">Create product</button>
        </form>
    </div>

@endsection

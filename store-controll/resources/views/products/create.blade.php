@extends('layouts.app')
@section('content')
    <div class="container">
        <div>
            <h2>Register Product</h2>
        </div>
        <form action="">
            @csrf
            <div class="row">
                <div class="col-6 mb-4">
                    <label for="product-name" class="form-label">Name</label>
                    <input type="text" name="name" class="form-control" id="product-name">
                </div>
                <div class="col-6">
                    <label for="description-product" class="form-label">Description</label>
                    <input type="text" class="form-control" id="description-product">
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <label for="supplier" class="form-label">Supplier</label>
                    <select name="supplier" class="form-select" id="supplier" aria-label="Default select example">
                        <option selected>Select the supplier</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                <div class="col-6 mb-4">
                    <label for="price-supplier" class="form-label">Price Supplier</label>
                    <input type="text" name="price_supplier" class="form-control" id="price-supplier">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-4">
                    <label for="price" class="form-label">Price</label>
                    <input type="text" name="price" class="form-control" id="price">
                </div>
                <div class="col-6 mb-4">
                    <label for="price" class="form-label">Quantity</label>
                    <input type="number" name="price" class="form-control" id="price">
                </div>
            </div>
            <div class="row">
                <div class="col-6 mb-3">
                    <label for="formFile" class="form-label">Insert a picture of product</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
            </div>
            <div class="row">
                <div class="col-12 p-3" style="text-align: center">
                    <button style="width: 25%" type="submit" class="btn btn-primary">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-floppy" viewBox="0 0 16 16">
                            <path d="M11 2H9v3h2z"></path>
                            <path d="M1.5 0h11.586a1.5 1.5 0 0 1 1.06.44l1.415 1.414A1.5 1.5 0 0 1 16 2.914V14.5a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 14.5v-13A1.5 1.5 0 0 1 1.5 0M1 1.5v13a.5.5 0 0 0 .5.5H2v-4.5A1.5 1.5 0 0 1 3.5 9h9a1.5 1.5 0 0 1 1.5 1.5V15h.5a.5.5 0 0 0 .5-.5V2.914a.5.5 0 0 0-.146-.353l-1.415-1.415A.5.5 0 0 0 13.086 1H13v4.5A1.5 1.5 0 0 1 11.5 7h-7A1.5 1.5 0 0 1 3 5.5V1H1.5a.5.5 0 0 0-.5.5m3 4a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5V1H4zM3 15h10v-4.5a.5.5 0 0 0-.5-.5h-9a.5.5 0 0 0-.5.5z"></path>
                        </svg>
                        Save
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection


@extends('layout.app')
@include('layout.header')
@include('layout.navbar')
@section('content')
<div class="page-content">
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
<div class="col-lg-8">
    <div class="card">
        <div class="card-body">
            <div class="mb-3">
                <label class="form-label" for="product-title-input">Product Title</label>
                <input type="hidden" class="form-control" id="formAction" name="formAction" value="add">
                <input type="text" class="form-control d-none" id="product-id-input">
                <input type="text" class="form-control" id="product-title-input" value="" placeholder="Enter product title" required="">
                <div class="invalid-feedback">Please Enter a product title.</div>
            </div>
            <div>
                <label>Product Description</label>
                <input type="text" class="form-control" id="product-id-input">
                
                </div>
              <div class=" row d-flex align-items-center">
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-3">
                        <label class="form-label" for="product-price-input">Price</label>
                        <div class="input-group has-validation mb-3">
                            <span class="input-group-text" id="product-price-addon">$</span>
                            <input type="text" class="form-control" id="product-price-input" placeholder="Enter price" aria-label="Price" aria-describedby="product-price-addon" required="">
                            <div class="invalid-feedback">Please Enter a product price.</div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    <div class="mb-3">
                        <label class="form-label" for="product-price-input">Price</label>
                        <div class="input-group has-validation mb-3">
                            <span class="input-group-text" id="product-price-addon">$</span>
                            <input type="text" class="form-control" id="product-price-input" placeholder="Enter price" aria-label="Price" aria-describedby="product-price-addon" required="">
                            <div class="invalid-feedback">Please Enter a product price.</div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-3 col-sm-6">
                    
                </div>
              </div>
              <div class="mb-3">
                       <button class="btn btn-primary" type="submit">Submit</button>

                    </div>
            </div>
        </div>
    </div>

    
</div>
</div>
</div>
</div>
@endsection
@include('layout.footer')
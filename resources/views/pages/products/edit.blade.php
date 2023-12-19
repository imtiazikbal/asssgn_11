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
            @if(Session::has('success'))
                <p class="alert alert-info">{{ Session::get('success') }}</p>
                @endif
            <form action="{{ route('product.update', $product->id) }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="product-title-input">Product Title</label>   
                    <input type="text" 
                    name="product_title"
                     class="form-control"
                     id="product-title-input" value="{{ $product->product_name}}"
                      placeholder="Enter product title" 
                      >      
                </div>
                <div>
                    <label>Product Description</label>
                    <input type="text" 
                    name="product_description"
                    value="{{ $product->product_description}}"
                    class="form-control" 
                    id="product-id-input">
                    </div>

                  <div class=" row d-flex align-items-center">
                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="product-price-input">Price</label>
                            <input type="text" 
                            value="{{ $product->product_price}}"
                    name="product_price"
                              class="form-control"
                             id="product-title-input" value=""
                             placeholder="Enter product title" 
                             > 
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="mb-3">
                            <label class="form-label" for="product-price-input">Quantity</label>
                            <div class="input-group has-validation mb-3">
                                <span class="input-group-text" id="product-price-addon">#</span>
                                <input type="text"
                                value="{{ $product->product_quantity}}"
                                  name="product_quantity"

                                 class="form-control" 
                                 id="product-price-input" 
                                 placeholder="Enter price" 
                                
                                 aria-describedby="product-price-addon" 
                                >
                               
                            </div>
    
                        </div>
                    </div>
                  
                  </div>
                  <div class="mb-3">
                           <button class="btn btn-primary" type="submit">Submit</button>
    
                        </div>
              
            </form>
        </div>
        </div>
    </div>

    
</div>
</div>
</div>
</div>
@endsection
@include('layout.footer')
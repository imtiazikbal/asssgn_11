@extends('layout.app')
@include('layout.header')
@include('layout.navbar')
@section('content')
<div class="page-content">
<div class="container-fluid">
<div class="card">
    <div class="card-header">
        <a href="{{ route('product.create') }}" class="btn btn-primary"><span>+</span>Add Product</a>
    </div>
    @if(Session::has('success'))
    <p class="alert alert-info">{{ Session::get('success') }}</p>
    @endif
    <div class="card-body">
        <div class="table-responsive table-card">
            <table class="table table-nowrap table-striped-columns mb-0">
                <thead class="table-light">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Price</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Created at</th>
                        <th scope="col">Updated at</th>
                        <th scope="col">Action</th>   
                    </tr>
                </thead>
               <tbody>
                @foreach ($products as $product)
                <tr>
                    <td>
                        {{ $product->id }}
                    </td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_description }}</td>
                    <td>{{ $product->product_price }}</td>                   
                    <td>{{ $product->product_quantity}}</td>                   
                    <td><span class="badge bg-success">{{  $product->created_at }}</span></td>
                    <td><span class="badge bg-success">{{ $product->updated_at }}</span></td>
                    <td>
                        <a href="{{ route('product.order',['product_id' => $product->id]) }}" class="btn btn-primary btn-sm">Sell</a>
                        <a href="{{ route('product.edit',$product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <form action="{{ route('product.destroy', $product->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-primary btn-sm" type="submit">Delete</button>
                        </form>
                    </td>   
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>  
     </div>
    </div>
   </div>
  </div>
 </div>
</div>
@endsection
@include('layout.footer')
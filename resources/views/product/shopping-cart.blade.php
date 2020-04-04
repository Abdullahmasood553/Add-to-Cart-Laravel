@extends('layouts.app')
@section('content') 

<div class="row">
<div class="col-12">
    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col"> </th>
                    <th scope="col">Product</th>
                    <th scope="col" class="text-center">Quantity</th>
                    <th scope="col" class="text-right">Price</th>
                    <th> </th>
                </tr>
            </thead>
            <tbody>
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                        <strong>Total: {{ $totalPrice }}</strong>
                    </div>
                </div>
                @if(Session::has('cart'))
                      @foreach($products as $product)
                <tr>
                    <td><img src="https://dummyimage.com/50x50/55595c/fff" /> </td>
                    <td>{{ $product['item']['name'] }}</td>
                    <td><input class="form-control" type="text" value="{{ $product['qty'] }}" /></td>
                    <td class="text-right">{{ $product['price'] }}</td>
                    <td class="text-right"><button class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> </button> </td>
                </tr>
            </tbody>
                 @endforeach
                 @else
                 <div class="row">
                     <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                         <h2>No Items in Cart</h2>
                     </div>
                 </div>
            @endif
        </table>
    </div>
</div>

    <div class="col mb-2">
        <div class="row">
            <div class="col-sm-12  col-md-6">
                <button class="btn btn-block btn-light">Continue Shopping</button>
            </div>
            <div class="col-sm-12 col-md-6 text-right">
                <button class="btn btn-lg btn-block btn-success text-uppercase">Checkout</button>
            </div>
        </div>
    </div>

</div>

@endsection



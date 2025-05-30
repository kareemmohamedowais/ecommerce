@extends('layouts.master')

@section('title')
{{__('website_trans.Cart')}}
@endsection
@push('style')
<meta name="csrf-token" content="{{ csrf_token() }}">

@endpush
@section('content')
<section class="h-100" style="background-color: #eee;">
    <div class="container h-100 py-5">
        <div class="row d-flex justify-content-center align-items-center h-100" id="cart_div">
            <div class="col-10">

                <div class="d-flex justify-content-between align-items-center mb-4">
                    <h3 class="fw-normal mb-0 text-black">{{__('website_trans.Shopping Cart')}}</h3>
                    <div>

                    </div>
                </div>


                @php $total_price = 0; @endphp
                @forelse($cart_products as $product_cart)
                <div class="card rounded-3 mb-4">
                    <div class="card-body p-4">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="col-md-2 col-lg-2 col-xl-2">
                                <img
                                    src="{{asset($route_product .'/'.$product_cart->Product->image)}}"
                                    class="img-fluid rounded-3" alt="Cotton T-shirt">
                            </div>
                            <div class="col-md-3 col-lg-3 col-xl-3">
                                <p class="lead fw-normal mb-2">{{$product_cart->Product->name}}</p>
                            </div>
                            @if ($product_cart->Product->qty > $product_cart->qty)

                            <div class="col-md-3 col-lg-3 col-xl-2 d-flex">
                                <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepDown(); updateCart({{$product_cart->id}})">
                                    <i class="fas fa-minus"></i>
                                </button>

                                <input id="form1" min="0" name="qty" value="{{$product_cart->qty}}" type="number"
                                    class="form-control form-control-sm qty_{{$product_cart->id}}" />

                                <button class="btn btn-link px-2"
                                        onclick="this.parentNode.querySelector('input[type=number]').stepUp(); updateCart({{$product_cart->id}})">
                                    <i class="fas fa-plus"></i>
                                </button>
                            </div>
                            @else
                                <div class="col-md-3 col-lg-3 col-xl-2 offset-lg-1">
                                    <h5 class="mb-0">{{__('website_trans.OutofStock')}}</h5>
                                    <span class="mb-0">{{__('website_trans.MaxStockIs')}} : {{$product_cart->qty}}</span>
                                </div>
                            @endif
                            <div class="col-md-3 col-lg-2 col-xl-2 offset-lg-1">
                                <h5 class="mb-0" id="">
                                    @php $product_total = $product_cart->Product->selling_price *  $product_cart->qty; @endphp
                                    {{$product_total}}
                                </h5>
                            </div>
                            <div class="col-md-1 col-lg-1 col-xl-1 text-end">
                                @include('website.includes.delete_modal',['type'=>'cart','data'=>$product_cart,'routes'=>'cart.destroy'])
                            </div>
                        </div>
                    </div>
                </div>
                    @php $total_price += $product_cart->Product->selling_price * $product_cart->qty ; @endphp
                @empty
                    <h6>{{__('website_trans.Noproductsincart')}}</h6>

                @endforelse
            </div>
            <div class="row justify-content-center" style="margin-bottom: 30px">
                <div class="col-4">
                    <h3 id="total">{{__('website_trans.Total Price')}} : {{$total_price}}</h3>
                </div>
                @if ($total_price!=0)
                <div class="col-4">
                    <a href="{{route('checkout.index')}}" class="btn btn-success ">{{trans('website_trans.checkout')}}</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
    <script>
        function updateCart(id){
            var qty = $('.qty_'+id).val();
            $.ajax({
                method : 'POST',
                url : "{{route('cart.update')}}",
                dataType : 'json',
                data : {
                    id  : id,
                    qty : qty
                },
                success : function (response){
                    console.log(response.msg)
                    $('#cart_div').load(location.href + " #cart_div");
                }
            })
        }
    </script>
@endpush

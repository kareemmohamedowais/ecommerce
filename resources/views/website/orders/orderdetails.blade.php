

@extends('layouts.master')

@section('title')
order_details
@endsection

@section('css')

@endsection
@section('content')

    <!-- Content Wrapper. Contains page content -->
<!-- Content Wrapper. Contains page content -->
       <!-- Start Breadcrumbs -->
       <div class="breadcrumbs">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-6 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">My Orders</h1>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-12">
                    <ul class="breadcrumb-nav">
                        <li><a href="index.html"><i class="lni lni-home"></i> Home</a></li>
                        <li>Order_Details</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumbs -->

{{-- ================================================== --}}
<div class="card p-4 container">
    <div class="card-header">
    {{-- <h3 class="card-title"><a href="{{route('products.create')}}" class="btn btn-outline-primary">{{trans('buttons_trans.create')}}</a></h3> --}}
    </div>
    <!-- /.card-header -->
    <div class="card-body">
    <table id="example1" class="table table-bordered table-hover">
        <thead>
            <tr>
        <th>#</th>
        <th>{{trans('order_trans.productName')}}</th>
        <th>{{trans('order_trans.orderNumber')}}</th>
        <th>{{trans('order_trans.price')}}</th>
        <th>{{trans('order_trans.quantity')}}</th>


        </tr>
        </thead>
        <tbody>
        @foreach ($orderdetails as $orderdetail )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$orderdetail->product->name}}</td>
            <td>{{$orderdetail->order->number}}</td>
            <td>{{$orderdetail->price}}</td>
            <td>{{$orderdetail->quantity}}</td>

            </tr>
        @endforeach





    </table>

    <div style="font-size: 35px;margin-top:10px">
    <span>{{trans('order_trans.totalPrice')}} : </span>
    <span class="badge bg-success">{{$orderdetail->order->total}}</span>
    </div>
<div class="container p-3" style="margin-top: 50px;margin-bottom: 50px">
    <h4>Order Tracking</h4>
    <br>

    <table id="example1" class="table table-bordered table-hover">

        <tbody>
        @foreach ($orderadresess->order->tracks as $track )
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$track->status}}</td>
            <td> edit by {{$track->message}} </td>
            <td>{{$track->created_at->format('Y-m-d')}}</td>
            <td>{{$track->created_at->format('h:i')}}</td>
            </tr>
        @endforeach

    </table>
</div>
    <div class="col-12" style="margin-top: 20px">
        <div class="card" >
            <div class="card-title text-center" style="margin-top: 30px"><h3>{{trans('website_trans.customer_details')}}</h3></div>
            <div class="card-body">
                <form >

                    <div class="row">
                        <div class="col">
                            <label for="firstname" class="form-label">{{trans('website_trans.first_name')}}</label>
                            <input type="text"  class="form-control" value="{{$orderadresess->fname}}" name="fname" readonly  id="firstname" placeholder="your first name">
                        </div>
                        <div class="col">
                            <label for="lastname" class="form-label">{{trans('website_trans.last_name')}}</label>
                            <input type="text" value="{{$orderadresess->lname}}" class="form-control" name="lname" readonly id="lastname" placeholder="your last name">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="email" class="form-label">{{trans('website_trans.email')}}</label>
                            <input type="email" value="{{$orderadresess->email}}" class="form-control" name="email" readonly id="email" placeholder="your email">
                        </div>
                        <div class="col">
                            <label for="phone" class="form-label">{{trans('website_trans.phone')}}</label>
                            <input type="phone" class="form-control" value="{{$orderadresess->phone}}" name="phone" readonly id="phone" placeholder="your phone">
                        </div>

                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="address1" class="form-label">{{trans('website_trans.address_1')}}</label>
                            <input type="text" class="form-control" value="{{$orderadresess->address1}}" name="address1" readonly id="address1" placeholder="address1">
                        </div>
                        <div class="col">
                            <label for="address2" class="form-label">{{trans('website_trans.address_2')}}</label>
                            <input type="text" class="form-control" value="{{$orderadresess->address2}}" name="address2" readonly id="address2" placeholder="address2">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="city" class="form-label">{{trans('website_trans.city')}}</label>
                            <input type="text" class="form-control" value="{{$orderadresess->city}}" name="city" readonly id="city" placeholder="city">
                        </div>
                        <div class="col">
                            <label for="country" class="form-label">{{trans('website_trans.country')}}</label>
                            <input type="text" class="form-control" value="{{$orderadresess->country}}" name="country" readonly id="country" placeholder="country">
                        </div>
                        <div class="col">
                            <label for="pincode" class="form-label">{{trans('website_trans.pincode')}}</label>
                            <input type="text" class="form-control" value="{{$orderadresess->pincode}}" name="pincode" readonly id="pincode" placeholder="pincode">
                        </div>
                        {{-- <input type="hidden" name="total_price" value="{{$total_price}}"> --}}
                    </div>
                    {{-- <div class="col-8" style="margin-top: 20px; margin-left:250px">
                        <button type="submit" class="btn btn-success">Place Order</button>
                    </div> --}}
                </form>
            </div>
        </div>
    </div>
    </div>
    <!-- /.card-body -->
</div>
@endsection

@section('script')
<!-- DataTables  & Plugins -->
<script src="/assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="/assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="/assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="/assets/plugins/jszip/jszip.min.js"></script>
<script src="/assets/plugins/pdfmake/pdfmake.min.js"></script>
<script src="/assets/plugins/pdfmake/vfs_fonts.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="/assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script>
    <script src="{{asset('assets/plugins/datatables/jquery.dataTables.js')}}"></script>
<script src="{{asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.js')}}"></script>
<script>
            $(function() {
                $("#example1").DataTable({
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
                }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');

            });
        </script>
@endsection
@include('admin.layouts.sidebar')
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Edit Product</h2>
                </div>
            </div>
        </div>
        <center>
        <div class="row align-content-center">
            <!-- Column -->
            <div class="col-md-9 col-lg-12">
                <div class="card card-hover">
                    <div class="box bg-cyan text-center">
                        <h1 class="font-light text-white"><i class="mdi mdi-cart"></i></h1>

                        <h6 class="text-white">{{$pro->plan}}</h6>
                        <h6 class="text-white">Product</h6>
                    </div>
                </div>
            </div>

            <!-- Column -->
        </div>
        </center>


        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="row">
                        <!-- col-md-6 -->
                        <div class="col-md-12 col-12">

                            <div class="form-group">
                                <div class="contact-thumb card-body">
                                    <h1><i class="fa i-cl-4 fa-money"></i></h1>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <form action="{{route('admin/do')}}" method="post">
                                    @csrf

                                    @if (session('status'))
                                        <div class="alert alert-success">
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                    @if (session('error'))
                                        <div class="alert alert-danger">
                                            {{ session('error') }}
                                        </div>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label>Product-Plan</label>
                                                <input type="text" class="form-control"  name="name" value="{{$pro->plan}}" required />
                                                <input type="hidden" class="form-control"  name="id" value="{{$pro->id}}" required />
                                            </div>
                                        </div>
{{--                                        <div class="col-md-6 col-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Actual Amount </label>--}}
                                                <input type="hidden" name="amount" class="form-control" value="{{$pro->amount}}" readonly/>
{{--                                            </div>--}}
{{--                                        </div>--}}
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label>Selling Amount </label>
                                                <input type="number" name="tamount" class="form-control" value="{{$pro->tamount}}" required/>
                                            </div>
                                        </div>
{{--                                        <div class="col-md-6 col-12">--}}
{{--                                            <div class="form-group">--}}
{{--                                                <label>Reseller Amount </label>--}}
                                                <input type="hidden" name="ramount" class="form-control" value="{{$pro->ramount}}" required/>
{{--                                            </div>--}}
{{--                                        </div>--}}
                                    </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <br>
                                    <button type="submit" class="btn btn-rounded btn-outline-success btn-block">Submit</button>
                                    </form>
                                </div>
                            </div>


                        </div>


                    </div>

                </div>

            </div>
        </div>
    </div>

</div>

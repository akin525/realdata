@include('admin.layouts.sidebar')
<div class="page-content">
    <div class="container-fluid">

        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Admin/Set Charges</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="{{route('admin/dashboard')}}">Dashboards</a></li>
                            <li class="breadcrumb-item active">Admin/Set Charges</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
<div class="midde_cont">
    <div class="container-fluid">
        <div class="row column_title">
            <div class="col-md-12">
                <div class="page_title">
                    <h2>Set Charges</h2>
                </div>
            </div>
        </div>

        <div class="row column1">
            <div class="full counter_section margin_bottom_30">
                <div class="couter_icon">
                    <div>
                        <i class="fa fa-bell yellow_color"></i>
                    </div>
                </div>

            </div>
        </div>
        <!-- Title & Breadcrumbs-->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                    <div class="row">
                        <!-- col-md-6 -->
                        <div class="col-md-12 col-12">

                            <div class="form-group">
                                <div class="contact-thumb card-body">
                                    <h1><i class="fa i-cl-4 fa-mobile"></i></h1>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <form action="{{route('admin/setc')}}" method="post">
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
                                            <div class="input-group mt-2">
{{--                                                <input type="hidden" name="id" value="{{$message->id}}" />--}}
                                                <input type="text" class="form-control" value="{{$charge->charges}}" name="body" required />
                                            </div>
                                            <div class="input-group mt-2">
                                                <button class="btn btn-primary waves-effect waves-light" type="submit" style="align-self: center; align-content: center"><i class="fa fa-paper-plane"></i> Set Charges</button>
                                            </div>
                                        </div>
                                    </div>

                            </div>


                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>


@include('layouts.sidebar')
<div class="content-body">
    <div class="container-fluid">
<div class="page-wrapper">
    <div class="content container-fluid">
        <div class="row justify-content-lg-center">
            <div class="col-lg-10">

                <div class="page-header">
                    <div class="row">
                        <div class="col">
                            <h3 class="page-title">Tv</h3>
                            <ul class="breadcrumb">
                                {{--                                <li class=""><a href="{{route('dashboard')}}">Dashboard</a></li>--}}
                                {{--                                <li class="breadcrumb-item active">Profile</li>--}}
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-body">
                        <!--                    <div class="box w3-card-4">-->
                        <div class="row">
                            <div class="col-sm-8">
                                <br>
                                <br>
                                <div class="alert alert-danger" id="ElectNote" style="text-transform: uppercase;font-weight: bold;font-size: 18px;display: none;">
                                </div>
                                <div id="electPanel">
                                    <div class="alert alert-danger">0.1% discount apply.</div>
                                    <form action="{{route('tvp')}}" method="post">
                                        @csrf
                                        <div  class="form-group">
                                            <label  class="requiredField">
                                                IUC Name
                                                <span class="asteriskField">*</span>
                                            </label>
                                            <input type="text" name="name" class="form-control" value="{{$log}}" readonly required/>
                                        </div>
                                        <div  class="form-group">
                                            <label  class="requiredField">
                                              Select Plan
                                                <span class="asteriskField">*</span>
                                            </label>
                                            <select  name="id" class="form-control" required>
                                                <option>Select</option>
                                                @foreach($pla as $plan)
                                                    <option value="{{$plan->id}}">{{$plan->plan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div  class="form-group">
                                            <label  class="requiredField">
                                                IUC Number
                                                <span class="asteriskField">*</span>
                                            </label>
                                            <input type="text" name="number" class="form-control" value="{{$request->phone}}" readonly required/>
                                        </div>
{{--                                        <input type="hidden" name="id" value="{{$ve->id}}"/>--}}
                                        <input type="hidden" name="refid" value="<?php echo rand(10000000, 999999999); ?>">

                                        <button type="submit" class="btn process"
                                                style="color: white;background-color: #491110;margin-bottom:15px;"> Purchase
                                        </button>
                                        <!--                        <button type="button" id="verify" class=" btn" style="margin-bottom:15px;">  <span id="process"><i class="fa fa-circle-o-notch fa-spin " style="font-size: 30px;animation-duration: 1s;"></i> Validating Please wait </span>  <span id="displaytext">Validate Meter Number </span></button>-->
                                    </form>
                                </div>
                            </div>
                            <div class="col-sm-4 ">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Datatable -->
        <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>
        <script src="{{asset('js/custom.min.js')}}"></script>
        <script src="{{asset('js/deznav-init.js')}}"></script>
        <script src="{{asset('js/demo.j')}}s"></script>
        <script src="{{asset('js/styleSwitcher.js')}}"></script>

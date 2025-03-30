@include('layouts.sidebar')
<div class="content-body">
    <div class="container-fluid">
        <div class="page-wrapper">
            <div style="padding:90px 15px 20px 15px">
                <h5 class="text-center">Select Electricity Product</h2>
                    <div class="card">

                        <div class="card-body">
                            <!--                    <div class="box w3-card-4">-->
                            <div class="row">

                                <div class="col-sm-8">
                                    <br>
                                    <br>
                                    <div class="alert alert-danger" id="ElectNote" style="text-transform: uppercase;font-weight: bold;font-size: 18px;display: none;">
                                    </div>
                                    <div id="electPanel" class="subscribe">
                                        <div class="alert alert-danger">0.1% discount apply.</div>
                                        <form  id="dataForm">
                                            @csrf
                                            <div  class="form-group">
                                                <label  class="requiredField">
                                                    Select  Electricity Company
                                                    <span class="asteriskField">*</span>
                                                </label>
                                                <select name="id" class="text-success form-control" id="firstSelect" required>
                                                    <option selected="">---------</option>
                                                    @foreach($tv as $tv1)
                                                        <option value="{{$tv1['plan']}}">{{$tv1['plan']}}</option>
                                                    @endforeach
                                                </select>
                                            </div>


                                            <div id="metertypeID" class="form-group">
                                                <label for="metertypeID" class=" requiredField">
                                                    Meter Number
                                                    <span class="asteriskField">*</span>
                                                </label>
                                                <div class="">
                                                    <input type="number" id="number" name="number" class="form-control" minlength="11" maxlength="11" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="name1">Meter Name</label>
                                                <input type="text" id="name" name="name" class="text-success form-control" readonly>

                                            </div>
                                            <div class="form-group">
                                                <label for="name1">Amount</label>
                                                <input type="text" id="amount" name="amount" class="text-success form-control" required>
                                                <input type="hidden" name="refid" value="<?php echo rand(10000000, 999999999); ?>">

                                            </div>

                                            <button type="submit" class="submit-btn"
                                                    style="color: white;background-color: #13b10d;margin-bottom:15px;"> PayNow
                                            </button>
                                            <!--                        <button type="button" id="verify" class=" btn" style="margin-bottom:15px;">  <span id="process"><i class="fa fa-circle-o-notch fa-spin " style="font-size: 30px;animation-duration: 1s;"></i> Validating Please wait </span>  <span id="displaytext">Validate Meter Number </span></button>-->
                                        </form>
                                    </div>

                                    {{--                                        <button id="btnv" type="button" onclick="showUser()" class="btn btn-rounded btn-success"> Verify </button>--}}

                                </div>
                            </div>
                            <div class="col-sm-4 ">
                            </div>

                        </div>
                    </div>
                    <br>
                    <br>
                    <br>
                    <br>

                    <br>
                    <br>
                    <br>
                    <br>
            </div>


            <!-- Datatable -->
            <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
            <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>
            <script src="{{asset('js/custom.min.js')}}"></script>
            <script src="{{asset('js/deznav-init.js')}}"></script>
            <script src="{{asset('js/demo.j')}}s"></script>
            <script src="{{asset('js/styleSwitcher.js')}}"></script>

@include('layouts.sidebar')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.15.6/dist/sweetalert2.min.css">
<!-- SweetAlert CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.css">

<!-- SweetAlert JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.20/dist/sweetalert2.min.js"></script>

<div class="content-body">
    <div class="container-fluid">


    <div style="padding:90px 15px 20px 15px">
        <h4 class="align-content-center text-sm-center">Airtime TopUp</h4>
        <div class="card">

            <div class="card-body">
                <script>
                    $(document).ready(function() {
                        toastr.options.timeOut = 60000;
                        @if (Session::has('error'))
                        toastr.error('{{ Session::get('error') }}');
                        @elseif(Session::has('success'))
                        toastr.success('{{ Session::get('success') }}');
                        @endif
                    });

                </script>
                <!--            <div class="box w3-card-4">-->

                <form id="dataForm" >
                    @csrf
                    <div class="row">
                        <div class="col-sm-8">
                            <br>
                            <br>
                            <div id="AirtimePanel">
                                <div class="subscribe">
                                    <p>AIRTIME PURCHASE</p>
                                    {{--                       <input placeholder="Your e-mail" class="subscribe-input" name="email" type="email">--}}
                                    <br/>
                                    <div id="div_id_network" class="form-group">
                                        <label for="network" class=" requiredField">
                                            Network<span class="asteriskField">*</span>
                                        </label>
                                        <div class="">
                                            <select name="id" class="text-success form-control" required="">

                                                <option value="m">MTN</option>
                                                <option value="g">GLO</option>
                                                <option value="a">AIRTEL</option>
                                                <option value="9">9MOBILE</option>

                                            </select>
                                        </div>
                                    </div>
                                    <br/>
                                    <div id="div_id_network" >
                                        <label for="network" class=" requiredField">
                                            Enter Amount<span class="asteriskField">*</span>
                                        </label>
                                        <div class="">
                                            <input type="number" id="amount" name="amount" min="100" max="4000" oninput="calc()" class="text-success form-control" required>
                                        </div>
                                    </div>
                                    <br/>
                                    <div id="div_id_network" class="form-group">
                                        <label for="network" class=" requiredField">
                                            Enter Phone Number<span class="asteriskField">*</span>
                                        </label>
                                        <div class="">
                                            <input type="number" id="number" name="number" minlength="11" class="text-success form-control" required>
                                        </div>
                                    </div>
                                    <input type="hidden" name="refid" value="<?php echo rand(10000000, 999999999); ?>">
                                    <button type="submit" class="submit-btn">PURCHASE<span class="load loading"></span></button>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label class="small mb-1" for="amount" style="color: #000000"><b>Amount to Pay (<span>₦</span>)</b></label>
                                            <br>
                                            <span class="text-danger">2% Discount:</span> <b class="text-success">₦<span id="shownow1"></span></b>
                                        </div>
                                    </div>
                                    <script>

                                        function dynamicLinkEvent(type, data) {
                                            // alert(JSON.stringify(data));

                                            console.log("dLink Event");
                                            console.log(type);
                                            console.log(JSON.stringify(data));
                                            document.getElementById('anyme').value=data.data;
                                        }

                                        function web2appInit(data) {
                                            // alert(JSON.stringify(data));
                                            console.log("web2app is ready")
                                            console.log(JSON.stringify(data));
                                        }

                                        function myCallback(data) {
                                            // alert(JSON.stringify(data));
                                            console.log("I am in callback")
                                            console.log(JSON.stringify(data));
                                        }

                                        function contactCallback(data) {
                                            // alert(JSON.stringify(data));
                                            console.log("I am in callback")
                                            console.log(JSON.stringify(data));
                                            document.getElementById('anyme').value=data.data;
                                        }

                                    </script>

                                    <script>
                                        function calc(){
                                            var value = document.getElementById("amount").value;
                                            var percent = 2/100 * value;
                                            var reducedvalue = value - percent;
                                            document.getElementById("shownow1").innerHTML = reducedvalue;

                                        }
                                    </script>
                                </div>
                            </div>

                        </div>
                    </div>

                </form>



            </div>


        </div>
        <script>
            $(document).ready(function() {


                // Send the AJAX request
                $('#dataForm').submit(function(e) {
                    e.preventDefault(); // Prevent the form from submitting traditionally

                    // Get the form data
                    var formData = $(this).serialize();
                    Swal.fire({
                        title: 'Are you sure?',
                        text: 'Do you want to buy airtime of ₦' + document.getElementById("amount").value + ' on ' + document.getElementById("number").value +' ?',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'Cancel'
                    }).then((result) => {
                        if (result.isConfirmed) {

                            $('#loadingSpinner').show();
                            // web2app.advert.showinterstitial(myCallback)
                            try {
                                web2app.advert.showinterstitial(myCallback);
                            } catch (error) {
                                console.error("An error occurred while trying to show the interstitial ad:", error);
                            }

                            $.ajax({
                                url: "{{ route('buyairtime') }}",
                                type: 'POST',
                                data: formData,
                                success: function(response) {
                                    // Handle the success response here
                                    $('#loadingSpinner').hide();

                                    console.log(response);
                                    // Update the page or perform any other actions based on the response

                                    if (response.status == 'success') {
                                        Swal.fire({
                                            icon: 'success',
                                            title: 'Success',
                                            text: response.message
                                        }).then(() => {
                                            location.reload(); // Reload the page
                                        });
                                    } else {
                                        Swal.fire({
                                            icon: 'info',
                                            title: 'Pending',
                                            text: response.message
                                        });
                                        // Handle any other response status
                                    }

                                },
                                error: function(xhr) {
                                    $('#loadingSpinner').hide();
                                    Swal.fire({
                                        icon: 'error',
                                        title: 'fail',
                                        text: xhr.responseText
                                    });
                                    // Handle any errors
                                    console.log(xhr.responseText);

                                }
                            });

                        }
                    });
                });
            });

        </script>


        <!-- Datatable -->
        <script src="{{asset('vendor/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('js/plugins-init/datatables.init.js')}}"></script>
        <script src="{{asset('js/custom.min.js')}}"></script>
        <script src="{{asset('js/deznav-init.js')}}"></script>
        <script src="{{asset('js/demo.j')}}s"></script>
        <script src="{{asset('js/styleSwitcher.js')}}"></script>

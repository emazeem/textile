@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <script src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/3/jquery.inputmask.bundle.js"></script>
    @if(Session::has('success'))
    <script>
    $(document).ready(function () {
        swal("Done!", '{{Session('success')}}', "success");
    });
    </script>
    @endif
    <div class="row pb-3">
        <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="">Ranges List</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add Details</li>
        </ol>
        </nav>
        <form  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
        @csrf
        <div class="card">
            <div class="card-footer bg-white border-top">
                <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Add Ranges</h5>
                    <div class="form-group col-md-3 col-12 ">
                        <label for="name" class="control-label font-weight-bold">Name</label>
                        <input type="text" class="form-control" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group col-md-4 col-12 ml-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" onclick="toggleRanges()">
                        <label class="form-check-label" for="defaultCheck1">Do you want to add multiple ranges</label>
                    </div>
                    
                    
                    <label for="fixrange" class="control-label font-weight-bold col-md-3">Fix Range</label>
                    <div class="input-group-append col-md-3 mb-2" id="fixRanges">
                        <input type="text" class="form-control" id="fixrange" name="fixrange" placeholder="Fix Range">
                        <input type="text" class="form-control col-md-4" id="fixrange" name="unit" placeholder="unit">
                    </div>

                    <div class=" col-md-3 col-6" id="minmaxRanges" style="display: none;">
                        <label for="minrange" class="control-label font-weight-bold">Minimum Range</label>
                        <div class="input-group-append mb-2">
                        <input type="text" class="form-control" id="minrange" name="minrange" placeholder="Min Range">
                        <input type="text" class="form-control col-md-4" id="minrange" name="unit" placeholder="unit">
                        </div>

                    </div>
                    <div class="form-group col-md-3" id="maxrangeGroup" style="display: none;">
                        <label for="maxrange" class="control-label font-weight-bold">Maximum Range</label>
                        <div class="input-group-append">
                        <input type="text" class="form-control" id="maxrange" name="maxrange" placeholder="Max Range">
                        <input type="text" class="form-control col-md-4" id="maxrange" name="unit" placeholder="unit">
                    </div>
                    </div>
                    
                    <div class="card-footer bg-white border-top">
                        <div class="row">
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary user-btn float-right">
                                    <i class="feather icon-save"> </i> Save</button>
                                </div>
                            </div>
                        </div>
                    </div>
            </div> 
        </form>
    </div>

<script>
    function toggleRanges() {
        var checkBox = document.getElementById("defaultCheck1");
        var minmaxRanges = document.getElementById("minmaxRanges");
        var maxrangeGroup = document.getElementById("maxrangeGroup");

        if (checkBox.checked) {
            minmaxRanges.style.display = "block";
            maxrangeGroup.style.display = "block";
        } else {
            minmaxRanges.style.display = "none";
            maxrangeGroup.style.display = "none";
        }
    }
</script>

@endsection
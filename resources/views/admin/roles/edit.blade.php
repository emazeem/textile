@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
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
        <li class="breadcrumb-item"><a href="{{route('roles.index')}}">Roles List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Edit Details</li>
      </ol>
    </nav>
        <form  id="user-form" style="width:100%" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" value="" name="id">
            <div class="card ">
                <div class="card-header">
                    <h5 class="font-weight-light"><i class="bx bx-task mr-1"></i>Update Roles</h5>
                </div>
            </div>
            <div class="card-body pt-4 bg-white border-top">
            <div class="col-md-4 pb-4">
                <label for="username" class="control-label font-weight-bold">User Name</label>
                <select type="dropdown" id="username" name="username" class="form-control w-100">
                        <option value="Technogadget Inc.">Technogadget Inc.</option>
                            <option value="Happy Bakery">Happy Bakery</option>
                            <option value="Acme Corp">Acme Corp</option>
                            <option value="Green Earth Growers">Green Earth Growers</option>
                            <option value="Cloud Climbers">Cloud Climbers</option>
                            <option value="Global Delivery Express">Green Earth Growers</option>
                    </select>
                </div>

                <div class="col-md-4 pb-4">
                <label for="role" class="control-label font-weight-bold">Role</label>
                <select type="dropdown" id="role" name="role" class="form-control w-100">
                        <option value="Technogadget Inc.">Chairman</option>
                            <option value="Happy Bakery">Happy Bakery</option>
                            <option value="Acme Corp">Acme Corp</option>
                            <option value="Green Earth Growers">Green Earth Growers</option>
                            <option value="Cloud Climbers">Cloud Climbers</option>
                            <option value="Global Delivery Express">Green Earth Growers</option>
                    </select>
                </div>

                <div class="card-footer bg-white border-top">
                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary user-btn float-right"><i class="feather icon-save"></i> Update</button>
                            </div>
                        </div>
               
             


                        
        </div>
                
            </div>

        

                
            </div>
        
                
       
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection

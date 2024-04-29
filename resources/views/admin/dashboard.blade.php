@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
      <div class="col-12 mb-2">
        <h3 class="float-left"><i class='bx bx-home bx-burst' ></i> Dashboard</h3>
      </div>
      
      <!--My Attendence-->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h5 class="float-left pb-1 font-weight-light"> Add table info</h5>
            <table id="example" class="table table-bordered table-hover table-sm display nowrap" cellspacing="0" width="100%">
              <thead>
                <tr class="bg-c-blue">
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
                  
              </tbody>
            </table>
          </div>
        </div>
      </div>
      <!--My task-->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h5 class="float-left pb-1 font-weight-light">Add table info</h5>
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
              <thead>
                <tr class="bg-c-blue">
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
      
      <!--My leave-->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h5 class="float-left pb-1 font-weight-light">Add table info</h5>
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">              
              <thead>
                <tr class="bg-c-blue">
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td></td>                  
                </tr>
                 
              </tbody>
            </table>
          </div>
        </div>
      </div>

    <style>
     
     table#example thead tr th{
    background: #233560!important;

    }
    .table-row{
      background: #fff!important;
    }

    </style>
@endsection
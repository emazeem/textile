@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
      <div class="col-12 mb-2">
        <h3 class="float-left"><i class='bx bx-home bx-burst' ></i> Dashboard</h3>
        <!-- <a href="" class="btn btn-danger float-right ml-1" >Check Out</a>
        <a href="" class="btn btn-success float-right" >Check In</a> -->
    
      </div>
      <!--My Attendence-->
      <div class="col-lg-12">
        <div class="card">
          <div class="card-body table-responsive">
            <h5 class="float-left pb-1 font-weight-light"><i class="feather icon-clock mr-1"></i>My Attendance</h5>
            <table id="example" class="table table-bordered table-hover table-sm display nowrap" cellspacing="0" width="100%">
              <thead>
                <tr class="bg-c-blue">
                  <th>ID</th>
                  <th>Start Date</th>
                  <th>Start Time</th>
                  <th>End Time</th>
                  <th>Status</th>
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
            <h5 class="float-left pb-1 font-weight-light"><i class="bx bx-task mr-1"></i>My Tasks</h5>
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
              <thead>
                <tr class="bg-c-blue">
                  <th>ID</th>
                  <th>USERS</th>
                  <th>TITLE</th>
                  <th>DESCRIPTION</th>
                  <th>Priority</th>
                  <th>STATUS</th>
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
            <h5 class="float-left pb-1 font-weight-light"><i class="fa fa-question mr-1"></i>My Leave</h5>
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">              
              <thead>
                <tr class="bg-c-blue">
                  <th>ID</th>
                  <th>USERS</th>
                  <th>START DATE</th>
                  <th>END DATE</th>
                  <th>REMARKS</th>
                  <th>STATUS</th>
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
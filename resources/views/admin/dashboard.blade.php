@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <div class="row">
      <div class="col-12 mb-2">
        <h4 class="float-left">Dashboard</h4>
        <a href="" class="btn btn-danger float-right" >Check Out</a>
        <a href="" class="btn btn-success float-right" >Check In</a>
    
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
                  <td>1</td>
                  <td></td>
                  <td></td>
                  <td></td>
                  <td>
                <span class="badge badge-success">Check Out</span>
                <span class="badge badge-primary">Check In</span>
                  </td>
                </tr>
                  <tr>
                    <td colspan="100%" class="text-center">No record found</td>
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
                  <td>
                    <span class="badge badge-success">Low</span>
                    <span class="badge badge-danger">High</span>
                  </td>
                  <td>
                    <span class="badge badge-info">In-Progress</span>
                    <span class="badge badge-warning">Pending</span>
                    <span class="badge badge-success">Completed</span>
                    
                  </tr>
                  <tr>
                    <td colspan="100%" class="text-center">No record found</td>
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
                  <td>1</td>
                  <td>2</td>
                  <td>3</td>
                  <td>4</td>
                  <td>5</td>
                  <td>
                <span class="badge badge-info">Approved</span>
                  <span class="badge badge-warning">Pending</span>
                  <span class="badge badge-success">Declined</span>
                  </td>                  
                </tr>
                 <tr>
                    <td colspan="100%" class="text-center">No record found</td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

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
            <h5 class="float-left pb-1 font-weight-light"><i class="bx bx-test-tube mr-1"></i>Tests</h5>
            <table id="example" class="table table-bordered table-hover table-sm display nowrap" cellspacing="0" width="100%">
              <thead>
                <tr class="bg-c-blue">
                  <th>CID</th>
                  <th>LAB</th>
                  <th>NAME</th>
                  <th>DESCRIPTION</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>Test# 001</td>
                  <td>Chemical Lab</td>
                  <td>Color</td>
                  <td>Color is being test</td>
                </tr>
                <tr>
                  <td>Test# 002</td>
                  <td>Chemical Lab</td>
                  <td>Fadeness</td>
                  <td>Fadeness is being test</td>
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
            <h5 class="float-left pb-1 font-weight-light"><i class='bx bx-briefcase'></i> Work Order</h5>
            <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
              <thead>
                <tr class="bg-c-blue">
                  <th>ID</th>
                  <th>CUSTOMER NAME</th>
                  <th>CONTACT NAME</th>
                  <th>PO NUMBER</th>
                  
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Acme Apparel Inc.</td>
                  <td>Ms. Sarah Jones</td>
                  <td>AC-2024-0422</td>
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

    <style>
     
     table#example thead tr th{
    background: #233560!important;

    }
    .table-row{
      background: #fff!important;
    }

    </style>
@endsection
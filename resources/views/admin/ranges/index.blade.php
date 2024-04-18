@extends('admin.layout.master')
@section('content')

<?php
  $ranges=[
    ['id'=>'001', 'Name'=>'Fabric Weight', 'Minimum Range'=>'100 g/m2', 'Maximum Range'=>'500 g/m2',],
    ['id'=>'002', 'Name'=>'Fabric Thickness', 'Minimum Range'=>'0.1mm', 'Maximum Range'=>'2.0mm',],
    ['id'=>'003', 'Name'=>'Fabric Width', 'Minimum Range'=>'30cm', 'Maximum Range'=>'300cm',],
    ['id'=>'004', 'Name'=>'Wrap Direction', 'Minimum Range'=>'200 N/50mm', 'Maximum Range'=>'1000 N/50mm',],
    ['id'=>'005', 'Name'=>'Tear Strength', 'Minimum Range'=>'5N', 'Maximum Range'=>'50N',],
    ['id'=>'006', 'Name'=>'Water Absorption', 'Minimum Range'=>'1%', 'Maximum Range'=>'20%',],
    ['id'=>'007', 'Name'=>'Polyester Content', 'Minimum Range'=>'0%', 'Maximum Range'=>'100%',],
    ['id' => '008','Name' => 'Hydrostatic Pressure Test','Minimum Range' => '1000mm','Maximum Range' => '10,000mm',],
    ['id' => '009','Name' => 'Bacterial Reduction Percentage','Minimum Range' => '90%','Maximum Range' => '99.9%',],
    ['id' => '0010','Name' => 'Yarn Evenness: CV% (Coefficient of Variation)','Minimum Range' => '5%','Maximum Range' => '20%',],
        ];
    ?>
    
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <!--heading and add user button-->
  <div class="row">
    <div class="col-12 mb-2">
      <h3 class="float-left pb-1 font-weight-light"><i class="bx bx-task"></i>Ranges</h3>
      <a href="{{route('ranges.create')}}" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle mr-1"></i>Add Ranges</a>
    </div>
    <!--Search bar-->
      <div class="row"></div>
      <div class="col-12 mb-2 mt-2">
        <form action="" class="col-4 float-right">
          <div class="input-group-append">
            <input type="search" name="search" id="" class="form-control rounded-lg" placeholder="Search..." value="" />
            <button class="btn btn-primary rounded-lg toggle-button px-3"><i class="fa fa-search"></i></button>
          </div>
        </form>
      </div>
    </div>
      <!--users table-->
      <div class="col-lg-12 table-responsive mt-2">
        <table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
          <thead >
            <tr class="bg-c-blue">
              <th>ID</th>
              <th>Name</th>
              <th>Minimum Range</th>
              <th>Maximum Range</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($ranges as $range)
            <tr class="table-row">
              <td>{{$range['id']}}</td>
              <td>{{$range['Name']}}</td>
              <td>{{$range['Minimum Range']}}</td>
              <td>{{$range['Maximum Range']}}</td>
              <td>
                <a href="{{route('ranges.edit',['id'=>'1'])}}" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="{{route('ranges.show',['id'=>'1'])}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <div class="row float-right mt-2 mr-0">
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



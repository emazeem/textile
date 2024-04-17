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
        <li class="breadcrumb-item"><a href="{{route('customers.index')}}">Customers List</a></li>
        <li class="breadcrumb-item active" aria-current="page">Customer Details</li>
      </ol>
    </nav>
    <table class="table table-bordered table-sm bg-white">
  
    <tr>
      <th scope="col">Id</th>
      <td scope="col">1</td>
    </tr>
    <tr>
      <th scope="col">Name</th>
      <td scope="col">Happy Bakery</td>
    </tr>
    <tr>
      <th scope="col">Address</th>
      <td scope="col">456 Baker Blvd, Breadville, TX 78901</td>
    </tr>
    <tr>
      <th scope="col">Industry</th>
      <td scope="col">Food Service</td>
    </tr>
    <tr>
            <th scope="col">Contact Person</th>
            <td scope="col"> 
              <form action="" method="post">
                @csrf
                <input type="hidden" value="" name="id">
                <div class="input-group mb-3">
                    <input type="text" id="contact" name="contact" class="form-control" placeholder="Name" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <input type="text" id="contact" name="contact" class="form-control" placeholder="Email" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <input type="text" id="contact" name="contact" class="form-control" placeholder="Phone" aria-label="Recipient's username" aria-describedby="button-addon2">
                    <button class="btn btn-outline-secondary" type="submit" id="button-addon2"><i class="feather icon-save"></i> Save</button>
                </div>
            </form>
        </td>
    </tr>
    <tr>

      <td colspan="2">
      
      </td>
    </tr>
</table>
<table id="example" class="table table-bordered table-hover  table-sm display nowrap" cellspacing="0" width="100%">
          <thead >
            <tr class="bg-c-blue">
              <th>ID</th>
              <th>Name</th>
              <th>Email</th>
              <th>Phone</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr class="table-row">
              <td>1</td>
              <td>Olivia Jones	</td>
              <td>oliviajoes19@gmail.com1</td>
              <td>(222) 222-4545</td>
              <td class="text-center">
                <a href="{{route('contacts.edit',['id'=>'1'])}}" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>2</td>
              <td>Alex Garcia</td>
              <td>alexgarcia45@gmail.com</td>
              <td>(222) 222-4545</td>
              <td class="text-center">
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>3</td>
              <td>John Smith</td>
              <td>johnsmith78964@gmail.com</td>
              <td>(555) 555-1212</td>
              <td class="text-center">
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
          </table>
    </div>
    <style>
    .btn-outline-secondary{
      background-color: #253967!important;
      color:white;
    }
    .btn-outline-secondary:hover{
      background-color: #253967!important;
    }
    table#example thead tr th{
    background: #253967!important;
  
    }
    .table-row{
      background: #fff!important;
    }
    </style>
@endsection
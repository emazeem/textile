@extends('admin.layout.master')
@section('content')
    
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>
    <!--heading and add user button-->
    <div class="row">
      <div class="col-12 mb-2">
        <h3 class="float-left pb-1 font-weight-light"><i class="feather icon-users"></i> Customers</h3>
          <a href="" class="btn btn-primary shadow-sm float-right mt-2"><i class="fa fa-plus-circle mr-1"></i>Customers</a>
        
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
              <th>Address</th>
              <th>Industry</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
          <tr class="table-row">
              <td>1</td>
              <td>Happy Bakery</td>
              <td>456 Baker Blvd, Breadville, TX 78901</td>
              <td>Food Service</td>
              <td>
                <a href="{{route('customers.edit',['id'=>'1'])}}" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="{{route('customers.show',['id'=>'1'])}}" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="{{route('customers.delete',['id'=>'1'])}}" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>2</td>
              <td>Acme Corp</td>
              <td>123 Main St, Anytown, CA 12345</td>
              <td>Technology</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>3</td>
              <td>Green Earth Growers</td>
              <td>789 Sprout Street, Farmeville, WY 82001</td>
              <td>Agriculture</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>4</td>
              <td>Blooming Blooms</td>
              <td>789 Flower Lane, Petalville, FL 33456</td>
              <td>Retail</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>5</td>
              <td>Cloud Climbers</td>
              <td>1011 Sky High Ave, Summit City, NY 09876</td>
              <td>Software Development</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>6</td>
              <td>Sun Haven Yoga</td>
              <td>543 Peace Way, Tranquility Town, CO 81234</td>
              <td>Health & Wellness</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>7</td>
              <td>Fix-It Fast</td>
              <td>789 Wrench Way, Gearheadville, IL 60543</td>
              <td>Repair Services</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>8</td>
              <td>Crafty Creations</td>
              <td>10 Forge Lane, Handcraft Haven, MA 01234</td>
              <td>Arts & Crafts</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>9</td>
              <td>Technogadget Inc.</td>
              <td>1011 Innovation Way, Gadgetville, CA 90210</td>
              <td>Electronics</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
            <tr class="table-row">
              <td>10</td>
              <td>Global Delivery Express</td>
              <td>456 Swift Street, Parcelfield, NJ 07036</td>
              <td>Logistics</td>
              <td>
                <a href="" class="btn btn-success btn-sm" ><i class="fas fa-edit"></i></a>
                <a href="" class="btn btn-warning btn-sm"><i class="fas fa-eye"></i></a>
                <a href="" class="btn btn-danger btn-sm delete"><i class="fas fa-trash-alt"></i></a>
              </td>
            </tr>
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



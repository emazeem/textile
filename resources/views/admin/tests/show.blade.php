@extends('admin.layout.master')
@section('content')
    <script src="{{url('assets/js/1.10.1/jquery.min.js')}}"></script>

<div class="row pb-3">
  <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('tests.index')}}">Test List</a></li>
          <li class="breadcrumb-item active" aria-current="page">Test Details</li>
        </ol>
  </nav>
    <div class="col-12">
            <div class="card user-card user-card-3 support-bar1">
                <div class="card-header bg-light border-top">
                    <div class="row">
                        <div class="col-12">
                            <h4 class="font-weight-light"><i class="feather icon-user mr-1"></i>Test Details</h4>
                        </div>
                    </div>
            </div>
            <table class="table table-bordered table-sm bg-white">
            <tr>
              <th scope="col">Id</th>
              <td scope="col">1</td>
            </tr>
            <tr>
              <th scope="col">Lab</th>
              <td scope="col">chemical lab</td>
            </tr>
            <tr>
              <th scope="col">Name</th>
              <td scope="col">color</td>
            </tr>
            <tr>
              <th scope="col">Description</th>
              <td scope="col">chemical solidatity</td>
            </tr>
            <tr>
              <th scope="col">Add Range</th>
              <td scope="col">
              <form action="submit.php" method="post">
                <select name="options[]" id="options" multiple class="col-md-4">
                  <option value="option1">Range 1</option>
                  <option value="option2">Range 2</option>
                  <option value="option3">Range 3</option>
                  <option value="option4">Range 4</option>
                  <option value="option5">Range 5</option>
                  <option value="option6">Range 6</option>
                  <option value="option7">Range 7</option>
                  <option value="option8">Range 8</option>
                </select>
                <button type="submit" class="bg-c-primary rounded-md">Submit</button>
              </td>
            </tr>
          </table>
        </div>
      </div>
      @endsection

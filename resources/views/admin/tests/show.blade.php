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
              <form action="/action_page.php">
                <input list="browsers" name="browser">
                <datalist id="browsers">
                  <option value="Edge">
                  <option value="Firefox">
                  <option value="Chrome">
                  <option value="Opera">
                  <option value="Safari">
                </datalist>
                <input type="submit" class="bg-c-primary px-2">
              </form>
              </td>
            </tr>
          </table>
    </div>
</div>
@endsection

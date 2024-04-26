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
              <label for="assg-permissions" class="control-label font-weight-bold"></label>
                    <select class="multi-select form-control w-100"
                     name="permissions[]" multiple="multiple" id="assg-permissions">
                        <option value="range1">Range 1</option>
                        <option value="range2">Range 2</option>
                        <option value="range3">Range 3</option>
                        <option value="range4">Range 4</option>
                    </select>
                    <button type="submit" class="btn btn-primary"><i class='bx bxs-flask'></i> Select Ranges</button>
                </td>
            </tr>
          </table>
        </div>
      </div>
      <style>
    .select2-container--default .select2-selection--multiple .select2-selection__choice {
      background-color: #27458c !important;
    color: #fff !important;
}
</style>
<script>
    $(document).ready(function() {
    $('.multi-select').select2();
});
</script>
      @endsection

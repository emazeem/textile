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
                <div class="dropdown">
                  <button onclick="toggleDropdown()" class="bg-c-primary px-1 py-1 rounded-lg">Select Options</button>
                    <div id="options" class="dropdown-content">
                      <label><input type="checkbox" value="Option 1"> Option 1</label>
                      <label><input type="checkbox" value="Option 2"> Option 2</label>
                      <label><input type="checkbox" value="Option 3"> Option 3</label>
                    </div>
                  </div>
                  <div class="selected-items"></div>
                </td>
            </tr>
          </table>
        </div>
      </div>
      
      <script>
        function toggleDropdown() {
            document.getElementById("options").classList.toggle("show");
        }

        window.onclick = function(event) {
            if (!event.target.matches('.dropdown button')) {
                var dropdowns = document.getElementsByClassName("dropdown-content");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.classList.contains('show')) {
                        openDropdown.classList.remove('show');
                    }
                }
            }
        }

        document.querySelectorAll('.dropdown-content input[type="checkbox"]').forEach(checkbox => {
            checkbox.addEventListener('change', function() {
                const text = this.value;
                const selectedItems = document.querySelector('.selected-items');
                const existingItem = selectedItems.querySelector(`[data-value="${text}"]`);

                if (this.checked) {
                    if (!existingItem) {
                        const selectedItem = document.createElement('div');
                        selectedItem.setAttribute('data-value', text);
                        selectedItem.innerText = text;
                        selectedItems.appendChild(selectedItem);
                    }
                } else {
                    if (existingItem) {
                        existingItem.remove();
                    }
                }
            });
        });
    </script>
    
    <style>
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f1f1f1;
            min-width: 120px;
            overflow-y: auto;
            max-height: 100px;
            border: 1px solid #ddd;
            z-index: 1;
        }

        .dropdown-content label {
            display: block;
            padding: 5px 10px;
            cursor: pointer;
        }

        .dropdown-content label:hover {
            background-color: #ddd;
        }

        .show {
            display: block;
        }

        .selected-items {
              width:100px;
            margin-top: 5px;
            padding: 5px;
            border: 1px solid #ccc;
        }

        .selected-items div {
            margin-bottom: 5px;
            width: 100px;
            border-radius: 20px;
        }
    </style>

      @endsection

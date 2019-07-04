@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Inventories List</h4>
            <p class="card-category">List of inventories</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="patientsTable">
                <thead class=" text-primary">
                  <th>Id</th>
                  <th>Name</th>
                  <th>Unit_Price</th>
                  <th>Quantity</th>
                </thead>
                <tbody>
                  <?php
                  if (isset($inventories)) {
                    foreach ($inventories as $inventorie) { ?>
                      <tr>
                        <td><?php echo ($inventorie->Id) ?></td>
                        <td><?php echo ($inventorie->Name) ?></td>
                        <td><?php echo ($inventorie->Unit_Price) ?></td>
                        <td><?php echo ($inventorie->Quantity) ?></td>
                        <td>	
                          <a href="{{ url('/edit_inventorie/'.$inventorie->Id) }}" title="Update Record" data-toggle="tooltip"><i class="material-icons">update</i></a>
                          <a href="{{ url('/delete_inventorie/'.$inventorie->Id) }}" title="Delete Record" data-toggle="tooltip"><i class="material-icons">delete_forever</i></a>
                        </td>
                      </tr>
                    <?php
                  }
                }
                ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var element = document.getElementById("list_inventorie");
  element.classList.add("active");
</script>
@endsection
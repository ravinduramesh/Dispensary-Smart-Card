@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Allergies List</h4>
            <p class="card-category">List of Allergies</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="patientsTable">
                <thead class=" text-primary">
                  <th>#</th>
                  <th>Id</th>
                  <th>Name</th>
                  <th>Detail</th>
                </thead>
                <tbody>
                  <?php
                  if (isset($allergies)) {
                    foreach ($allergies as $allergie) { ?>
                      <tr>
                        <td><?php echo ($allergie->id) ?></td>
                        <td><?php echo ($allergie->allergy) ?></td>
                        <td><?php echo ($allergie->detail) ?></td>
                        <td>
                          <a href="{{ url('/edit_allergie/'.$allergie->id) }}" title="Update Record" data-toggle="tooltip"><i class="material-icons">update</i></a>
                          <a href="{{ url('/delete_allergie/'.$allergie->id) }}" title="Delete Record" data-toggle="tooltip"><i class="material-icons">delete_forever</i></a>
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
  var element = document.getElementById("list_allergie");
  element.classList.add("active");
</script>
@endsection
@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Prescriptions List</h4>
            <p class="card-category">List of Prescriptions generated through the system</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="patientsTable">
                <thead class=" text-primary">
                  <th>#</th>
                  <th>Prescription ID</th>
                  <th>Doctor ID</th>
                  <th>Patient ID</th>
                  <th>Description</th>
                </thead>
                <tbody>
                  <?php
                  if (isset($prescriptions)) {
                    foreach ($prescriptions as $prescription) { ?>
                      <tr>
                        <td><?php echo ($prescription->id) ?></td>
                        <td><?php echo ($prescription->doctor_id) ?></td>
                        <td><?php echo ($prescription->patient_id) ?></td>
                        <td><?php echo ($prescription->description) ?></td>
                        <td>
                          <a href="{{ url('/edit_prescription/'.$prescription->id) }}" title="Update Record" data-toggle="tooltip"><i class="material-icons">update</i></a>
                          <a href="{{ url('/delete_prescription/'.$prescription->id) }}" title="Delete Record" data-toggle="tooltip"><i class="material-icons">delete_forever</i></a>
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
  var element = document.getElementById("list_patients");
  element.classList.add("active");
</script>
@endsection
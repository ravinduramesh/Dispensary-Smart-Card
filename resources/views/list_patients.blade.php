@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Patients List</h4>
            <p class="card-category">List of registered patients who have a smart cards</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="patientsTable">
                <thead class=" text-primary">
                  <th>#</th>
                  <th>Name</th>
                  <th>Address</th>
                  <th>Date Of Birth</th>
                  <th>NIC</th>
                  <th>Blood Group</th>
                  <th>Contact</th>
                  <th>Action</th>
                </thead>
                <tbody>
                  <?php
                  if (isset($patients)) {
                    foreach ($patients as $patient) { ?>
                      <tr>
                        <td><?php echo ($patient->id) ?></td>
                        <td><?php echo ($patient->first_name . ' ' . $patient->last_name) ?></td>
                        <td><?php echo ($patient->address) ?></td>
                        <td><?php echo (date("Y-m-d", strtotime($patient->dob))) ?></td>
                        <td><?php echo ($patient->nic) ?></td>
                        <td><?php echo ($patient->blood_group) ?></td>
                        <td><?php echo ($patient->contact) ?></td>
                        <td>
                          <a href="{{ url('/add_PatientAllergie/'.$patient->id) }}" title="Add Allergies" data-toggle="tooltip"><i class="material-icons">assignment</i></a>
                          <a href="{{ url('/edit_patient/'.$patient->id) }}" title="Update Record" data-toggle="tooltip"><i class="material-icons">update</i></a>
                          <a href="{{ url('/confirmDelete/'.$patient->id) }}" title="Delete Record" data-toggle="tooltip"><i class="material-icons">delete_forever</i></a>
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
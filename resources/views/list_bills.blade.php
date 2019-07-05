@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Bill List</h4>
            <p class="card-category">List of all the bills</p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table" id="patientsTable">
                <thead class=" text-primary">
                  <th>Bill ID</th>
                  <th>Customer ID</th>
                  <th>Total Price</th>
                  <th>Created Date</th>
                  <th></th>
                </thead>
                <tbody>
                  <?php
                  if (isset($bills)) {
                    foreach ($bills as $bill) { ?>
                      <tr>
                        <td><?php echo ($bill->id) ?></td>
                        <td><?php echo ($bill->customer_id) ?></td>
                        <td><?php echo ($bill->total_price) ?></td>
                        <td><?php echo (date("Y-m-d", strtotime($bill->created_at))) ?></td>
                        <td>
                          <a href="{{ url('/single_bill/'.$bill->id) }}" title="View Record" data-toggle="tooltip"><i class="material-icons">View</i></a>
                          <!-- <a href="{{ url('/edit_bill/'.$bill->id) }}" title="Update Record" data-toggle="tooltip"><i class="material-icons">update</i></a>
                          <a href="{{ url('/confirmDelete/'.$bill->id) }}" title="Delete Record" data-toggle="tooltip"><i class="material-icons">delete_forever</i></a> -->
                          <a href="{{ url('/delete_bill/'.$bill->id) }}" title="Delete Record" data-toggle="tooltip"><i class="material-icons">delete_forever</i></a>
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
        <!-- <button><a href="{{ url('/add_prescription_bill/') }}" title="Add Bill" data-toggle="tooltip">Add Bill</a></button> -->
      </div>
    </div>
  </div>
</div>
<script>
  var element = document.getElementById("list_bills");
  element.classList.add("active");
</script>
@endsection
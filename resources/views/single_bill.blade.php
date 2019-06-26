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
                  <th>Item ID</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th></th>
                </thead>
                <tbody>
                  <?php
                  if (isset($bills)) {
                    foreach ($bills as $bill) { ?>
                      <tr>
                        <td><?php echo ($bill->bill_id) ?></td>
                        <td><?php echo ($bill->item_id) ?></td>
                        <td><?php echo ($bill->quantity) ?></td>
                        <td><?php echo ($bill->price) ?></td>
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
  var element = document.getElementById("single_bill");
  element.classList.add("active");
</script>
@endsection
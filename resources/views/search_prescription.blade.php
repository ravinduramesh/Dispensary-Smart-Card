@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Search Prescription</h4>
            <!-- <p class="card-category">List of all the bills</p> -->
          </div>
          <div class="card-body">
          <?php $id=0; ?>
          <form action="{{ url('/search_Prescription/') }}" method="post">
            <div class="col-md-6">
              <label>Prescription ID</label>
              <input type="number" name="id" class="form-control" required="required" value="<?php echo $id; ?>">
            </div>
            <a><button class="btn btn-primary pull-right">Create Bill</button></a>
            <button type="reset" class="btn btn-primary pull-right">Clear</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var element = document.getElementById("list_bills");
  element.classList.add("active");
</script>
@endsection
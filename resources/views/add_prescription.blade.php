@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Prescription</h4>
            <p class="card-category">Add new prescription</p>
          </div>
          <div class="card-body">
            <form action="{{ url('/insert_prescription') }}" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('doctor_id') ? ' has-error' : '' }}">
                    <label>Doctor ID</label>
                    <input type="text" name="doctor_id" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('doctor_id'))
                    <span class="help-block">
                      <strong>{{ $errors->first('doctor_id') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('patient_id') ? ' has-error' : '' }}">
                    <label>Patient ID</label>
                    <input type="text" name="patient_id" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('patient_id'))
                    <span class="help-block">
                      <strong>{{ $errors->first('patient_id') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('description') ? ' has-error' : '' }}">
                    <label>Description</label>
                    <textarea name="description" class="form-control" required="required"></textarea>
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('description'))
                    <span class="help-block">
                      <strong>{{ $errors->first('description') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <button type="submit" class="btn btn-primary pull-right">Create Prescription</button>
                <button type="reset" class="btn btn-primary pull-right">Clear</button>
                <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var element = document.getElementById("add_prescription");
  element.classList.add("active");
</script>
@endsection
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
                <!-- <div class="col-md-6">
                  <div class="form-group {{ $errors->has('contact') ? ' has-error' : '' }}">
                    <label>Contact Number</label>
                    <input type="text" name="contact" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('contact'))
                    <span class="help-block">
                      <strong>{{ $errors->first('contact') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('dob') ? ' has-error' : '' }}">
                    <label>Date Of Birth</label>
                    <input name="dob" type="date" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('dob'))
                    <span class="help-block">
                      <strong>{{ $errors->first('dob') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('nic') ? ' has-error' : '' }}">
                    <label>NIC</label>
                    <input type="text" name="nic" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('nic'))
                    <span class="help-block">
                      <strong>{{ $errors->first('nic') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('blood_group') ? ' has-error' : '' }}">
                    <label for="blood_group">Blood Group</label>
                    <select class="form-control" name="blood_group">
                      <option value="A+" selected="selected">A+</option>
                      <option value="A-">A-</option>
                      <option value="B+">B+</option>
                      <option value="B-">B-</option>
                      <option value="O+">O+</option>
                      <option value="O-">O-</option>
                      <option value="AB+">AB+</option>
                      <option value="AB-">AB-</option>
                    </select>
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('blood_group'))
                    <span class="help-block">
                      <strong>{{ $errors->first('blood_group') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('male') ? ' has-error' : '' }}">
                    <label class="radio-inline">Gender</label>
                    <select class="form-control" name="male">
                      <option value="1" selected="selected">Male</option>
                      <option value="0">Female</option>
                    </select>
                    @if ($errors->has('male'))
                    <span class="help-block">
                      <strong>{{ $errors->first('male') }}</strong>
                    </span>
                    @endif
                  </div>
                </div> -->
                
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
  var element = document.getElementById("add_patient");
  element.classList.add("active");
</script>
@endsection
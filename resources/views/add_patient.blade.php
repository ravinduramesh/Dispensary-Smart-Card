@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Patient</h4>
            <p class="card-category">Add new patient and issue a smart card</p>
          </div>
          <div class="card-body">
            <form action="{{ url('/insert_patient') }}" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('first_name') ? ' has-error' : '' }}">
                    <label>First Name</label>
                    <input type="text" name="first_name" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('first_name'))
                    <span class="help-block">
                      <strong>{{ $errors->first('first_name') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('last_name') ? ' has-error' : '' }}">
                    <label>Last Name</label>
                    <input type="text" name="last_name" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('last_name'))
                    <span class="help-block">
                      <strong>{{ $errors->first('last_name') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                    <label>Address</label>
                    <textarea name="address" class="form-control" required="required"></textarea>
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('address'))
                    <span class="help-block">
                      <strong>{{ $errors->first('address') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
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
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary pull-right">Add New User</button>
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
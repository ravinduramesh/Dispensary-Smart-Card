@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add New User</h4>
            <p class="card-category">Add new patient and issue a smart card</p>
          </div>
          <div class="card-body">
            <form action="{{ url('/insert_user') }}" method="post">
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
                  <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label>Email Address</label>
                    <input name="email" type="email" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('email'))
                    <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
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
                  <div class="form-group {{ $errors->has('user_level') ? ' has-error' : '' }}">
                    <label for="user_level">Blood Group</label>
                    <select class="form-control" name="user_level">
                      <option value="1" selected="selected">Administrator</option>
                      <option value="2">Doctor</option>
                      <option value="3">Pharmacist</option>
                    </select>
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('user_level'))
                    <span class="help-block">
                      <strong>{{ $errors->first('user_level') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
              </div>
              
              <button type="submit" class="btn btn-primary pull-right">Add Patient</button>
              <button type="reset" class="btn btn-primary pull-right">Clear</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <?php
      if (isset($users)) {
        foreach ($users as $user) { ?>
          <div class="col-md-3">
            <div class="card">
              <div class="card-header card-header-success">
                <h4 class="card-title"><?php echo($user->first_name.' '.$user->last_name) ?></h4>
                <p class="card-category">
                  <?php
                  if($user->user_level == 1) {
                    echo('Administrator');
                  } else if($user->user_level == 2) {
                    echo('Doctor');
                  } else {
                    echo('Pharmacist');
                  }
                  ?>
                </p>
              </div>
              <div class="card-body">
                <img class="users-pro-pic" src="<?php echo ($user->pro_pic) ?>">
              </div>
              <div class="card-footer">
                <button class="btn btn-danger">Delete</button>
              </div>
            </div>
          </div>
      <?php
        }
      }
      ?>
    </div>
  </div>
</div>
<script>
  var element = document.getElementById("manage_users");
  element.classList.add("active");
</script>
@endsection
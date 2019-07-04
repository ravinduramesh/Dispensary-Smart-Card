@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Allergy</h4>
            <p class="card-category">Add new allergy</p>
          </div>
          <div class="card-body">
            <form action="{{ url('/insert_allergie') }}" method="post">
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('allergy') ? ' has-error' : '' }}">
                    <label>Allergy Name</label>
                    <input type="text" name="allergy" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('allergy'))
                    <span class="help-block">
                      <strong>{{ $errors->first('allergy') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group {{ $errors->has('detail') ? ' has-error' : '' }}">
                    <label>Detail</label>
                    <input type="text" name="detail" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('detail'))
                    <span class="help-block">
                      <strong>{{ $errors->first('detail') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                
                <button type="submit" class="btn btn-primary pull-right">Add Allergie</button>
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
  var element = document.getElementById("add_allergie");
  element.classList.add("active");
</script>
@endsection
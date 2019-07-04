@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluId">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Invenntories</h4>
            <p class="card-category">Add new inventory</p>
          </div>
          <div class="card-body">
            <form action="{{ url('/insert_inventorie') }}" method="post">
              {{ csrf_field() }}
             
                <div class="col-md-12">
                  <div class="form-group {{ $errors->has('Name') ? ' has-error' : '' }}">
                    <label>Name</label>
                    <input type="text" name="Name" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('Name'))
                    <span class="help-block">
                      <strong>{{ $errors->first('Name') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group {{ $errors->has('Unit_Price') ? ' has-error' : '' }}">
                    <label>Unit_Price</label>
                    <input type="number" Unit_Price="Unit_Price" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('Unit_Price'))
                    <span class="help-block">
                      <strong>{{ $errors->first('Unit_Price') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <div class="col-md-12">
                  <div class="form-group {{ $errors->has('Quantity') ? ' has-error' : '' }}">
                    <label>Quantity</label>
                    <input type="number" Quantity="Quantity" class="form-control" required="required" value="">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('Quantity'))
                    <span class="help-block">
                      <strong>{{ $errors->first('Quantity') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
                <button type="submit" class="btn btn-primary ">Add inventory</button>
                <button type="reset" class="btn btn-primary ">Clear</button>
                <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
</div>
<script>
  var element = document.getElementById("add_inventorie");
  element.classList.add("active");
</script>
@endsection
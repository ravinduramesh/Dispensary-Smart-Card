@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluId">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Inventories</h4>
            <p class="card-category">Edit inventoiries details who has a smart card</p>
          </div>
          <div class="card-body">
            <form action="{{ url('/update_inventorie/'.$inventorie->Id) }}" method="post">
             
            <!-- Name	Unit_Price	Quantity	 -->
              {{ csrf_field() }}
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group {{ $errors->has('Name') ? ' has-error' : '' }}">
                    <label>Name</label>
                    <input type="text" name="Name" class="form-control" required="required" value="{{ $inventorie->Name }}">
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
                    <label>Unit Price</label>
                    <input type="number" name="Unit_Price" class="form-control" required="required" value="{{ $inventorie->Unit_Price }}">
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
                    <label>Unit Price</label>
                    <input type="number" name="Quantity" class="form-control" required="required" value="{{ $inventorie->Quantity }}">
                    <div class="help-block with-errors"></div>
                    @if ($errors->has('Quantity'))
                    <span class="help-block">
                      <strong>{{ $errors->first('Quantity') }}</strong>
                    </span>
                    @endif
                  </div>
                </div>
            
                <button type="submit" class="btn btn-primary pull-right">Update inventory</button>
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
  var element = document.getElementById("add_inventorie");
  element.classList.add("active");
</script>
@endsection
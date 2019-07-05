@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Add Patient Allergies</h4>
            <p class="card-category">Add Patient Allergies details who has a smart card</p>
          </div>
          <div class="card-body">
            <form action="{{ url('/insert_PatientAllergie/'.$patient->id) }}" method="post">
              {{ csrf_field() }}
     
                <div class="col-md-12">
                  <div class="form-group {{ $errors->has('patient') ? ' has-error' : '' }}">
                    <label>Patient Name</label>
                    <label name="name" class="form-control" >{{ $patient->first_name. ' ' .$patient->last_name }}</label>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
               
                <div class="col-md-12">
                  <div class="form-group {{ $errors->has('detail') ? ' has-error' : '' }}">
                    <label>Select Allergy</label>
                    <select name = 'allergy_id' class= "form-control">
                        @foreach($allergies as $allergy)
                            <option value ='{{$allergy->id}}'>{{$allergy->allergy}}</option>
                        @endforeach    
                    </select>
                  </div>
                </div>
                
            
                <button type="submit" class="btn btn-primary pull-left">Add Patient Allergy</button>
                <button type="reset" class="btn btn-primary pull-left">Clear</button>
                <div class="clearfix"></div>
            </form>
          </div>
      
      </div>
    </div>
  </div>
</div>
<script>
  var element = document.getElementById("list_patients");
  element.classList.add("active");
</script>
@endsection
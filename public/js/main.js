/*scroll to top*/
$(document).ready(function(){
	$('#sponsor').val('0');
	$('#sponsor_name').removeAttr('required');
	$('#sponsor_name').hide();

	$('#category').val('Studio');
	$('#studio').show();
  $('#live').prop('required',true);
  $('#studio_req').prop('required',true);

  $('#transport1').hide();
  $('#transport2').hide();
  $('#transport3').hide();
  $('#no_of_vehicles').removeAttr('required');
  $('#vehicle_type').removeAttr('required');
  $('#date_departure').removeAttr('required');
  $('#date_coming').removeAttr('required');
});

$('#sponsor').change(function(){
    if($(this).val() == '1'){
    	$('#sponsor_name').show();
    	$('#sponsor_name').prop('required',true);
  	}
  	else{
  		$('#sponsor_name').removeAttr('required');
  		$('#sponsor_name').hide();
  	}
});

$('#category').change(function(){
    if($(this).val() == 'Studio'){
    	$('#studio').show();
  		$('#live').prop('required',true);
  		$('#studio_req').prop('required',true);

      $('#transport1').hide();
      $('#transport2').hide();
      $('#transport3').hide();
      $('#no_of_vehicles').removeAttr('required');
      $('#vehicle_type').removeAttr('required');
      $('#date_departure').removeAttr('required');
      $('#date_coming').removeAttr('required');
  	}
  	else{
  		$('#live').removeAttr('required');
    	$('#studio_req').removeAttr('required');
  		$('#studio').hide();

      $('#transport1').show();
      $('#transport2').show();
      $('#transport3').show();
      $('#no_of_vehicles').prop('required',true);
      $('#vehicle_type').prop('required',true);
      $('#date_departure').prop('required',true);
      $('#date_coming').prop('required',true);
  	}
});

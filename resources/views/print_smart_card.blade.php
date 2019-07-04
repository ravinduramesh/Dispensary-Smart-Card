<!DOCTYPE html>
<html lang="en">

<head>
  <title>Dispensary Smart Card System</title>
  <meta charset="utf-8" />
  <link rel="icon" type="image/ico" href="{{ URL::asset('favicon.ico') }}" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
  <!-- CSS Files -->
  <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/main.css') }}">

  <script src="{{ URL::asset('js/core/jquery.min.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/jquery.qrcode.js') }}"></script>
  <script type="text/javascript" src="{{ URL::asset('js/qrcode.js') }}"></script>
</head>

<body>
  <div class="wrapper ">
    <div class="content">
      <div class="container">
        <div class="row">
          <div class="col-md-8 offset-md-2">
            <div class="card">
              <div class="card-header card-header-success">
                <h4 class="card-title">Patient Name - <?php echo ($patient->first_name . ' ' . $patient->last_name) ?></h4>
                <p class="card-category">
                  Doctor - Dr. Pasan Mohotti 
                  <br/>
                  Dispensary Address - 15/15/1, Rafalawatta road,Yakkala
                </p>
              </div>
              <div class="card-body">
                <div id="qrcodeCanvas"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    jQuery('#qrcodeCanvas').qrcode({
      text: "{{ url('/patient_menu/'.$patient->id) }}"
    });
  </script>
  <script src="{{ URL::asset('js/core/bootstrap-material-design.min.js') }}"></script>
  <script src="{{ URL::asset('js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
</body>

</html>
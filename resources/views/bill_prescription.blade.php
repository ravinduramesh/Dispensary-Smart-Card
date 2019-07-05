@extends('layouts.app')
@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Prescription</h4>
            <p class="card-category"></p>
          </div>
          <div class="card-body" id="print">
          <?php
        //   $bill_id;
          $customer_id;
          if (isset($bills)) {
            foreach($bills as $bill)
            $customer_id = $bill->patient_id;
            //   $bill_id = $bill->bill_id;
          ?>
            <div class="table-responsive">
              <table class="table" id="singleBillTable">
                <thead class=" text-primary">
                  <!-- <th>Bill ID</th>
                  <th><?php //echo $bill_id; ?></th> -->
                  <th>Customer ID</th>
                  <th><?php echo $customer_id; ?></th>
                </thead>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table" id="singleBillTable">
                <thead class=" text-primary">
                  <th>Item ID</th>
                  <th>Item</th>
                  <th>Quantity</th>
                  <th>Unit Price</th>
                  <th></th>
                </thead>
                <tbody>
                <?php
                  $total_price=0;
                    foreach ($bills as $bill) { ?>
                      <tr>
                        <td><?php echo ($bill->item_id) ?></td>
                        <td><?php echo ($bill->name) ?></td>
                        <td><?php echo ($bill->quantity) ?></td>
                        <td><?php echo ($bill->unit_price) ?></td>
                      </tr>
                <?php
                    $total_price = $total_price + $bill->unit_price;
                    }
                ?>
                </tbody>
              </table>
            </div>
            <div class="table-responsive">
              <table class="table" id="singleBillTable">
                <thead class=" text-primary">
                  <th>Total Price : </th>
                  <th><?php echo $total_price; } ?></th>
                </thead>
              </table>
            </div>
          </div>
          <button onclick="myFunction()">Print Bill</button>
          <script language='javascript'>
            function myFunction() {
         	    var prtContent = document.getElementById("print");
         	    var WinPrint = window.open('', '', 'left=0,top=0,width=800,height=900,toolbar=0,scrollbars=0,status=0');
         	    WinPrint.document.write(prtContent.innerHTML);
         	    WinPrint.document.close();
         	    WinPrint.focus();
         	    WinPrint.print();
           	    WinPrint.close();
           	  //window.print();
            }
          </script>
        </div>
      </div>
    </div>
  </div>
</div>
<script>
  var element = document.getElementById("single_bill");
  element.classList.add("active");
</script>
@endsection
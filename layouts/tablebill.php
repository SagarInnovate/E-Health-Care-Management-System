<table>
        <tr>
          <td>Invoice Number:</td>
          <td>#00<?php echo $patient["id"];  ?>A</td>
        </tr>
        <tr>
          <td>Invoice Date:</td>
          <td><?php echo $patient["date"];  ?></td>
        </tr>
        <tr>
          <td>Patient ID:</td>
          <td><?php echo $patient["id"];  ?></td>
        </tr>
        <tr>
          <td>Patient Name:</td>
          <td><?php echo $patient["name"];  ?></td>
        </tr>
        <tr>
          <td>Address:</td>
          <td><?php echo $patient["address"];  ?></td>
        </tr>
        <tr>
          <td>Phone Number:</td>
          <td><?php echo $patient["phone"];  ?></td>
        </tr>
      </table>
    </div>
    
    <table>
      <tr>
        <th>Description</th>
        <th>Quantity</th>
        <th>Unit Price</th>
        <th>Total</th>
      </tr>
      <tr>
        <td>Ward Charges per Day</td>
        <td><?php echo $patient["stayed_days"];  ?>days</td>
        <td>₹<?php echo $patient["WCPday"];  ?></td>
        <td>₹<?php echo $patient["totalWC"];  ?></td>
      </tr>
      <tr>
        <td>Doctor Fees</td>
        <td>1</td>
        <td>₹<?php echo $patient["doctor_fee"];  ?></td>
        <td>₹<?php echo $patient["doctor_fee"];  ?></td>
      </tr>
      <tr>
        <td>Service Fee</td>
        <td>1</td>
        <td>₹<?php echo $patient["service_fee"];  ?></td>
        <td>v<?php echo $patient["service_fee"];  ?></td>
      </tr>
      <tr class="total-row">
        <td colspan="3">Total Bill:</td>
        <td>₹<?php echo $patient["total_bill"];  ?></td>
      </tr>
    </table>
    <div class="invoice-total">
      <div class="amount-due">
        <strong>Amount Due:</strong>₹<?php echo $patient['total_bill'];  ?>
      </div>
    </div>
<?php
    $pc = $_GET['product_cost'];
    $pt = $_GET['product_tax'];
    $pd = $_GET["product_discount"];

    //total payable
    $temp_tax = $pc*$pt/100;
    $temp_pc_with_tax = $pc + $temp_tax;
    $temp_disc = $temp_pc_with_tax*$pd/100;
    $temp_payable = $temp_pc_with_tax - $temp_disc;

?>

<!DOCTYPE html>
<html>
<head>

<style>
  table, td, th {
  border: 1px solid black;
}

table {
  border-collapse: collapse;
  width: 30%;
}

td {
  text-align: left;
}

td{
  height: 1.5rem;
}

.text-right{
  text-align: right;
}
.text-center{
  text-align: center;
}

</style>

</head>
<body>

<table>
  <tr>
  <td colspan="3">Product Cost</td>
    <td class="text-center">₹ <?= $pc ?></td>
  </tr>
  <tr>
    <td colspan="3">Total Payable</td>
    <td class="text-center"><strong>₹ <?= $temp_payable ?></strong></td>
  </tr>
  <tr>
    <td colspan="4"></td>
  </tr>
  <tr>
    <td colspan="2" rowspan="2" style="width:50%"></td>
    <td class="text-right">Tax (<?= $pt ?>%)</td>
    <td class="text-center">₹ <?= $temp_tax ?></td>
  </tr>
  <tr>
    <td class="text-right">Discount (<?= $pd ?>%)</td>
    <td class="text-center">₹ <?= $temp_disc ?></td>
  </tr>
</table>
</table>


</body>
</html>
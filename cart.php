<html>
<head>
<style>

table, th, td {
 border: 1px solid black;

border-collapse: collapse;
}

</style>
</head>
<body>
<?php
$name=$_GET["name"];
$gender=$_GET["gender"];
$address=$_GET["address"];
$pno=$_GET["pno"];
$ptype=$_GET["paymenttype"];
$q1=$_GET["Q1"];
$q2=$_GET["Q2"];
$q3=$_GET["Q3"];
?>
 <?php echo "Name:".$name;?><br>
   <?php echo"Gender:". $gender;?><br>
   <?php echo"Address:".$address;?><br>
   <?php echo"phonenumber:".$pno;?><br>
   <?php echo"Type of payment you opted:".$ptype;?><br>
   <table>
   <tr>
   <th>item</th>
   <th>Qty</th> 
   <th>cost</th>
   </tr>
 
<tr>
   
<td>USB pendrive</td>
   
<td><?php echo $qu1;?></td> 
   
<td><?php echo $qu1*300;?></td>

</tr>

<tr>
  
<td>wireless mouse</td>
  
<td><?php echo $qu2;?></td> 
  
<td><?php echo $qu2*200;?></td>
 </tr>

<tr>
  
<td>keyboard</td>
  
<td><?php echo $qu3;?></td> 
   
<td><?php echo $qu3*400;?></td>

</tr>

<tr>
   
<td>laptop</td>
   
<td><?php echo $qu4;?></td> 
   
<td><?php echo $qu4*33000;?></td>

</tr>
<tr>
<td>Total cost:$qu1**300+$qu2*200+$qu3*400+$qu4*33000;</td>
</tr>
</table>
echo"thanks for your order";
</body>
</html>

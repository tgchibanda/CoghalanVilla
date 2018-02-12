<?php
error_reporting(0);
include 'opendb.php';
$rn=$_REQUEST['rn'];
$qry=mysql_query("select * from ratings where reservation_number='$rn'");

if(mysql_num_rows($qry)==1){
	?>
    <script language="javascript">
	alert("Rating has already been received...!")
	location='index.html'
	</script>
    <?php
	exit;
}



?>
<form action="" method="post">
<center><strong>Please Submit Your Ratings Below.</strong>
<table width="50%" border="0">
  <tr>
    <td>The  service on arrival was welcoming.</td>
    <td><input type="text" name="op1"></td>
  </tr>
  <tr>
    <td>The  check in process was efficient.</td>
    <td><input type="text" name="op2"></td>
  </tr>
  <tr>
    <td>The  room layout and furnishings met my expectations.</td>
    <td><input type="text" name="op3"></td>
  </tr>
  <tr>
    <td>The  room was clean.</td>
    <td><input type="text" name="op4"></td>
  </tr>
  <tr>
    <td>The  quality of the food met my expectations.</td>
    <td><input type="text" name="op5"></td>
  </tr>
  <tr>
    <td>The  activities met my expectations.</td>
    <td><input type="text" name="op6"></td>
  </tr>
  <tr>
    <td>The  hotel WiFi signal quality and speed met my expectations. </td>
    <td><input type="text" name="op7"></td>
  </tr>
  <tr>
    <td>The  staff was friendly and willing to help. </td>
    <td><input type="text" name="op8"></td>
  </tr>
  <tr>
    <td>My  checkout was accurate and efficient.</td>
    <td><input type="text" name="op9"></td>
  </tr>
  <tr>
    <td>I  received value for money. </td>
    <td><input type="text" name="op10"></td>
  </tr>
  <tr>
    <td>The  overall experience met my expectations. </td>
    <td><input type="text" name="op11"></td>
  </tr>
  <tr>
    <td>I  enjoyed my stay and would recommend it to others.</td>
    <td><input type="text" name="op12"></td>
  </tr>
  <tr>
    <td><strong>Comment:</strong></td>
    <td><input type="text" name="comment"></td>
  </tr>
  <tr>
    <td colspan="2"><div align="center">
      <input type="submit" name="submit" value="Submit Ratings">
    </div></td>
  </tr>
</table>
</center>
</form>

<?php
if(isset($_POST['submit'])){
	$date=date("d/m/Y");
	mysql_query("insert into ratings (op1,op2,op3,op4,op5,op6,op7,op8,op9,op10,op11,op12,comment,reservation_number,date) values ('$_POST[op1]','$_POST[op2]','$_POST[op3]','$_POST[op4]','$_POST[op5]','$_POST[op6]','$_POST[op7]','$_POST[op8]','$_POST[op9]','$_POST[op10]','$_POST[op11]','$_POST[op12]','$_POST[comment]','$rn', '$date')")or die(mysql_error());
	
	?>
    <script language="javascript">
	alert("Thank you for your rating...!")
	location='index.html'
	</script>
    <?php
}
?>
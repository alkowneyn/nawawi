
<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"simpledata");
?>
<form name="pob" action="" method="POST">
<table>
<tr>
<td> </td>
<td> <select style="width:440px ; height:31px;" name="pob" > 
<option> Select </option>
<?php
$res=mysqli_query($link, "SELECT * FROM  pob");
while($row=mysqli_fetch_array($res))
{ ?>
<option><?php echo  $row["pob"]; ?></option>
    <?php
}
?>
</select></td></tr>
</table>
</form>
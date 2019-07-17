<?php
 include_once('config.php');
 $res = mysqli_query($conn,"select * from customer where status=0");
 /*while($x = mysqli_fetch_array($res))

 { 
 	echo $x[0]." ".$x[1]." ".$x[2]."<hr>";

 }*/

/*while($x = mysqli_fetch_object($res))

 { 
 	echo $x->email." ".$x->mobile." ".$x->password."<hr>";

 }*/
 /*while($x = mysqli_fetch_array($res))

 { 
 	echo $x["email"]." ".$x["mobile"]." ".$x["password"]."<hr>";

 }*/
 /*while($x = mysqli_fetch_row($res))

 { 
 	echo $x[0]." ".$x[1]." ".$x[2]."<hr>";

 }*/

 /*while($x = mysqli_fetch_assoc($res))

 { 
 	echo $x["email"]." ".$x["mobile"]." ".$x["password"]."<hr>";

 }*/

/*while($x = mysqli_fetch_row($res))
{
for($i=0;$i<mysqli_num_fields($res);$i++)
{
	echo $x[$i]." ";
}
echo "<br>";
}*/
echo "<table border='1' cellspacing='0' cellpadding='0'><tr><th>ID</th><th>Email</th><th>Mobile</th><th>Password</th></tr>";
$count=0;
while($x = mysqli_fetch_assoc($res))
{
	echo "<tr>";
foreach($x as $key=>$value)
{
	if($key!="customerid" and $key!="status")
	echo "<td>".$x[$key]."</td>";
    else if($key=='customerid')
    {
    $count++;
    echo "<td>".$count."</td>";	
     }
}?>
<td><a href="EditReg.php?q=<?php echo base64_encode($x['customerid']); ?>">Edit</a></td><td><a href="DeleteReg.php?q=<?php echo base64_encode($x['customerid']); ?>">Delete</a></td>
<?php
echo "</tr>";
}
?>
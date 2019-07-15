<?php
 include_once('config.php');
 $res = mysqli_query($conn,"select * from customer");
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
while($x = mysqli_fetch_assoc($res))
{
foreach($x as $key=>$value)
{
	echo $x[$key]." ";
}
echo "<br>";
}
?>
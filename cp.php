<!doctype html>
<html>
<head>
</head>
<body>
<?php
$con=mysql_connect("localhost","root","");
if($con)
{
mysql_select_db("vadodara",$con);
$result=mysql_query("SELECT * FROM vadodara where Department='C&P' ORDER BY FirstName ASC");
if(mysql_num_rows($result)>0)
{
while($row=mysql_fetch_array($result))
{
echo"<tr><br>";
echo"<td><a href=\"cp.php?
id={$row['FirstName']}\">".$row['FirstName']." ".$row['LastName']."</a></td><br/>";
echo"</tr>";
}
}
mysql_close($con);
}
?>
                <?php
$con=mysql_connect("localhost","root","");
if($con)
{
mysql_select_db("vadodara",$con);
$f=isset($_GET['id']) ? $_GET['id'] : '';
$result=mysql_query("SELECT * FROM vadodara WHERE FirstName ='$f'");
while($row=mysql_fetch_array($result))
{
    echo"<tr><br>";
    echo"<b>CPF : </b><td>".$row['CPF']."</td><br><br>";
    echo"<b>Name : </b><td>".$row['FirstName']."</td>";
    echo" <td>".$row['LastName']."</td><br><br>";
    echo"<b>Department : </b><td>".$row['Department']."</td><br><br>";
    echo"<b>Designation : </b><td>".$row['Designation']."</td><br><br>";
    echo"<b>DOB : </b><td>".$row['DOB']."</td><br><br>";
    echo"<b>Mobile : </b><td>".$row['Mobile']."</td><br><br>";
    echo "<b>Email : </b><td><a href='mailto:".$row['Email']."'>".$row['Email']."</a></td><br><br>";
    echo"<b>Office: </b><td>".$row['Office']."</td><br><br>";
    echo"</tr>";
}
mysql_close($con);
}
?>
</body>
</html>
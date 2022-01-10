<!doctype html>
<html>
<head>
<style>
#lm5 {
  border-radius: 5px;
  padding: 20px;
  width: 60%;
  margin-left: 275px;
}
input[type=search], select {
  width: auto;
  padding: 12px 20px;
  margin: 8px 0;
  margin-left: -10px;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: auto;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
</style>
</head>
<body background="background.jpg">
<div id="lm5" style="background-color:rgb(255,255,255,0.7)">
<form action="" method="POST">
Search: <input type="search" name="search" placeholder="Search name by letter">
<input type="submit" name="insert" value="search" class="btn2" style="float:right">
</form>
<br/>
<?php
if(isset($_POST['insert']))
{
$con=mysql_connect("localhost","root","");
$search=$_POST['search'];
if($con)
{
mysql_select_db("vadodara",$con);
if($search)
{
$result=mysql_query("SELECT * FROM vadodara where FirstName LIKE '%{$search}%' || LastName like '%{$search}%' ORDER BY FirstName ASC");
while($row=mysql_fetch_array($result))
{
echo"<tr><br>";
echo"<b>CPF: </b><td>".$row['CPF']."</td><br><br>";
echo"<b>Name: </b><td>".$row['FirstName']."</td>";
echo" <td>".$row['LastName']."</td><br><br>";
echo"<b>Department: </b><td>".$row['Department']."</td><br><br>";
echo"<b>Designation: </b><td>".$row['Designation']."</td><br><br>";
echo"<b>DOB: </b><td>".$row['DOB']."</td><br><br>";
echo"<b>Mobile: </b><td>".$row['Mobile']."</td><br><br>";
echo "<b>Email : </b><td><a href='mailto:".$row['Email']."'>".$row['Email']."</a></td><br><br>";
echo"<b>Office: </b><td>".$row['Office']."</td><br><br>";
echo"</tr>";
}
}
else
{
  echo"Please enter name";
}
mysql_close($con);
}
}
?>
</div>
</body>
</html>
<html>
<head>
<title>ITF Lab</title>
</head>
<body>
<?php
$conn = mysqli_init();
mysqli_real_connect($conn, 'ing63070174.mysql.database.azure.com', 'yahogoo00@ing63070174', 'Ing63070174', 'itflab', 3306);
if (mysqli_connect_errno($conn))
{
    die('Failed to connect to MySQL: '.mysqli_connect_error());
}
$res = mysqli_query($conn, 'SELECT * FROM guestbook');
?>


<table class='table table-dark table-striped'>
  <tr>
    <th width="100"> <div align="center">Name</div></th>
    <th width="350"> <div align="center">Comment </div></th>
    <th width="150"> <div align="center">Action </div></th>
    <td align="center"><?php echo $row["name"]; ?></td>
    <td align="center"><?php echo $row["age"]; ?></td>
  </tr>
</table>
<?php
while($Result = mysqli_fetch_array($res))
{
?>
  <tr>
    <td><?php echo $Result['Name'];?></div></td>
    <td><?php echo $Result['Comment'];?></td>
    <td><?php echo $Result['Action'];?></td>
  </tr>
<?php
}
?>
<?php
mysqli_close($conn);
?>
</body>
</html>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div style="align: center;"> 
        <?php
include('config.php');

$query1=mysql_query("select  * from Project "); // ค้นหา 

echo "<table><tr><td>ลำดับ</td><td>ชื่อโครงการ</td> <td></td> <td></td></tr> \n";
while($query2=mysql_fetch_array($query1))
{
echo "<tr><td>".$query2['Project_id']."</td>";
echo "<td>".$query2['Project_name']."</td>";
echo "<td><a href='project_information_edit.php?id=".$query2['Project_id']."'>แก้ขไข โครงการ</a></td>"; // ไปหน้า แก้ไข

echo "<td><a href='project_information_delete.php?id=".$query2['Project_id']."'>ลบ</a></td></tr> \n"; // ลบทั้ง
}
?>
        
</table>
</div>
    </body>
</html>

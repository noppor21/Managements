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
         <?php
include('config.php');
if(isset($_GET['id']))
{
$id=$_GET['id'];
if(isset($_POST['submit']))
{

$Project_name = $_POST['Project_name']; // รับค่าคร้าฟฟ
$Project_rationale  =$_POST['Project_rationale'];
$Project_objective   =$_POST['Project_objective'];
$Project_goal    =$_POST['Project_goal'];
$Project_work_procedures  =$_POST['Project_work_procedures'];
$Project_time=$_POST['Project_time'];
$Project_place=$_POST['Project_place'];
$Project_attendees=$_POST['Project_attendees'];
$Project_expected_result=$_POST['Project_expected_result'];
$Project_evaluation=$_POST['Project_expected_result'];
$Project_budgets=$_POST['Project_budgets'];
$Project_Responsible_for_project=$_POST['Project_Responsible_for_project'];
//$updatestr="UPDATE Project SET Project_name='$Project_name',Project_rationale='$Project_rationale',Project_objective='$Project_objective',Project_goal='$Project_goal',Project_work_procedures='$Project_work_procedures',Project_time='$Project_time',Project_place='$Project_place',Project_attendees='$Project_attendees',Project_expected_result='$Project_expected_result',Project_evaluation='$Project_evaluation',Project_budgets='$Project_budgets',Project_Responsible_for_project='$Project_Responsible_for_project' WHERE Project _id='$id'";
$query3=mysql_query("UPDATE Project SET Project_name='$Project_name',Project_rationale='$Project_rationale',Project_objective='$Project_objective',Project_goal='$Project_goal',Project_work_procedures='$Project_work_procedures',Project_time='$Project_time',Project_place='$Project_place',Project_attendees='$Project_attendees',Project_expected_result='$Project_expected_result',Project_evaluation='$Project_evaluation',Project_budgets='$Project_budgets',Project_Responsible_for_project='$Project_Responsible_for_project' WHERE Project_id='$id'");
if($query3)
{
header('location:project_information.php');
}
}

$query1=mysql_query("select * from Project where Project_id='$id'");
$query2=mysql_fetch_array($query1);
?>

 <center>
     <fieldset style="width:900px;">
            <h1>แก้ไข</h1>
            
<form method="post" action="">
ชื่อโครงการ:<input type="text" name="Project_name" value="<?php echo $query2['Project_name']; ?>" /><br />
หลักการและเหตุผล: <input type="text" name="Project_rationale"value="<?php echo $query2['Project_rationale']; ?>" /><br />
วัตถุประสงค์ : <input type="text" name="Project_objective"value="<?php echo $query2['Project_objective']; ?>" /><br />
เป้าหมาย :</label><input type="text" name="Project_goal"value="<?php echo $query2['Project_goal']; ?>" /><br />
ขั้นตอนการทำงาน :</label><input type="text" name="Project_work_procedures"value="<?php echo $query2['Project_work_procedures']; ?>" /><br />
เวลา : </label><input type="text" name="Project_time"value="<?php echo $query2['Project_time']; ?>" /><br />
สถานที่  :</label><input type="text" name="Project_place"value="<?php echo $query2['Project_place']; ?>" /><br />
ผู้เข้าร่วมโครงการ :</label><input type="text" name="Project_attendees"value="<?php echo $query2['Project_attendees']; ?>" /><br />
ผลที่คาดว่าจะได้รับ :</label><input type="text" name="Project_expected_result"value="<?php echo $query2['Project_expected_result']; ?>" /><br />
การประเมินผล  :</label><input type="text" name="Project_evaluation"value="<?php echo $query2['Project_evaluation']; ?>" /><br />
งบประมาณ   :</label><input type="text" name="Project_budgets"value="<?php echo $query2['Project_budgets']; ?>" /><br />
ผู้รับผิดชอบโครงการ  :</label><input type="text" name="Project_Responsible_for_project"value="<?php echo $query2['Project_Responsible_for_project']; ?>" /><br />
<br />
<input type="submit" name="submit" value="update" />
</form>
<?php
}
?>
    </body>
</html>

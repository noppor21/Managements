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
        // put your code here
        
   include('config.php');  if(isset($_POST['save']))
{
$Project_name = mysql_real_escape_string($_POST['Project_name']); // รับค่าคร้าฟฟ

$Project_rationale  =mysql_real_escape_string($_POST['Project_rationale']);

$Project_objective   =mysql_real_escape_string($_POST['Project_objective']);

$Project_goal    =mysql_real_escape_string($_POST['Project_goal']);

$Project_work_procedures  =mysql_real_escape_string($_POST['Project_work_procedures']);

$Project_time=mysql_real_escape_string($_POST['Project_time']);

$Project_place=mysql_real_escape_string($_POST['Project_place']);

$Project_attendees=mysql_real_escape_string($_POST['Project_attendees']);

$Project_expected_result=mysql_real_escape_string($_POST['Project_expected_result']);

$Project_evaluation=mysql_real_escape_string($_POST['Project_expected_result']);

$Project_budgets=mysql_real_escape_string($_POST['Project_budgets']);

$Project_Responsible_for_project=mysql_real_escape_string($_POST['Project_Responsible_for_project']);
//
//



$query1=mysql_query("insert into Project values('','$Project_name','$Project_rationale','$Project_objective', '$Project_goal', '$Project_work_procedures', '$Project_time', '$Project_place', '$Project_attendees','$Project_expected_result','$Project_evaluation', '$Project_budgets', '$Project_Responsible_for_project')");
//echo "insert into addd values('','$name','$age')";
if($query1)  
{  // alert();
   
   

    header("location: project_information.php");
}
}
?>
          <center>
     <fieldset style="width:900px;">
            <h1>ระบบจัดการโครงการแผนงบประมาณประจำปี </h1>
<form method="post" action="">
<label> ชื่อโครงการ: </label> <input type="text" name="Project_name"><br>
<label>หลักการและเหตุผล:</label> <input type="text" name="Project_rationale"><br>
<label>วัตถุประสงค์ :</label> <input type="text" name="Project_objective"><br>
<label>เป้าหมาย :</label><input type="text" name="Project_goal"><br>
<label>ขั้นตอนการทำงาน :</label><input type="text" name="Project_work_procedures"><br>
<label>เวลา : </label><input type="text" name="Project_time"><br>
<label>สถานที่  :</label><input type="text" name="Project_place"><br>
<label>ผู้เข้าร่วมโครงการ :</label><input type="text" name="Project_attendees"><br>
<label>ผลที่คาดว่าจะได้รับ :</label><input type="text" name="Project_expected_result"><br>
<label>การประเมินผล  :</label><input type="text" name="Project_evaluation"><br>
<label>งบประมาณ   :</label><input type="text" name="Project_budgets"><br>
<label>ผู้รับผิดชอบโครงการ  :</label><input type="text" name="Project_Responsible_for_project"><br>
<br>
<input type="submit" name="save">
</form>
</fieldset>     
<script type="text/javascript">  
    alert(" Demo นพพร , ทศพร");  
</script>       </center> 
    </body>
</html>

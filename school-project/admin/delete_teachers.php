<?php
include("../includes/conn.php");
if(isset($_REQUEST['id']))
{
    $del_id =  $_REQUEST['id'];
    
    $sql_del  = "DELETE FROM peters_teachers WHERE teachers_id= '".$del_id."'";
    $run_del = mysqli_query($conn,$sql_del);
    
    if($run_del)
    {
        header("location:view_teachers.php?del=1");
    } 
}




?>
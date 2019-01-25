<?php
include('connect.php');
        $id=$_GET['uid'];        
    
        $i = mysql_query("delete from sompower where id=".$id);
        mysql_close();
        header('Location:index.php');
        //exit;
       
    ?>

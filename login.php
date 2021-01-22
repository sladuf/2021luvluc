<?php
    session_start();

    $name= $_POST['name'];
    $sex= $_POST['sex'];

   if ($name != null) {
       $_SESSION['id'] = $name;
       $_SESSION['sex'] = $sex;
       $_SESSION['total'] = 0;

       echo "<script>location.replace('check.html');</script>";
       
     }
   else {
   echo "<script language = javascript> alert(\"별명을 입력하세용!\");
           location.replace('index.html');</script>";                          
       }
?>

<?php
   class resume{
        public function view()
        {
        $name=$_POST['name'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $message=$_POST['message'];
        
        $con=new mysqli("localhost","root","","portfolio");
        $sql="insert into details values('$name','$email','$subject','$message')";

        $con->query($sql);
        $con->close();
        
          echo "<script>";
          echo "alert('submitted Successfully')";
          echo "</script>";
        // echo "submitted Successfully";
      }
    }
    $obj=new resume();

    if(isset($_POST['button'])==true){
        $obj->view();
    }
?>
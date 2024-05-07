<?php
  class regform{
    public function submit(){
    $username=$_POST['uname'];
    $email=$_POST['email'];
    $password=$_POST['pw'];
    $cpassword=$_POST['cp'];

    $con=new mysqli("localhost","root","","portfolio");
    $sql="insert into validate values('$username','$email','$password','$cpassword')";

    $con->query($sql);
    $con->close();

    echo "<script>";
    echo "alert('Data Values are Submitted')";
    echo "</script>";
    // echo "Submitted successfully";
    }

    public function delete(){
      $username=$_POST['uname'];

      $con=new mysqli("localhost","root","","portfolio");
      $sql="delete from validate where name='$username'";

      $con->query($sql);
      $con->close();

      echo "<script>";
      echo "alert('Data Values are Deleted')";
      echo "</script>";
      // echo "Deleted successfully";
    }
    
  }
  $reg=new regform();

  if(isset($_POST['sub'])==true){
      $reg->submit();
  }
  if(isset($_POST['del'])==true){
    $reg->delete();
}
?>
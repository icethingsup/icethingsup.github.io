<?php
    
        $fullname=$_POST['fullname'];
        $email=$_POST['email'];
        $subject=$_POST['subject'];
        $contactno=$_POST['contactno'];
        $message=$_POST['message'];
    
        
    $conn=new mysqli('localhost', 'root', '', "feedbacks");
    if ($conn->connect_error){
        die('Connection Failed:'.$conn->connect_error);
    }else{
        $stmt=$conn->prepare("insert into form(Full_Name, Email_Address, Subject, Contact_Number, Message)
        values (?, ?, ?,?,?)");
        $stmt->bind_param("sssis", $fullname, $email, $subject, $contactno, $message);
        $stmt->execute();
        echo "Data inserted successfully";
        $stmt->close();
        $conn->close();
    }
  
?>
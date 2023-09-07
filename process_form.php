<?php
   $servername = 'localhost'; // Replace with your database host
   $database = 'your_db_name'; // Replace with your database name
   $username = 'your_db_username'; // Replace with your database username
   $password = 'your_db_password'; // Replace with your database password
try{
    $conn=new PDO("mysql:servername=$servername;database=$database;$username,$password");
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $errors=[];
    $success=false;
    function sanitizeInput($data){
        return htmlspecialchars(stripcslashes(trim($data)));

    }
    $full_name=sanitizeInput($_POST['Full_name']);
    $phone_number=sanitizeInput($_POST['Phone_number']);
    $email=sanitizeInput($_POST['Email']);
    $subject=sanitizeInput($_POST['Subject']);
    $message=sanitizeInput($_POST['Message']);
    $ip_address=$_SERVER('REMOTE_ADDR');
    
    if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $errors[]="INVALID EMAIL";
    }
    If(empty($errors)){
        $sql="INSERT INTO contact_form_test(FullName,PhoneNumber,Email,Subject,Message,ip_address) VALUES (:full_name,:phone_number,:email,:subject,:message,:ip_adress)";
        $stmt=$conn->prepare($sql);
        $stmt->bindParam(':full_name',$full_name);
        $stmt->bindParam(':phone_number',$phone_number);
        $stmt->bindParam(':email',$email);
        $stmt->bindParam(':subject',$subject);
        $stmt->bindParam(':message',$message);
        $stmt->bindParam(':ip_address',$ip_address);
        $stmt->execute();

        $to='site@gmail.com';
        $subject="New contact form submission";
        $message="Name: $full_name\n";
        $message="Phone Number: $phone_number\n";
        $message="Email: $email\n";
        $message="Message= $message\n";
        $headers="Form: $email";
        
        mail($to,$subject,$message ,$headers);
        $success=true;
    }
}catch(PDOException $e){
    die("Error:".$e->getMessage());
}finally{
    $conn=null;
}
?>

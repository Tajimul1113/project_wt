<?php
 
 
    session_start();
 
if ( isset ( $_POST [ 'submit' ] ) ) {
 
  $name = $_POST [ 'name' ];
  $email =$_POST [ 'email' ];
  $phone =$_POST [ 'phone' ];
  $address =$_POST [ 'address' ];
  $userName =$_POST [ 'uname' ];
  $password =$_POST [ 'pword' ];
  $confirmPassword = $_POST [ 'conpword' ];
  $gender = $_POST ['gender'];
  $day    =   $_POST [ 'date'] ;
  $month  = $_POST [ 'month'];
  $year   = $_POST [ 'year' ] ;
  $dateOfBirth = $day."/".$month."/".$year;
  

 
    if ( $name == "" || $email == "" || $phone == "" || $address == "" || $userName == "" || $password == "" || $confirmPassword == "" || $gender == ""|| $day == "" || $month == "" || $year == "" ) {
  echo "Filled all the file... ";
 }
 elseif ( $password != $confirmPassword) {
  echo "Password didn't match with confirm Password ";
 }
 else{
  $employeeData = [  
                      'name'=>$name,  
                      'email'=> $email,
                      'phone'=>$phone,
                      'address'=>$address,
                      'userName'=>$userName, 
                      'password'=>$password, 
                      'gender'=> $gender,
                      'dateOfBarth'=> $dateOfBirth,
                      
 
            ];
             $employeeDataJson= json_encode( $employeeData );
             $jsonFile= fopen( "../Model/employeeData.json", "w");
              fwrite($jsonFile , $employeeDataJson);
              fclose($jsonFile);
             header('location: ../View/employeeLogin.php');
}
  
 }
 

 
?>
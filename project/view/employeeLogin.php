<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   
  <title>FundBD | Employee login</title>
   
</head>
<body>
   
  
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="" alt="" srcset=""width="200" height="80">
          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./index.php">Home</a>
            <a href="./loginType.php">Login</a>
            <a href="./regType.php">Registration</a>
            <a href="./aboutUS.php">About Us</a>
          </td>
        </tr>
      </table>
    </fieldset>
     
    <fieldset>
      <form method="post" action="../controller/employeeLoginCheck.php"> 
        <fieldset>
          <legend>Login as Employee</legend>
          
            <table align="center">
              <tr>
                  <td>User Name</td>
                  <td>:<input type="text" name="username" id="userName" onkeyup="userNameValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="userNameErorr">

                </td>
              </tr>
              <tr>
                  <td>Password </td>
                  <td>:<input type="password" name="password" id="password" onkeyup="passwordValidation()"></td>
              </tr>
              <tr>
                <td></td>
                <td id="passwordErorr">

                </td>
              </tr>
            </table>	
              <hr>
            <table align="center">
              <tr>
                <td><input type="checkbox" name="rememberMe" id="">Remember Me</td>
              </tr>
              <tr>
                <td>
                  <input type="submit" name="submit" value="Submit">
                   
                </td>
                
              </tr>
            
                
            </table>  
              
            
        </fieldset>
      </form>
    </fieldset>  
     
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>
 
    

     
</body>
</html>
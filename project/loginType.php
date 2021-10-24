<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   
  <title>FundBD | Login Type</title>
  <link rel="shortcut icon" href="../assets/icon.png">
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
      
      
        <form action="./loginTypeCheck.php" method="post">
          <fieldset>
            <legend>Login as</legend>
            <br>
            <input type="radio" name="loginType"value="Admin" checked>
            <label class="Admin">Admin</label>
            <input type="radio" name="loginType" value="Employee">
            <label class="Employee">Employee</label>
            <input type="radio" name="loginType" value="Donner">
            <label class="Donner">Donner</label>
            <input type="radio" name="loginType" value="Applicant">
            <label class="Applicant">Applicant</label>
            <br>
            <br>
            <input type="submit" name="submit" value="Go">
          
          </fieldset>
        </form>
      
        <br><br>
    </fieldset>
     
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>
  
   

</body>
</html>
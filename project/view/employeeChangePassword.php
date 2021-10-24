<!DOCTYPE html>
<html lang="en">
<head>
   
  <title>FundBD | Change Password</title>
  
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
            <a href="./employeeDashBoard.php">Dashboard</a>&nbsp;
            <a href="./employeeProfile.php">Profile</a>&nbsp;
            <a href="./notification.php">Notification</a>&nbsp;
            <a href="../logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </fieldset>
     
    <fieldset>
      
        <form method="POST" action="../controller/employeeEditPass.php">
          <fieldset >
            <legend> <b>Change Password</b></legend>
              <table>
              <tr>
                <td>Current Password <br><br></td>
                <td> :<input type="password" name="currentPass"/> 
                <br/><br> </td>
              </tr>
              <br>
            
              <tr>
                <td> New Password </td>
                <td> :<input type="password" id="newPass" name="newPass" onkeyup="validation()"/> <br/></td> 
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td id="strnth" align="center"></td>
              </tr>
              
              <tr>
                <td>Retype New Password </td>
                <td> :<input type="password" id="rePass" name="retypePass" onkeyup="match()"/> <br/></td> 
              </tr>
              <tr>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td id="matching" align="center"></td>
              </tr>
              </table>
            <hr>
            <table align="center">
              <tr>
                <td><input type="submit" name="Submit" value="Submit" ></td>
              
                <td><input type="reset" name="reset" id="reset" value="Clear"></td>
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
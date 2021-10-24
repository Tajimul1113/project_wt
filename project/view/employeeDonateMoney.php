<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   

  <title>FundBD |Crowdfunding</title>
  <link rel="shortcut icon" href="../../assets/icon.png">
</head>
<body>
   
  <form action="" >
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src="" alt="" srcset=""width="200" height="80">          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./employeedashBoard.php">Dashboard</a>&nbsp;
            <a href="./employeeProfile.php">Profile</a>&nbsp;
            <a href="./notification.php">Notification</a>&nbsp;
            <a href="../logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </fieldset>
     
    <fieldset>
    <form method="post" action="../../controller/Employee/employeeDonateMoney.php"> 
      <fieldset>
        <legend><b>Employee Donation</b></legend>
        
          <table align="center">
            <tr>
                <td>Donating Ammount </td>
                <td>:<input type="text" name="damount"></td>
            </tr>
            <tr>
                <td>Account No </td>
                <td>:<input type="text" name="accoutno"></td>
            </tr>
          </table>	
            <hr>
            <table align="center">
              
              <tr>
                <td>
                  <input type="submit" name="submit" value="Donate">
                </td>
      
                <td>
                  <input type="reset" name="reset" id="reset" value="Cancel">
                </td>
                
              </tr>
            
                
            </table>  
      </fieldset>
    </form>
  </fieldset>
  
     
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
  </form>
   
</body>
</html>
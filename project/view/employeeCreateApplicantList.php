<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   
  
  <title>FundBD |Crowdfunding</title>
   
</head>
<body>
    
  <form action="" >
    <fieldset>
      <table align="center">
        <tr>
          <td>
            <img src=" " alt="" srcset=""width="200" height="80">          </td>
          
        </tr>
      </table>
      <table align="center">
        <tr>
          <td>
            <a href="./employeeDashboard.php">Dashboard</a>&nbsp;
            <a href="./employeeProfile.php">Profile</a>&nbsp;
            <a href="./notification.php">Notification</a>&nbsp;
            <a href="../logout.php">Logout</a>
          </td>
        </tr>
      </table>
    </fieldset>
           
          <fieldset>
            <form method="post" action="../../controller/Employee/employeeCreateApplicantList.php" >
              <fieldset>
              
                  <legend><b>Employee Create Applicant List</b></legend><br>
              
                
                  <label>Name : </label>
                  <input type="text" id="name" name="name" ><br>
                  <hr><br>
          
                  <label>User Name : </label>
                  <input type="text" id="uname" name="uname" ><br>
                  <hr><br>
                  
                  <label>Email :</label>
                  <input type="text" id="email" name="email" ><br>
                  <hr><br>
              
                  
              
              <fieldset>
              
              <legend>Date Of Birth</legend>
              
              
              
              <input type="text" id="date" name="date" size="5"> /
              <input type="text" id="month" name="month" size="5"> /
              <input type="text" id="year" name="year" size="6"><i> (dd/mm/yyyy)</i>
              
              
              </fieldset>
              
                  <hr>
              
                  <input type="submit" name="submit" id="submit" value="Create">
                  
                  <input type="reset" name="reset" id="reset" value="Reset"><br><br>
              </fieldset>
              </form>
          </fieldset>
    
    <fieldset>
      <p align="center">Copyright	&#169;2021</p>
    </fieldset>
     
  </form>

</body>
</html>
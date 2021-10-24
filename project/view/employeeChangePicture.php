<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
   
  <title>FundBD | Change Picture</title>
   
</head>
<body>
  
  <form action=""  onsubmit="return v2()">
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
      
        <form method="POST" action="">
          <fieldset >
            <legend> <b>Change Profile Picture</b></legend>
              <table>
                <tr>
                  <td>
                    <input type="file" id="img" name="img" accept="image/*" >
                    &nbsp;
                  <span id="errimg" style="color:red"></span> <!--For JS error message-->
                  </td>
                  <td>
                    <input type="submit" value="Upload" name="submit">
                  </td>
                </tr>

              </table>

            
          </fieldset>
        </form>
     
        
      
       
    </fieldset>
    
    <fieldset>
      <p align="center">copyright	&#169;2021</p>
    </fieldset>

     
  </form>

<script>

function get(id)
  {
      return document.getElementById(id);
  }
  function v2()
  {
      var img = get("img").value;
     
    
      var validate = true;
      if(img=="")
      {
          validate = false;
         get("errimg").innerHTML="Please Select Picture";
          get("img").focus();
      }
      else
      {
          get("errimg").innerHTML="";
      }

      return validate;

  }


</script>


</body>
</html>
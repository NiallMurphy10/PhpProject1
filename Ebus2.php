<!-- Creating a session variable and assigning it to txtTotal -->
<?php
session_start();
$fullNameValue = "";
$PhoneNumber = "";
$totalValue2 = "";
/*
 * create a session variable for the mobile number
 */
$totalValue = $_POST['txtTotal'];
$_SESSION['txtName'] = $fullNameValue;
$_SESSION['txtPhoneNumber'] = $PhoneNumber;
$_SESSION['txtTotal'] = $totalValue2;
/*
 * allocate the mobile number session variable to a text box
 */
?>
<!DOCTYPE html>
<html>
    <head>
        <title>eBusiness 2</title>
        
        <style>
            
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
body {
    background-color: lightblue;
}

div {
  border-radius: 5px;
  background-color: lightblue;
  padding: 20px;
}

        </style>
    </head>
    
    <body>
        <div class ="form">
            <form Name="details" method="post" action="Ebusiness3.php">
                <center>
                    <table  cellspacing="10">
                        <tr>
       
                            <td><b></b></td>
                            <td><b><u>Enter in your details below:</u></b></td>
                        </tr>
                        <br>
                        <tr>
                            <td>Name:</td>
                            <td><input type="text" id="txtName" name="txtName" value="" required/></td>
                        </tr>
                        <br>
                        <tr>
                            <td>Phone Number:</td>
                            <td><input type="" id="txtPhoneNumber" name ="txtPhoneNumber" value=""  required/></td>
                        </tr>
                        <br>
                        <tr>
                            <td>PIN:</td>
                            <td><input type ="password" id="txtPassword" name="txtPassword" value="" maxlength="4"required/></td>
                            
                        </tr>
                        <tr>
                            <td><input type="hidden" id="txtTotal" name="txtTotal" value ="<?php echo $totalValue;?>"/></td>
                        </tr>
                    </table>
                </center>
               
                </div>    
           
                <center>
                <input type="submit" name="btnContinue" id="btnContinue" onClick="" value="Continue" />
                </center>
        
        </body>
</html>


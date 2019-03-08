<!DOCTYPE html> 
<html>
    <head>
    
   
    <h1><u> E-Receipt </u></h1>
   
    <style> 
        h1 { 
        color: blue }
    body { 
    background-color: whitesmoke;
    text-align: center;
    border-style: solid;
    border: 12px;
    }
     </style> 
    </head>
    <body> 
        
        <?php
session_start();
$totalValue2 = $_POST['txtTotal'];
$fullNameValue = $_POST['txtName'];
$PhoneNumber = $_POST['txtPhoneNumber'];
        
echo "The name is : ".$fullNameValue.".";
echo "<br></br>";
echo "<br></br>";
echo "the Phone number is : ".$PhoneNumber.".";
echo "<br></br>";
echo "<br></br>";
echo "The total value is : £".$totalValue2.".";
?>
        
    </body>
    
</html>
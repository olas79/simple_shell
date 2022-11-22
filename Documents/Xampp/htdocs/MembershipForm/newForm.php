<?php 

?>
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    
               <div class="header">
                    <h1>Membership Application<h1>
               </div>

               <div class="header">
                    <h6>Personal Information<h6>
               </div>

                        <form action="/action_page.php">
                          <label for="fname">First name:</label>
                          <input type="text" id="fname" name="fname" placeholder="John"> 

                          <label for="lname">Last name:</label>
                          <input type="text" id="lname" name="lname" placeholder="Martins"><br>
  
                          <label for="email">Email:</label>
                          <input type="text" id="email" name="email" placeholder="johnm@gmail.com"> 
  
                          <label for="phoneN">Phone number:</label>
                          <input type="text" id="phoneN" name="phoneH" placeholder="071 345 2349"><br>

                          <label for="address1">Address:</label>
                          <input type="text" id="address1" name="address1" >

                <div class="header">
                    <h6>Organization Information<h6>
                </div>
               
                         <label for="orgName">Organization Name:</label>
                         <input type="text" id="orgName" name="orgName" ><br>
  
                         <label for="address">Address:</label>
                         <input type="text" id="address" name="address" > 
  
                         <label for="contact">Contact Number:</label>
                         <input type="text" id="contact" name="contact"><br>
  
                         <label for="contact">Website:</label>
                         <input type="text" id="web" name="web" >
  
                         <label for="wemail">Work Email:</label>
                         <input type="text" id="wemail" name="wemail" >

                <div class="header">
                    <h6>Membership Info<h6>
                </div>
               
                        <label for="memType">Membership Type: </label>
                        <select id="memType" name="memType">
                           <option value="empty" disabled selected>Membership Type</option>
                           <option value="Once-Off">Once-Off (R350.00)</option>
                           <option value="Monthly membership">Monthly membership (R200)</option>
                        </select>

                        <label for="payment">Payment: </label>
                        <select id="payment" name="payment">
                           <option value="empty" disabled selected>Payment</option>
                           <option value="Debit/Credit">Debit/Credit</option>
                           <option value="EFT">EFT</option>
                        </select>

                <div class="header">
                    <h6>Emergency Info<h6>
                </div>

                    <form action = "" method = "POST" enctype = "multipart/form-data">
                       <h3>Upload Proof of Payment</h3>
                       <label for=" file">Upload </label>     
                       <input type = "file" name = "image" />
                    </form>

                <div class="header">
                    <h6>How Did You Hear About Us<h6>
                </div>
                
                        <label for="aboutUs">Let us know     :    </label>
                         <input type="text" id="aboutUs" name="aboutUs" ><br>

                         <input type="submit" value="Submit" style="width: 300px; margin: 0 auto;">


                      </form>

</body>
</html>
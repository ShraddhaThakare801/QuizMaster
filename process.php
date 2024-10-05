<?php
echo"Today is ".date("Y/m/d") . "<br>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up for quiz</title>
    <link href = "styleProcess.css"  rel="stylesheet" type="text/css">
    <form action = "Quiz.php" method  = "post" id="f1">
</head>
<body>
    <section>
        <header>
            <h1>
                Sign Up Here !!<br>
            </h1>
        </header>
</section>
<section>
        <main>
       
            <fieldset id="fieldset">
                
            <div class="form-container">
   
            <form>
            <label for="username">Enter Username :</label>
                        <input type="text" id="txt_username" name="Username" placeholder="Enter valid username" required>
                   
                        <label for="email">Enter Email Address :</label>
                        <input type="email" id="txt_email"name="Email" placeholder="Enter valid Email" required>
                    
                        <label for="password">Enter Password :</label>
                        <input type="password" id="password" placeholder="Enter correct password" required>
                        </div>        
       
</main>
</section>
<section>
    <center>
    <input type = "submit" value = "Sign Up" id="btn_submit">
</center>
</section>
</fieldset>
</form>
</body>
</html>


    
       
        
     

<?php
echo"Today is ".date("Y/m/d") . "<br>"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Master</title>
    <link href="indexStyle.css" rel="stylesheet" type="text/css">
<body>
<header>
<h1>Welcome To Quiz Era !!</h1>
<br><br>
<div><center>
<h3>Instructions : </h3>
</center>
</div>
</header>
<main>
<section>
   <div id="div1">
   <center>
     <ul type="square" class="ul1">
       <li>  Total 5 Questions are given<br></li>
       <li>  Attempting each question is mandatory<br></li>
       <li>  There will be no negative marking for incorrect answers.<br></li> 
       <li>  Each correct answer will earn you points.<br></li>
       <li>  Once you answer all the questions click on 'Submit' button to finish the quiz<br></li>
       <li> Result will be displayed immediately after the submission<br></li>
    </ul>
</center>
</div>
</section>
</main>
<footer>
    <section>
        <center><a href = "#">
       <input type="submit" value="Register For Quiz" id="btn">
    </center>
    </section>
</footer>
</body>
</html>

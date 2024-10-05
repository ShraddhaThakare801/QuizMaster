<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <form action="result.php" method="post">
        <link href="QuizStyle.css" rel="stylesheet" type="text/css">
</head>
<body>
    <section>
        <header>
            <h1>Questions</h1>
            <hr>
        </header>
    </section>
   
        <main>
            <section>
            <p class="Que">1. Software is defined as ___________</p>
            <br>
            <label>
                <input type="radio" name="que1" class="option" value="Q1.1" required>set of programs, documentation & configuration of data
            </label>
            <br>
            <label>
                <input type="radio" name="que1" class="option" value="Q1.2" >set of programs
            </label>
            <br>
            <label>
                <input type="radio" name="que1" class="option" value="Q1.3">documentation and configuration of data
            </label>
            <br>
            <label>
                <input type="radio" name="que1" class="option" value="Q1.4">None of the mentioned
            </label>
            <br><br>
            </section>
            
            <section>
            <p class="Que">2. What is Software Engineering?</p>
            <br>
            <label>
                <input type="radio" name="que2" class="option" value="Q2.1" required>Designing a software
            </label>
            <br>
            <label>
                <input type="radio" name="que2" class="option" value="Q2.2">Testing a software
            </label>
            <br>
            <label>
                <input type="radio" name="que2" class="option" value="Q2.3"> Application of engineering principles to the design a software
            </label>
            <br>
            <label>
                <input type="radio" name="que2" class="option" value="Q2.4">None of the above
            </label>
            <br><br>
        </section>
        <section>
            <p class="Que">3. What does SDLC stands for?</p>
            <label>
                <input type="radio" name="que3" class="option" value="Q3.1" required>System Design Life Cycle
            </label>
            <br>
            <label>
                <input type="radio" name="que3" class="option" value="Q3.2">Software Design Life Cycle
            </label>
            <br>
            <label>
                <input type="radio" name="que3" class="option" value="Q3.3"> Software Development Life Cycle
            </label>
            <br>
            <label>
                <input type="radio" name="que3" class="option" value="Q3.4">System Development Life cycle
            </label>
            <br><br>
        </section>
        <section>
            <p class="Que">4.Who is the father of Software Engineering?</p>
            <br>
            <label>
                <input type="radio" name="que4" class="option" value="Q4.1" required>Margaret Hamilton
            </label>
            <br>
            <label>
                <input type="radio" name="que4" class="option" value="Q4.2">Watts S. Humphrey
            </label>
            <br>
            <label>
                <input type="radio" name="que4" class="option" value="Q4.3">Alan Turing
            </label>
            <br>
            <label>
                <input type="radio" name="que4" class="option" value="Q4.4">Boris Beizer
            </label>
            <br><br>
        </section>
        <section>
            <p class="Que">5. CASE stands for</p>
            <label>
                <input type="radio" name="que5" class="option" value="Q5.1" required> Computer-Aided Software Engineering
            </label>
            <br>
            <label>
                <input type="radio" name="que5" class="option" value="Q5.2" > Control Aided Science and Engineering
            </label>
            <br>
            <label>
                <input type="radio" name="que5" class="option" value="Q5.3" required>  Cost Aided System Experiments
            </label>
            <br>
            <label>
                <input type="radio" name="que5" class="option" value="Q5.4" > None of the mentioned
            </label><br><br><br><br>
        </section>
        </main>
    <section>
        <center>
            <footer>
                <input type="submit" value="Submit" id = "btn_submit">
            </footer>
        </center>
    </section>
</body>
</form>
</html>
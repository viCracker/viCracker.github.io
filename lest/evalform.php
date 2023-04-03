<?php
include('connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <div class="banner">
        <div class="top">
        
            <div class="nav">
            <span>LEST</span>
            <a id="Back" href="students.html">Go Back</a>
            </div>
            <div class="modal-form" id="modal">
                <h2>Unit Evaluation</h2>
                <form action="eval.php" class="eval" method="post">
                    <strong>Answer the questions as honestly as possible</strong><br>
                    <div class="questions">
                    <span>Have you recieved the course outline yet?</span> <br>
                    <input type="radio" id="yes" name="outline_administered" value="Yes" required>
                    <label for="yes">Yes</label>
                    <input type="radio" id="no" name="outline_administered" value="no">
                    <label for="no">No</label> <br>
                    </div>
        
                    <div class="questions">
                        <span>Did the course outline have objectives?</span> <br>
                        <input type="radio" id="yes" name="outline_objectives" value="Yes" required>
                        <label for="yes">Yes</label>
                        <input type="radio" id="no" name="outline_objectives" value="no">
                        <label for="no">No</label> <br>
                    </div>
        
                    <div class="questions">
                        <span>Have You atleast Done an Assignment?</span> <br>
                        <input type="radio" id="yes" name="done_assignment" value="Yes" required >
                        <label for="yes">Yes</label>
                        <input type="radio" id="no" name="done_assignment" value="no" >
                        <label for="no">No</label> <br>
                    </div>
        
                    <div class="questions">
                        <span>Was the assignment marked in time?</span> <br>
                        <input type="radio" id="yes" name="ass_marked" value="Yes" required>
                        <label for="yes">Yes</label>
                        <input type="radio" id="no" name="ass_marked" value="no">
                        <label for="no">No</label> <br>
                    </div>
                    <br><strong>On a scale of 1-5(poor to very good)</strong>
                    <div class="questions">
                        <span>Lecturer's class attendance</span> <br>
                        <input type="radio" id="one" name="attendance" value="one" required>
                        <label for="one">1</label>
                        <input type="radio" id="two" name="attendance" value="two">
                        <label for="two">2</label>
                        <input type="radio" id="three" name="attendance" value="three">
                        <label for="three">3</label>
                        <input type="radio" id="four" name="attendance" value="four">
                        <label for="four">4</label>
                        <input type="radio" id="five" name="attendance" value="five">
                        <label for="five">5</label>
                    </div>
        
                    <div class="questions">
                        <span>Lecturer's Communication Skills eg. clarity,fluency & audibility</span> <br>
                        <input type="radio" id="one" name="comm_skills" value="one" required>
                        <label for="one">1</label>
                        <input type="radio" id="two" name="comm_skills" value="two">
                        <label for="two">2</label>
                        <input type="radio" id="three" name="comm_skills" value="three">
                        <label for="three">3</label>
                        <input type="radio" id="four" name="comm_skills" value="four">
                        <label for="four">4</label>
                        <input type="radio" id="five" name="comm_skills" value="five">
                        <label for="five">5</label>
                    </div>
        
                    <div class="questions">
                        <span>Availability for consultation</span> <br>
                        <input type="radio" id="one" name="consultation" value="one" required>
                        <label for="one">1</label>
                        <input type="radio" id="two" name="consultation" value="two">
                        <label for="two">2</label>
                        <input type="radio" id="three" name="consultation" value="three">
                        <label for="three">3</label>
                        <input type="radio" id="four" name="consultation" value="four">
                        <label for="four">4</label>
                        <input type="radio" id="five" name="consultation" value="five">
                        <label for="five">5</label>
                    </div>
        
                    <div class="questions">
                        <span>Appearance and presentability</span> <br>
                        <input type="radio" id="one" name="presentability" value="one" required>
                        <label for="one">1</label>
                        <input type="radio" id="two" name="presentability" value="two">
                        <label for="two">2</label>
                        <input type="radio" id="three" name="presentability" value="three">
                        <label for="three">3</label>
                        <input type="radio" id="four" name="presentability" value="four">
                        <label for="four">4</label>
                        <input type="radio" id="five" name="presentability" value="five">
                        <label for="five">5</label>
                    </div>
        
                    <div class="questions">
                        <span>Attitude towards the unit</span> <br>
                        <input type="radio" id="one" name="Attitude" value="one" required>
                        <label for="one">1</label>
                        <input type="radio" id="two" name="Attitude" value="two">
                        <label for="two">2</label>
                        <input type="radio" id="three" name="Attitude" value="three">
                        <label for="three">3</label>
                        <input type="radio" id="four" name="Attitude" value="four">
                        <label for="four">4</label>
                        <input type="radio" id="five" name="outline_administeredAttitude value="five">
                        <label for="five">5</label>
                    </div>
                    <div class="questions">
                        <span>Overall rating of the lecturer</span> <br>
                        <input type="radio" id="one" name="Overall" value="one" required>
                        <label for="one">1</label>
                        <input type="radio" id="two" name="Overall" value="two">
                        <label for="two">2</label>
                        <input type="radio" id="three" name="Overall" value="three">
                        <label for="three">3</label>
                        <input type="radio" id="four" name="Overall" value="four">
                        <label for="four">4</label>
                        <input type="radio" id="five" name="Overall" value="five">
                        <label for="five">5</label>
                    </div>
        
                    <input type="submit" value="Submit" id="submit">
        
        
        
                </form>
            </div>
        </div>
    </div>

   
</body>
</html>
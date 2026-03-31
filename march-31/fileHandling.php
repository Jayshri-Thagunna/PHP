<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
    Many field types:
    <br>
    Account: <input type="text" name="account" >
    <br>
    Password: <input type ="password" name="password">
    <br>
    Nick Name: <input type ="text" name="name">
    <br>
    Preferred Time:<br>
    <input type ="radio" name="time" value="AM">AM<br>
    <input type ="radio" name="time" value="PM">PM<br>

    Classes taken:<br>
    <input type ="checkbox" name="time" value="S1502">S1502- Networked Tech<br>
        <input type ="checkbox" name="time" value="S1539">S1539- App Engine<br>
            <input type ="checkbox" name="time" value="S1543">S1543- Java<br>

    Which Soda:
    <select name="soda">
        <option value="" selected disabled>Choose kar le bhai</option>
        <option value="Fanta">Fanta</option><br>
        <option value="Mirinda">Mirinda</option><br>
        <option value="Coke">Coke</option><br>
    </select>
    <br>

    Which Snack:
    <select name="soda">
        <option value="Namkeen">Namkeen</option><br>
        <option value="Gol Gappe">Gol Gappe</option><br>
        <option value="Hazmola">Hazmola</option><br>
    </select>
    <br>

    Tell us about yourself:<br>
    <textarea name="about"></textarea>
    <br>

    Which are awesome?<br>
    <select size="4">
        <option value="Python">Python</option><br>
        <option value="CSS">CSS</option><br>
        <option value="HTML">HTML</option><br>
        <option value="PHP">PHP</option><br>
 

</form>

</body>
</html>

<?php

?>
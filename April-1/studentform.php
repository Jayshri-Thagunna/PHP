<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="display: flex; justify-content: center; align-items: center;">
    <form method = "POST">
    <h2>Student Registration</h2>
    <input type=name name=name placeholder=Full Name><br><br>
    <input type=email name=email placeholder=Email><br><br>

    <div class="mb-3">
    <label for="startDate" class="form-label"></label>
    <input type="date" class="form-control" id="startDate" name="startDate">
</div>
<br>

    <select>
        <option value="" selected disabled>Select Course</option>
        <option value="CSS">CSS</option><br>
        <option value="Python">Python</option><br>
        <option value="PHP">PHP</option><br>
    </select>
    <br>
    <br>
    Gender <br>
    <input type ="radio" name="Gender" value="Male">Male
    <input type ="radio" name="Gender" value="Female">Female<br>
    <br>
    Hobbies <br>
    <input type ="checkbox" name="hobbies" value="Reading">Reading
        <input type ="checkbox" name="hobbies" value="Sports">Sports
            <input type ="checkbox" name="hobbies" value="Music">Music

    <br>
    <br>
    <textarea name="about" placeholder=Address></textarea>
    <br>
    <br>
    <input type="submit" value="Register">
</form>
</div>

</body>
</html>
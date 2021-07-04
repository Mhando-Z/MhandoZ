
    <?php
    $connection = mysqli_connect("localhost", "root", "", "user");

    if ($connection === false) {
        die("ERROR: Could not connect" .mysqli_connect_error());
    }

    $coursename = $_POST['coursename'];
    $coursecode = $_POST['coursecode'];
    $description = $_POST['description'];
    $department = $_POST['department'];
    $year = $_POST['year'];
    $semester = $_POST['semester'];
    $teacher = $_POST['teacher'];
    $grade = $_POST['grade'];

    $sql = "INSERT INTO coursereg (coursename, coursecode, description, department, year, semester, teacher, grade)
    VALUES ('$coursename', '$coursecode', '$description', '$department', '$year', '$semester', '$teacher', '$grade')";

    if(mysqli_query($connection, $sql)) {
        echo "Records inserted successfully. <br>";
    } else {
        echo "ERROR: Could not execute entry" .mysqli_error($connection);
    }

    mysqli_close($connection);
?>

<?php
    $username = $_POST['username'];
    $userEmail = $_POST['userEmail'];
    $userPass = $_POST['userPass'];
    $userSalary = $_POST['userSalary'];
    $userStartDate = $_POST['userStartDate'];
    $userGender = $_POST['userGender'];
    $jobTitle = $_POST['JobTitle'];
    $userSkills = isset($_POST['userSkills']) ? implode(', ', $_POST['userSkills']) : '';
    $userMsg = $_POST['userMsg'];

    echo "Username: " . $username . "<br>";
    echo "Email: " . $userEmail . "<br>";
    echo "Password: " . $userPass . "<br>";
    echo "Salary: " . $userSalary . "<br>";
    echo "Start Date: " . $userStartDate . "<br>";
    echo "Gender: " . $userGender . "<br>";
    echo "Job Title: " . $jobTitle . "<br>";
    echo "Skills: " . $userSkills . "<br>";
    echo "Message: " . $userMsg . "<br>";
?>
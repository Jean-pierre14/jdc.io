<?php

    $connection = mysqli_connect("localhost", "root", "", "bisimwa_db") or die("Database is down");

    $errors = [];
    $output = "";

    if(isset($_POST['action'])){

        if($_POST['action'] === 'postJournal') {

            $jour = mysqli_real_escape_string($con, trim(htmlentities($_POST['jour'])));
            $cours = mysqli_real_escape_string($con, trim(htmlentities($_POST['cours'])));
            $lecon = mysqli_real_escape_string($con, trim(htmlentities($_POST['lecon'])));

            if(empty($jour) || empty($cours) || empty($lecon)){
                array_push($errors, "Empty fields");
                $output = "Error";
            }
            
            if(count($errors) === 0){
                $sql = mysqli_query($con, "INSERT INTO journal(cours, lecon) VALUES('$cours', '$lecon')");
                if($sql){$output = "success";}else{$output = 'error';}
            }

        }

    }
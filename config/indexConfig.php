<?php

    $con = mysqli_connect("localhost", "root", "", "bisimwa_db") or die("Database is down");

    $errors = [];
    $output = "";

    if(isset($_POST['action'])){

        if($_POST['action'] === 'myFormOne'){

            $jour = mysqli_real_escape_string($con, trim(htmlentities($_POST['jour'])));
            $date = mysqli_real_escape_string($con, trim(htmlentities($_POST['date'])));
            $enseignant = mysqli_real_escape_string($con, trim(htmlentities($_POST['teacher'])));

            if(empty($jour) || empty($date) || empty($enseignant)){
                array_push($errors, "Empty fields");
                $output = "Error";
            }
            
            if(count($errors) === 0){
                $sql = mysqli_query($con, "INSERT INTO semaine_tb(jour, date, Enseignant) VALUES('$jour', '$date', '$enseignant')");
                
                if($sql){
                    $output = "success";
                }else{
                    $output = 'error';
                }

            }

            print $output;
        }

    }
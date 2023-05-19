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

        if($_POST['action'] === 'myFormTwo'){
            
            $cours = mysqli_real_escape_string($con, htmlentities(trim($_POST['cours'])));
            $lecon = mysqli_real_escape_string($con, htmlentities(trim($_POST['lecon'])));
            $semaine_id = mysqli_real_escape_string($con, htmlentities(trim($_POST['semaine_id'])));
            $heure = mysqli_real_escape_string($con, htmlentities(trim($_POST['heure'])));
            $communiquer = mysqli_real_escape_string($con, htmlentities(trim($_POST['communiquer'])));

            if(empty($cours) || empty($lecon) || empty($heure)){
                $output = "Les champs sont vide";
            }else{
                
                $sql = mysqli_query($con, "INSERT INTO lecon_tb(cours, lecon, semaine_id) VALUES('$cours', '$lecon', $semaine_id)");

                if($sql){$output = 'success';}else{$output= 'error esql';}
            }
            print $output;
        }

        if($_POST['action'] === 'resultsData'){
            print "Data";
        }

    }
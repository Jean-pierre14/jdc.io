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

        if($_POST['action'] === 'ResultsFilter'){
            $selectData = mysqli_real_escape_string($con, htmlentities(trim($_POST['semaine_id'])));

            $SQL = mysqli_query($con, "SELECT * FROM lecon_tb WHERE created_at LIKE '%$selectData%' GROUP BY jour");

            if($SQL) {
                $output .= '
                <div class="print weekend">
                    <div class="header">
                        <div class="col">
                            <p>
                                <strong>Classe: </strong>
                                <span>P6 </span>
                            </p>
                            <p>
                                <strong>Titulaire: </strong>
                                <span>Bisimwa </span>
                            </p>
                            <p>
                                <strong>Semaine: </strong>
                                <span>24 au 27 avril 2023 </span>
                            </p>
                            <p>
                                <strong>Fait a Gisenyi le </strong>
                                <span>05-05-2023 </span>
                            </p>
                        </div>
                        <div class="col flex align-items-center">
                            <div>
                                <h2>Isoko - La Source</h2>
                                <small>Annee scolaire: 2022 - 2023</small>
                            </div>
                            <div class="logoSchool">
                                <img src="https://www.ecoleisoko.com/wp-content/uploads/2017/08/Logo.jpg" alt="Logo" />
                            </div>
                        </div>
                    </div>
                    <div class="rows">
                ';
                while($row = mysqli_fetch_array($SQL)){
                    $output .= '
                    <div class="col">
                    <h3>Lundi</h3>
                    <table>
                        <thead>
                            <th>Heures</th>
                            <th>Cours</th>
                            <th>Lecons</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <small>9h-9h50</small>
                                </td>
                                <td><small> Francais </small></td>
                                <td>Conjugaison: Les verbes du deuxieme groupe</td>
                            </tr>
                            <tr>
                                <td>
                                    <small>9h-9h50</small>
                                </td>
                                <td><small> Francais </small></td>
                                <td>Conjugaison: Les verbes du deuxieme groupe</td>
                            </tr>
                            <tr>
                                <td>
                                    <small>9h-9h50</small>
                                </td>
                                <td><small> Francais </small></td>
                                <td>Conjugaison: Les verbes du deuxieme groupe</td>
                            </tr>
                            <tr>
                                <td>
                                    <small>9h-9h50</small>
                                </td>
                                <td><small> Francais </small></td>
                                <td>Conjugaison: Les verbes du deuxieme groupe</td>
                            </tr>
                        </tbody>
                    </table>
                        ';
                        if($row['communiquer'] != ''){
                            $output .= $row['communiquer'];
                        }
                        $output .= '
                    </div>
                    ';
                }
                $output .= '
                        </div>
                    </div>
                </div>
                ';
            }else{
                $output = 'error sql';
            }
            print $output;
        }

    }
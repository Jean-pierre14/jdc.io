<?php
    require_once "./indexConfig.php";

    $sql = mysqli_query($con, "SELECT * FROM semaine_tb");

    if($sql){
        
        $output .= '
        <label for="semaine">Semain</label>
        <select name="semaine_id" id="semaine" class="form-control">
            <option value="">-- Selection --</option>';
        
        while($row = mysqli_fetch_array($sql)){
            $output .= '<option value="'.$row['semaine_id'].'">'.$row['date'].'</option>';
        }
        
        $output .= '</select>';
    
    }else{
        $output = "Vous n'avez pas des donnees";
    }

    print $output;
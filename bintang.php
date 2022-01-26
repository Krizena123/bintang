<?php 
    $bil = $_POST["bil"];

    include "index.php";

    for($i=$bil; $i>0; $i--){
        for($j=1; $j<=$i; $j++){
            echo " &nbsp";
        }
        for($k=$bil; $k>=$i; $k--){
            echo"*";
        }
        echo"<br>";
	}
?>
<?php
    for($colum = 1; $colum <= 7; $colum++)
    echo nl2br("\t $colum");
    for($fila = 2; $fila <= 7; $fila++){
        echo nl2br("\n $fila");
        for($colum = 2; $colum <= 7; $colum++){
            $resul = $colum;
            if($colum === 0){
                $resul =$fila;
            }
            if($colum >= 1){
                $resul = $fila * $colum;
            }
            echo nl2br("\t $resul");
        }    
    }
    echo nl2br("\n");
    echo nl2br("\n");
        
?>

<?php
    for($colum = 1; $colum <= 7; $colum++){
        echo nl2br("\t $colum");
    }
    for($fila = 2; $fila <= 7; $fila++){
        echo nl2br("\n $fila");
        for($colum = 2; $colum <= 7; $colum++){
            $resul = $colum * $fila;
            
            echo nl2br("\t $resul");
        }    
    }
?>
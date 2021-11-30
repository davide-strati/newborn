<?php 



    // Recupera le immagini della cartella photo>grid
    $imagesDir = 'images/photo/grid';
    $images = array_diff(scandir($imagesDir, 1), array('.', '..'));
    // Array multidimensionale: serve per generare array da tre immagini, corrispondenti ai blocchi                                           
    $imagesArrays = array_chunk($images, 3);
    $blockNum = 1;  // Definisce il blocco per il relativo layout
    $slideTo = 1; // Usato in data-bs-slide-to
    $class = '';
    // Generazione della griglia
    foreach($imagesArrays as $photoBlock) {                            
        if($blockNum % 2 != 0) {
            for ($i = 0; $i < count($photoBlock); $i++) {                  
                if ($i != 1) {
                    $class = "small";
                } else {
                    $class = "big";
                }
                echo '
                <div class="grid-item ' . $class . '">
                    <img src="images/photo/grid/' . $photoBlock[$i] . '" data-bs-toggle="modal" data-bs-target="#modalPortfolio" data-bs-slide-to="' . $slideTo . '" class="img-fluid" alt="">
                </div>'; 
                $slideTo = $slideTo + 1;
            }                               
        } else {
            for ($i = 0; $i < count($photoBlock); $i++) {
                if ($i != 0) {
                    $class = "small";
                } else {
                    $class = "big";
                } 
                echo '
                <div class="grid-item ' . $class . '">
                    <img src="images/photo/grid/' . $photoBlock[$i] . '" data-bs-toggle="modal" data-bs-target="#modalPortfolio" data-bs-slide-to="' . $slideTo . '" class="img-fluid" alt="">
                </div>'; 
                $slideTo = $slideTo + 1;
            }
        }
        $blockNum = $blockNum + 1;
    };                        
?>
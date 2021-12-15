<?php 

    // Recupera le immagini della cartella photo>grid
    function getDirImages($directory) {
        $images = array_diff(scandir($directory), array('.', '..', 'thumbnails'));
        return $images;
    }

    // Recupera la descrizione dai metadati della foto
    function getDescription($pix) {
        $fp = fopen($pix, 'rb');
        // Read the exif headers
        $headers = exif_read_data($fp);
        // Print the headers
        if (!empty($headers['ImageDescription'])){
            $desc = $headers['ImageDescription'];
        } else {
            $desc = "Foto di Barbara Lei";
        }
        return $desc;        
    }

    // Crea la lista delle thumb del portfolio
    function createGrid($dir, $tipologia) {
        $photos = getDirImages($dir);
        $slide = 0;
        foreach($photos as $image) {
            $imagePath = $dir.'/'.$image;
            $altText = getDescription($imagePath);
            echo '<div class="grid-item"><img src="' . $imagePath . '" alt="' . $altText . '" data-bs-target="#carousel' . $tipologia . '"
            data-bs-slide-to="' . $slide . '" class="img-fluid img-' . $slide . '"></div>';
            $slide++;
        }
    }

    // Crea la lista delle immagini del carousel nel galleria modale
    function createModalGallery($dir) {
        $photos = getDirImages($dir);
        $i = 0;
        foreach($photos as $image) {
            if ($i == 0) {
                $class = 'active';
            } else {
                $class = '';
            }
            $imagePath = $dir.'/'.$image;
            $altText = getDescription($imagePath);
            echo 
            '<div class="carousel-item ' . $class .'">
                <img data-src="' . $imagePath . '" alt="' . $altText . '" class="d-block lazy img-fluid">
            </div>';
            $i++;
        }
    }
?>
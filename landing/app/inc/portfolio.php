    <?php $modale = '#modal' . $tipologia; ?>
    <div class="grid container" data-bs-toggle="modal" data-bs-target="<?php echo $modale; ?>">
        <div class="grid-sizer"></div>
        <div class="gutter-sizer"></div>        
        <?php 
            echo createGrid($dir, $tipologia); ?>
    </div>

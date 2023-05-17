<?php


include __DIR__.'/Database/db.php';

include './Views/header.php';


?>

<h1>Cibo</h1>
<div class="d-flex gap-3 flex-wrap">
<?php foreach ($products['foods'] as $item) { ?>
        <div class="card mb-5" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $item->img ?>" alt="">
            <div class="card-body">
                <h5 class="card-title text-center pb-4 fw-bold"><?php echo "$item->name" ?></h5>
                <p class="card-text fw-bold">Prezzo: <?php echo "$item->price" ?></p>
                <p class="card-text fw-bold">Voto: <?php echo "$item->vote" ?> </p>
                <p class="card-text fw-bold">Tipo di alimento: <?php echo "$item->type" ?> </p>
                <p class="card-text fw-bold">Calorie Tot.: <?php echo "$item->calories" ?> </p>
                <p class="card-text fw-bold">Peso prodotto: <?php echo "$item->weight" ?> </p>  
            </div>
        </div>
    <?php } ?>
</div>

<h1>Giocattoli</h1>
<div class="d-flex gap-3 flex-wrap">
<?php foreach ($products['toy'] as $item) { ?>
        <div class="card mb-5" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $item->img ?>" alt="">
            <div class="card-body">
                <h5 class="card-title text-center pb-4 fw-bold"><?php echo "$item->name" ?></h5>
                <p class="card-text fw-bold">Prezzo: <?php echo "$item->price" ?></p>
                <p class="card-text fw-bold">Voto: <?php echo "$item->vote" ?> </p>
                <p class="card-text fw-bold">Dimensioni: <?php echo "$item->dims" ?> </p>
                <p class="card-text fw-bold">Suono: <?php echo "$item->sound" ?> </p>  
            </div>
        </div>
    <?php } ?>
</div>

<h1>Cucce</h1>
<div class="d-flex gap-3 flex-wrap">
<?php foreach ($products['petsbed'] as $item) { ?>
        <div class="card mb-5" style="width: 18rem;">
            <img class="card-img-top" src="<?php echo $item->img ?>" alt="">
            <div class="card-body">
                <h5 class="card-title text-center pb-4 fw-bold"><?php echo "$item->name" ?></h5>
                <p class="card-text fw-bold">Prezz: <?php echo "$item->price" ?></p>
                <p class="card-text fw-bold">Vote: <?php echo "$item->vote" ?> </p>
                <p class="card-text fw-bold">Lunghezza: <?php echo "$item->lenght" ?> </p>
                <p class="card-text fw-bold">larghezza: <?php echo "$item->width" ?> </p>  
                <p class="card-text fw-bold">Materiale: <?php echo "$item->material" ?> </p>  
            </div>
        </div>
    <?php } ?>
</div>





<?php

include './Views/footer.php';

?>






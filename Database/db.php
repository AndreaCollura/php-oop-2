<?php


include __DIR__.'/../Models/Toy.php';

include __DIR__.'/../Models/Food.php';

include __DIR__.'/../Models/PetsBed.php';


$cat = new Category('cat');
$dog = new Category('dog');



$products = [


'foods'=> [

    new Food('Forza10 Maintenance Crocchette per cani', 37.99, 'https://shop-cdn-m.mediazs.com/bilder/kg/kg/gratis/kg/forza/maintenance/crocchette/per/cani/5/800/293700_1kg_gratis_forza10_puppy_junior_fisch_12_5kg_hs_01_7_5.jpg', 543, $dog, 'secco', 3424.0, 11 ),
    new Food('Rocco Classic 6 x 400 g Alimento umido per cani', 8.99, 'https://shop-cdn-m.mediazs.com/bilder/rocco/classic/x/g/alimento/umido/per/cani/8/800/28021_pla_megapack_rocc_classic_rindpur_400g_hs_01_8.jpg', 153, $dog, 'umido', 3424.0, 11.5  ),
    new Food("Rosie's Farm Senior 12 x 400 g Alimento umido per gatti", 31.99, 'https://shop-cdn-m.mediazs.com/bilder/rosies/farm/senior/x/g/alimento/umido/per/gatti/1/800/314899_pla_rosie_sfarm_adult_salmonchicken_400g_1.jpg', 75, $cat, 'umido', 4535.0, 6.6  ),
    new Food('Feringa Adult Sterilised Pollame', 16.99, 'https://shop-cdn-m.mediazs.com/bilder/feringa/adult/sterilised/pollame/2/800/565892_pla_feringa_trofu_sterilised_400g_2.jpg', 453, $cat, 'secco', 2235.0, 8  ),
    
    
    
],


'toy'=>[
    new Toy('Gioco per cani Pollo in lattice', 4.99, 'https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/pollo/in/lattice/2/800/60576_pla_hundespielzeug_spiel_huhn_mit_squeaker_h_2.jpg', 75, $dog, 23 , 'SI'  ),
    new Toy('KONG Classic', 7.49, 'https://shop-cdn-m.mediazs.com/bilder/kong/classic/5/800/1_kong_5.jpg', 342, $dog, 4 , 'NO'  ),
    new Toy('Palle matte Trixie', 4.79, 'https://shop-cdn-m.mediazs.com/bilder/palle/matte/trixie/0/300/37372_noppenbaelle_1_0.jpg', 333, $cat, 4 , 'NO'  ),
    new Toy('Set di giochi per gatti Topini & Palline', 4.99, 'https://shop-cdn-m.mediazs.com/bilder/set/di/giochi/per/gatti/topini/palline/5/800/55406_PLA_Katzenspielzeug_Set_mit_Baellen___Maeusen_FG_DSC0362_5.jpg', 2341, $cat, 3.5 , 'SI'  ),
    
    
],

'petsbed'=>[
    new PetsBed('Divano ortopedico per cani grigio', 19.99, 'https://shop-cdn-m.mediazs.com/bilder/divano/ortopedico/per/cani/grigio/7/800/icon_topseller_1_55__7.jpg', 790 , $dog, 45, 55, 'Memory Foam' ),
    new PetsBed('Cuccia per cani Spike Classic', 137.99, 'https://shop-cdn-m.mediazs.com/bilder/cuccia/per/cani/spike/classic/1/800/icon_topseller_1_56__1.jpg', 345,$dog, 60, 70, 'Legno' ),
    new PetsBed('Letto morbido Fluffy 2in1', 15.99, 'https://shop-cdn-m.mediazs.com/bilder/letto/morbido/fluffy/in/0/800/icon_topseller_1_2021_12_23t165846_806_0.jpg', 654,$cat, 45, 65, 'Finta pelliccia di agnello' ),
    new PetsBed('Nicchia per gatti', 11.99, 'https://shop-cdn-m.mediazs.com/bilder/nicchia/per/gatti/6/800/450535_katzenzelt_dsc0419_6.jpg', 234, $cat, 60, 60, 'Plastica' ),
    
    
    
],


];



    


/*  var_dump($products['foods']);  */

?>


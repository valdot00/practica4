
<?php

  $registros = array(
    0=> array(
       "id"=> "1",
       "titulo"=> "Koyomi",
       "contenido"=> "Araragi",
       "autor"=> " Monogatari"
    ),

    1=> array(
       "id"=> "2",
       "titulo"=> "Hitagi",
       "contenido"=> "Senjogahara",
       "autor"=> "monogatari"
    ),

    2=> array(
       "id"=> "3",
       "titulo"=> "Mayoi",
       "contenido"=> "Hachikuji",
       "autor"=> "monogatari"
    ),
   
    3=> array(
       "id"=> "4",
       "titulo"=> "Suruga",
       "contenido"=> "Kanbaru",
       "autor"=> "monogatari"
    ),

    4=> array(
       "id"=> "5",
       "titulo"=> "Nadeko ",
       "contenido"=> "Sengoku",
       "autor"=> "monogatari"
      )
    );

  
?>


<?php foreach($registros as $registro){ ?>
  <div>
     <h1> <?php echo $registro["titulo"]; ?> </h1>
   <p>
      <?php echo $registro["contenido"]; ?> 
   </p>
      
   <div>
     <?php echo $registro["autor"]; ?>

  </div>
 </div>



 <?php } ?>
    
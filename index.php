<?php 

include_once __DIR__ . '/database/db.php';

$ForrestGump->setClassifica();
$Inception->setClassifica();
$Avatar->setClassifica();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Movies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body class="bg-body-secondary">

<div class="container">

    <h1 class="text-center pt-4">Movies</h1>
    <ul class="d-flex flex-wrap justify-content-center">
        <?php 
            foreach($arrayMovies as $elem){
        ?>
                <li class="px-4 py-3 shadow rounded-4">
                    <h3 class="pb-3 text-center"> <?php echo $elem->titolo ?> </h3>
                    <p> <strong>Anno: </strong> <?php echo $elem->anno ?> </p>
                    <p> <strong>Lingua originale: </strong> <?php echo $elem->lingua ?> </p>
                    <p> <strong>Attore protagonista: </strong> <?php echo $elem->protagonista ?> </p>
                    <p> <strong>Regista: </strong> <?php echo $elem->regista ?> </p>
                    <p> <strong>Generi: </strong> <?php echo $elem->generi->genere ?> </p>
                    <?php 
                        if($elem->classifica != null){
                            echo '<p class="top10 pt-2">' . $elem->classifica . '</p>';
                        }
                    ?>
                </li>
        <?php  
            }
        ?> 
        
    </ul>

</div>
  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>
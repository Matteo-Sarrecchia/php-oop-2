<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prodotti per animali</title>

    <?php 
    require_once("./db.php");
    ?>

    <style>

        body{
            background-color: lightblue;
        }

        .container{
            border: 1px solid black;
            border-radius: 20px;
            padding: 20px;
            width: 80%;
            margin: 0 auto;
            text-align: center;
            display: flex;
            background-color: blue;
        }

        h1{
            color: red;
            font-size: 50px;
        }

        #img-row{
            border: 1px solid black;
            border-radius: 20px;
            width: 250px;
            height: 250px;
            margin: auto;
            background-color: white;
        }

        img{
            max-width: 100%;
            border-radius: 20px;
            display: block;
        }

        div{
            margin: 10px 0;
            font-size: 20px;
        }

        #prodotto-gioco, #prodotto-cibo{
            border: 1px solid black;
            border-radius: 20px;
            margin: 30px;
            width: 50%;
            background-color: lightblue;
        }

    </style>

</head>
<body>

<div class="container">

    <div id="prodotto-cibo">
        <h1>
            <?php echo $productCibo -> getTitolo(); ?>
        </h1>

        <div id="img-row">
            <img src="<?php echo $productCibo -> getImmagine(); ?>" alt="">
        </div>

        <div>
            <?php echo $productCibo -> getDescrizione(); ?>
        </div>

        <div>
            <span>
                Ingredienti:
            </span>
            <?php echo $productCibo -> getIngredienti(); ?>
        </div>

        <div>
            <?php echo $productCibo -> getMarca(); ?>
        </div>

        <div>
            <?php echo $productCibo -> getPrezzo(); ?> €
        </div>

        <div>
            <?php echo $productCibo -> getCategoria() -> getNome(); ?>
        </div>

        <div>
            <?php echo $productCibo -> getPeso(); ?> KG
        </div>

    </div>

    <div id="prodotto-gioco">
        <h1>
            <?php echo $productGioco -> getTitolo(); ?>
        </h1>

        <div id="img-row">
            <img src="<?php echo $productGioco -> getImmagine(); ?>" alt="">
        </div>

        <div>
            <?php echo $productGioco -> getDescrizione(); ?>
        </div>

        <div>
            <?php echo $productGioco -> getPrezzo(); ?> €
        </div>

        <div>
            <?php echo $productGioco -> getMateriale(); ?>
        </div>
        
        <div>
            <?php echo $productGioco -> getColore(); ?>
        </div> 
        
        <div>
            <?php echo $productGioco -> getCategoria() -> getNome(); ?>
        </div>

        <div>
            <?php echo $productGioco -> getWeight(); 
            // catch(Exception $e) { echo "Error: " . $e -> getMessage();}
            ?> KG
        </div>
    </div>
</div>

</body>
</html>
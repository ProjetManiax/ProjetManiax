<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='../JQuery/jquery-3.1.1.js'></script>
    <script src='../js/myFunctions.js'></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/creationDeal.css">
    <script>
    $(document).ready(function() 
            {      
                $("img[name='photoUser']").click
                (function(){
                        getOffres($(this).attr('value'));
                        getDemandes($(this).attr('value'));
                        getNom($(this).attr('value'));
                    });
            }
        );
    </script>
</head>
<body>
    <div class="container">
    <div class="row align-items-center">
    <?php foreach($lesUsers as $unUser){
         ?><br>
        <div class='card col-md-2 bg-warning' style="width: auto; height: 8rem;" align="center">     
            <img name="photoUser" class="imgResize" value="<?php echo $unUser->idUser ?>" src="<?php echo $unUser->photoUser ?>" alt="">
            <p class="card-text"><b><?php echo $unUser->nomUser ?></b></p>
        </div>
        <?php } ?>
    </div>
    </div>
    
</body>
</html>



    
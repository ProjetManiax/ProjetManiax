<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Accueil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src='../jQuery/jquery-3.1.1.js'></script>
    <script src='../js/myFunctions.js'></script>
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styleAccueil.css">
    <script>
    $(document).ready(function() 
            {   
                 
                $("img[name='offre']").click
                (function(){
                        offreValues($(this).attr('value'));
                    });

                $("img[name='demande']").click
                (function(){
                        demandeValues($(this).attr('value'));
                    });

                $("button[name='deal']").click
                (function(){
                        dealValues($(this).attr('value'));
                    });

                $("div[name='mycard']").each(function( i ) {
                    var alt = $(this).attr("alt");
                    if ( alt == 1 ) {
                        $(this).attr("class", "card text-white bg-danger mb-3 ")
                    }
                });
                
            }
        );
    </script>
</head>
<body>
    <header class="container-fluid header">
		<div class="container">
		    <p class="logo"><img class="imgResize" src="<?php echo $photoUser ?>" alt="" >&nbsp;&nbsp;<?php echo $nomUser ?></p>
		    <nav class="menu">
			<a href="#"> Accueil </a>
			<a href="#retOffres"> Offres </a>
			<a href="#retDemandes"> Demandes </a>
			<a href="#retDeals"> Deals </a>
			<a href="user_logout"> Deconnexion </a>
		</nav>
        </div>
	</header>
    <section class="container-fluid about">
        <div class="container">
            <article> 
            <div id="retOffres">
                <h1>Mes Offres <button title="Créer une nouvelle offre" type="button" class="btn btn-outline-primary" onclick="window.location.href='adOffre_view', '_blank'">+</button></h1>
            </div><br>
            <p>Voici la liste de ce que je propose</p>
    <div id="divOffres" class="row align-items-center">    
        <?php foreach($lesOffres as $uneOffre){ ?> <br>
            <div class='col-md-4'>
            <div class="card" style="width: auto; height: auto; ">
                <div class="card-header">
                    <h5><?php echo $uneOffre->nomService?>
                    <img title="Modifier l'offre" name='offre' value='<?php echo $uneOffre->idOffre ?>' align=right class="imgResize" src="../images/Edit.ico"></h5>
                </div>
                <div class="card-body">
                    <h6 class="card-subtitle mb-2 text-muted"><?php echo $uneOffre->dateOffre?></h6>
                    <p class="card-text"><?php echo $uneOffre->descriptionOffre?></p>
                </div>
            </div><br>  
            </div>
        <?php } ?>
    </div>
    </article>

    <article>
        <br><br>
        <div id="retDemandes">
        <h1>Mes Demandes <button title="Créer une nouvelle demande" type="button" class="btn btn-outline-primary" onclick="window.location.href='adDemande_view', '_blank'">+</button></h1>
        </div>
        <br>
        <p>Voici ce dont j'ai besoin</p>
        <div id="divDemandes" class="row align-items-center">    
            <?php foreach($lesDemandes as $uneDemande){
                ?><br>
                <div class='col-md-4'>
                <div class="card" style="width: auto; height: auto;">
                    <div class="card-header">
                    <h5><?php echo $uneDemande->nomService?>
                    <img title="Modifier la demande" name='demande' value='<?php echo $uneDemande->idDemande ?>' align=right class="imgResize" src="../images/Edit.ico" ></h5>
                    </div>
                <div class="card-body">
                <h6 class="card-subtitle mb-2 text-muted"><?php echo $uneDemande->dateDemande?></h6>
                <p class="card-text"><?php echo $uneDemande->descriptionDemande?></p>
                </div>
                </div><br>
                </div>
            <?php } ?>
            
            </div>
    </article>
 
    <article>
        <br><br>
        <div id="retDeals">
        <h1>Mes Deals <button title="Rechercher un deal" type="button" class="btn btn-outline-primary" onclick="window.location.href='newdeal_view', '_blank'">+</button></h1>
        </div>
        <br>
        <p>Voici la liste de ce que j'ai échangé</p>
        <br>
        <div id="divMesDeals" class="row align-items-center">
        <?php foreach($lesDeals as $unDeal){
                echo var_dump($unDeal) ;
            
            }
                 ?>
        </div>
    </article>        
        </div>
        </div>
    </section>
    
</body>
</html>
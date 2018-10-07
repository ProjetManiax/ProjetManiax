<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Ajout d'une demande</title><br><br><br><br>
</head>
<body>
<div class=col-sm>
<div class='col-md-6'>
<form role="form" method="post" action="<?php echo base_url('user/register_user'); ?>">
    <fieldset>
        <div class="form-group">
        <label>NUMERO DE LA DEMANDE</label>
            <input class="form-control" name="idOffre" type="text" disabled>
        </div>

        <div class="form-group">
        <label>DESCRIPTION DE LA DEMANDE</label>
            <input class="form-control"  name="descriptionOffre" type="text" value="" required minlength="10" autofocus>
        </div>

        <div class="form-group">
        <label>DATE DE LA DEMANDE</label>
            <input class="form-control" placeholder="Mot de passe" name="mdp" type="date" value="" required>
        </div><br><br>

        <input class="btn btn-lg btn-success btn-block" type="submit" value="Valider" name="register" ><br>

    </fieldset>
</form>
<a href="home"><button class="btn btn-lg btn-primary btn-block" href="home" value="Home" name="home" >Home</button></a>
</div>
</div>
</body>
</html>
<style>
.enligne
{
display: inline;
}
</style><?php 
    echo "<div align=center><h2 class='enligne' align='center'>Les demandes de <p class='enligne' name='nomUser'></p></h2></div><br>";
    foreach($sesDemandes as $uneDemande){
            ?><br>
                <div class="card container-fluid" style="width: auto; height: auto; ">
                    <div class="row">
                        <div class='col-md-2'>
                            <img class="imgResize w-125" src="<?php echo $uneDemande->photoService ?>" alt="" >
                        </div>
                        <div class='col-md-10 px-3'>
                        <div class="card-block px-3">
                        <h6 class="card-title"><?php echo $uneDemande->nomService ?></h6>
                        <p class="card-text"><?php echo $uneDemande->descriptionDemande ?><br>
                        <?php echo $uneDemande->dateDemande ?></p>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
<?php } ?>
<br>
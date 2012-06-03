<?php  require_once('includes/header.php'); 
      
?>        
<div id="amarra-center-left">

    <div class="center">

        <div class="blocos" id="deixar-recados">
            <h1><?php echo $user_nome . ' ' . $user_sobrenome ?>
                <span>
                    <?php                      require_once('classes/DB.class.php');
                    if ($idDaSessao <> $idExtrangeiro) {
                        $e_meu_amigo = DB::getConn()->prepare('SELECT * FROM `amizade` WHERE (de=? AND para=?) OR (para=? AND de=?) LIMIT 1');
                        $e_meu_amigo->execute(array($idDaSessao, $idExtrangeiro, $idDaSessao, $idExtrangeiro));

                        if ($e_meu_amigo->rowCount() == 0) {
                            echo '<a href="php/amizade.php?ac=convite&de=' . $idDaSessao . '&para=' . $idExtrangeiro . '">adicionar amigo</a>';
                        } else {
                            $asstatusamizade = $e_meu_amigo->fetch(PDO::FETCH_ASSOC);
                            if ($asstatusamizade['status'] == 0) {
                                echo '<a href="php/amizade.php?ac=remover&id=' . $asstatusamizade['id'] . '&de=' . $idDaSessao . '&para=' . $idExtrangeiro . '">cancelar pedido</a>';
                            } else {
                                echo '<a href="php/amizade.php?ac=remover&id=' . $asstatusamizade['id'] . '&de=' . $idDaSessao . '&para=' . $idExtrangeiro . '">remover amigo</a>';
                            }
                        }
                    }
                    ?>

                </span></h1>


        </div><!--blocos-->

        <div class="blocos" id="pagina">
            <h2>perfil</h2>

            <?php
            
            if (isset($_GET['perfil']) AND $_GET['perfil'] == 'UPLOAD') {
                ?>
                <form name="upload-foto-perfil" enctype="multipart/form-data" method="post" action="php/crop.php">
                    <input type="file" name="foto-perfil" />
                    <input type="submit" value="recortar" />
                    <input type="hidden" name="imgantiga" value="<?php echo $user_imagem ?>" />
                    <input type="hidden" name="upload" value="perfil" />
                    <input type="hidden" name="uid" value="<?php echo $idDaSessao ?>"/>
                </form>
                <?php
            }
            ?>

        </div><!--blocos-->

    </div><!--center-->

    <div class="right">

        <<div class="blocos" id="publicidade">
            <iframe width="300" height="250" src="http://www.youtube.com/embed/mx2ZOdKSd90" frameborder="0" allowfullscreen></iframe>
        </div><!--blocos-->

        <?php  require_once('includes/amigos.php'); ?>

    </div><!--right-->


</div><!--amarra-center-left-->

<?php  require_once('includes/footer.php'); ?>
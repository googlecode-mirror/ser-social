<?php include('includes/header.php'); ?>        
<div id="amarra-center-left">

    <div class="center">

        <div class="blocos" id="pagina">
            <h2><?php echo ($idDaSessao <> $idExtrangeiro) ? 'Recados de ' . $user_fullname : 'Meus recados'; ?></h2>
            <?php include('includes/form_recados.php'); ?>
        </div><!--blocos-->

    </div><!--center-->

    <div class="right">

        <?php include('includes/amigos.php'); ?>

    </div><!--right-->


</div><!--amarra-center-left-->

<?php include('includes/footer.php'); ?>
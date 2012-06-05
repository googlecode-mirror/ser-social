<?php
include('classes/DB.class.php');
include('classes/Login.class.php');

$objLogin = new Login;

if (!$objLogin->logado()) {
    include('login.php');
    exit();
}


if (isset($_GET['sair'])) {
    $objLogin->sair();
    header('Location: ./');
}

$idExtrangeiro = (isset($_GET['uid'])) ? (int) $_GET['uid'] : $_SESSION['sersocial_uid'];
$idDaSessao = $_SESSION['sersocial_uid'];

//Verifica de o id existe
$idExists = DB::getConn()->prepare('SELECT `id` FROM `usuarios` WHERE `id`=?');
$idExists->execute(array($idExtrangeiro));
if ($idExists->rowCount() == 0) {

    header('Location: ./');
}
$dados = $objLogin->getDados($idExtrangeiro);

if (is_null($dados)) {
    header('Location: ./');
    exit();
} else {
    extract($dados, EXTR_PREFIX_ALL, 'user');
}

function user_img($img) {
    return ($img <> '' AND file_exists('uploads/usuarios/' . $img)) ? $img : 'default.png';
}
 
$user_imagem = user_img($user_imagem);
//$user_fullname = $user_nome . ' ' . $user_sobrenome;
?>

<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <title>Ser Social - Home</title>
        <link rel="stylesheet" media="screen" href="estilos/template.css" type="text/css" />
        <script type="text/javascript" src="js/jquery.js"></script>
    </head>

    <body>
        <?php
        if (isset($_GET['perfil']) AND $_GET['perfil'] == 'CROP'):
            include('php/foto-perfil.php');
        endif;
        ?>

        <div id="topo">
            <div class="cAlign">
                <span><?php echo $_SESSION['sersocial_usuario'] ?> | <a href="#">configura&ccedil;&ocirc;es</a> | <a href="?sair=true">sair</a></span>
            </div><!--calign-->
        </div><!--topo-->

        <div class="cAlign">
            <div id="header">

                <div class="left">

                </div><!--left-->

                <div class="center">
                    <ul>
                        <li><a href="./" class="ativo">inicio</a></li>
                        <li><a href="perfil.php">perfil</a></li>
                        <li><a href="recados.php">recados</a></li>
                        <li><a href="videos.php">v&iacute;deos</a></li>
                        <li><a href="depoimentos.php">depoimentos</a></li>
                    </ul> 
                </div><!--left-->

                <div class="right">
                    <span>pesquisa</span>
                    <form name="pesquisa-all" action="busca.php" method="get">
                        <input type="text" name="s" /><input type="submit" value="buscar" />
                    </form>
                </div><!--left-->

            </div><!--header-->

            <div id="content">

                <div class="left">

                    <div class="blocos" id="foto-perfil">
                        <a href="#"><img src="uploads/usuarios/<?php echo $user_imagem; ?>" alt="<?php echo $user_nome ?>" title="<?php echo $user_nome ?>" /></a>
                        <?php if ($idDaSessao == $idExtrangeiro): ?>
                            <a href="perfil.php?perfil=UPLOAD" id="alterar-foto">alterar foto</a>
                        <?php endif; ?>
                    </div><!--blocos-->

                    <div class="blocos" id="menu-lateral">
                        <ul>
                            <li><a href="perfil.php?uid=<?php echo $idExtrangeiro ?>" class="perfil">perfil</a></li>
                            <li><a href="recados.php?uid=<?php echo $idExtrangeiro ?>" class="recados">recados <span>(126)</span></a></li>
                            <li><a href="albuns.php?uid=<?php echo $idExtrangeiro ?>" class="fotos">fotos <span>(48)</span></a></li>
                            <li><a href="depoimentos.php?uid=<?php echo $idExtrangeiro ?>" class="depoimentos">depoimentos <span>(12)</span></a></li>
                            <li><a href="videos.php?uid=<?php echo $idExtrangeiro ?>" class="videos">v&iacute;deos <span>(36)</span></a></li>
                        </ul>
                    </div><!--blocos-->

                </div><!--left-->
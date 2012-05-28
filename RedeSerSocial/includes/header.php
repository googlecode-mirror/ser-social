<?php
include('classes/DB.class.php');
include('classes/Login.class.php');

$objLogin = new Login;

if(!$objLogin->logado()){
	include('login.php');
	exit();
}

if(true==$_GET['sair']){
	$objLogin->sair();
	header('Location: ./');
}

$idExtrangeiro = (isset($_GET['uid'])) ? $_GET['uid'] : $_SESSION['sersocial_uid'];
$idDaSessao = $_SESSION['sersocial_uid'];

$dados = $objLogin->getDados($idExtrangeiro);

if(is_null($dados)){
	header('Location: ./');
	exit();
}else{
	extract($dados,EXTR_PREFIX_ALL,'user'); 
}

$user_imagem = (file_exists('/uploads/usuarios/'.$user_imagem)) ? $user_imagem : 'default.png';

?>

<!DOCTYPE HTML>
<html lang="pt-br">
<head>
<meta charset="utf-8" />
<title>Ser Social - Home</title>
<link rel="stylesheet" media="screen" href="estilos/template.css" type="text/css" />
</head>

<body>

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
                <li><a href="./" class="ativo">In&iacute;cio</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="recados.php">Recados</a></li>
                <li><a href="videos.php">V&iacute;deos</a></li>
                <li><a href="depoimentos.php">Depoimentos</a></li>
            </ul> 
        </div><!--left-->
        
        <div class="right">
        	<span>Pesquisar</span>
            <form name="pesquisa-all" action="" method="get">
            	<input type="text" name="s" /><input type="submit" value="buscar" />
            </form>
        </div><!--left-->
    
    </div><!--header-->
    
    <div id="content">

		<div class="left">
        	
            <div class="blocos" id="foto-perfil">
            	<a href="#"><img src="uploads/usuarios/<?php echo $user_imagem; ?>" alt="<?php echo $user_nome ?>" title="<?php echo $user_nome ?>" /></a>
                <a href="#" id="alterar-foto">Alterar foto</a>
            </div><!--blocos-->
            
            <div class="blocos" id="menu-lateral">
            	<ul>
                	<li><a href="perfil.php?uid=<?php echo $idExtrangeiro ?>" class="perfil">Perfil</a></li>
                	<li><a href="recados.php?uid=<?php echo $idExtrangeiro ?>" class="recados">Recados <span>(126)</span></a></li>
                	<li><a href="albuns.php?uid=<?php echo $idExtrangeiro ?>" class="fotos">Fotos <span>(48)</span></a></li>
                    <li><a href="depoimentos.php?uid=<?php echo $idExtrangeiro ?>" class="depoimentos">Depoimentos <span>(12)</span></a></li>
                    <li><a href="videos.php?uid=<?php echo $idExtrangeiro ?>" class="videos">V&iacute;deos <span>(36)</span></a></li>
                </ul>
            </div><!--blocos-->
            
        </div><!--left-->
<?php 
	include 'funcoes.php';
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
	<link rel="stylesheet" type="text/css" href="extra_libs/bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="extra_libs/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/cards.css">
	<link rel="stylesheet" type="text/css" href="extra_libs/Semantic/dist/semantic.css">


</head>
<body>


<!-- Sidebar -->
<div class="ui inverted labeled sidelef left inline vertical sidebar menu">
  
      <h4 class="ui avaHead header center inverted teal aligned down ">
        <div class="ui ">
           <img class="imgAv" src="../img/Penguins.jpg"></img>
        </div>
        <p class="username">Nome</p>
      </h4>
 
      <a class="item" href="<?=linkMenu('homecard')?>">
        <i class="dashboard icon"></i>
        Início
      </a>
      <a class="item" href="<?=linkMenu('contascard')?>">
        <i class="university icon"></i>
        Contas
      </a>
      <a class="item" href="<?=linkMenu('receitascard')?>">
        <i class="add icon"></i>
        Receitas
      </a>
      <a class="item" href="<?=linkMenu('despesascard')?>">
        <i class="minus icon"></i>
        Despesas
      </a>
      <a class="item" href="<?=linkMenu('orcamentoscard')?>">
        <i class="tasks icon"></i>
        Orçamentos
      </a>
      <a class="item" href="<?=linkMenu('configuracoescard')?>">
        <i class="setting icon"></i>
        Configurações
      </a>
</div><!-- Sidebar fim-->
<div class="pusher">
<div class="container">

		


			    <header class="row">
		        <div class="col-lg-6">
		          
		        
		         <div class="ui top fixed inverted labeled large menu fixtopmenu">
		            <a class="item triggerSide">
		              <strong>
		                <i class="content icon"></i>
		                 <span class="negTeal"> Menu </span>
		              </strong>
		            </a>
		            <a class="right aligned item">
		              <i class="sign out icon"></i>
		              Logout
		            </a>
		         
		          </div>
		     
		</header>
		
		<!--top menu finish-->


<main><!--Marcaçao main -->
	
 <?php


/** Verifica se a variavel get de pagina foi setada*/
    if(!isset($_GET['page'])){
      include('homecard.php');
    }else{
      if(isset($_GET['page'])){
        $_GET['page'] = addslashes($_GET['page']);

        if(file_exists($_GET['page'].'.php') && true === paginasPermitidas())
          include($_GET['page'].'.php');
        else
          include('404.php');

      }//fim if isset page
    
    }//fim primeiro else

     ?>

	
</main>

</div><!--container-->
</div><!--pusher-->

<footer class="rodape">
	<small>© Copyright 2015, Fabricio Silva Carvalhal </small>
</footer>
 <script src="extra_libs/jQuery/jquery-2.1.4.min.js"></script> 
  <script src="extra_libs/Chart.js/Chart.js"></script>
	<script src="extra_libs/Semantic/dist/semantic.min.js" type="text/javascript" charset="utf-8" async defer></script>
	<script src="js/graficohome.js" type="text/javascript" charset="utf-8" async defer></script>
	<script type="text/javascript">
		$('.triggerSide').click(function(){


		$('.left.sidebar')
		  .sidebar('setting', 'transition', 'overlay')
		  .sidebar('show')
		;
		});

	</script>
</body>
</html>
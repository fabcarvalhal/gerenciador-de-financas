<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>Gerenciador de Finanças Pessoal</title>
	<link rel="stylesheet" type="text/css" href="extra_libs/Semantic/dist/semantic.min.css">
  <link rel="stylesheet" type="text/css" href="css/styles.css">	
 
</head>
<body>

<!-- Sidebar -->
<div class="ui inverted labeled sidelef left inline vertical sidebar menu">
  
      <h4 class="ui avaHead header center inverted teal aligned down ">
        <div class="ui ">
           <img class="imgAv" src="../img/Penguins.jpg"></img>
        </div>
        <p>Nome</p>
      </h4>
 
      <a class="item">
        <i class="dashboard icon"></i>
        Início
      </a>
      <a class="item">
        <i class="university icon"></i>
        Contas
      </a>
      <a class="item">
        <i class="add icon"></i>
        Receitas
      </a>
      <a class="item">
        <i class="minus icon"></i>
        Despesas
      </a>
      <a class="item">
        <i class="tasks icon"></i>
        Orçamentos
      </a>
      <a class="item">
        <i class="setting icon"></i>
        Configurações
      </a>
</div>
<!-- Sidebar fim-->


<!--Conteudo da pagina-->
<div class="ui pusher">
  <section class="ui page  grid">
     


    <!--top menu inicio-->
    <header class="row">
        <div class="sixteen wide column">
          
        
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

<!--Page content main inicio-->
<main class="row">
    

    <?php


/** Verifica se a variavel get de pagina foi setada*/
    if(!isset($_GET['page'])){
      include('home.php');
    }else{
      if(isset($_GET['page'])){
        $_GET['page'] = addslashes($_GET['page']);

        if(file_exists($_GET['page'].'.php'))
          include($_GET['page'].'.php');
        else
          include('404.php');

      }//fim if isset page
    
    }//fim primeiro else

     ?>
</main>
<!--Page content main finish-->
   </section> 
      </div>
</div>
<!--Fim conteudo da pagina-->


<!-- JS -->
<!-- jQuery for semantic js-->
 <script src="extra_libs/jQuery/jquery-2.1.4.min.js"></script>
 <script src="extra_libs/Semantic/dist/semantic.min.js"></script>
 <script src="extra_libs/Chart.js/Chart.js"></script>
 <script src="js/allJS.js"></script> 
</body>
</html>
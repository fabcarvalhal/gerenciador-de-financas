<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title></title>
	<link rel="stylesheet" type="text/css" href="../extra_libs/Semantic/dist/semantic.min.css">
	<link rel="stylesheet" type="text/css" href="css/styles.css">
</head>
<body>
<main class="ui page stackable grid child">

<section class="row">
	<article class="ui eight wide centered column">

			
					
		<form action="" method="POST" accept-charset="utf-8">
				
		
			<div class="ui fluid form segment">
				<h2 class="ui icon header">
				  <i class="settings icon"></i>
				  <div class="content">
				    Gerenciador de Finanças
				    <div class="sub header">Gerencie suas finanças pessoais com simples cliques em uma página web.</div>
				  </div>
				</h2>
				
					 <!-- <div class="two fields"> -->

					    <div class="required field">
					      
					       <?php
					       $usrClass = 'block'; 
					      	//if(isset($errorUser)):
					       ?>
					        <div class="ui inverted red pointing qlqr below label" display='<?=$userClass?>' >
						    	 Login inválido
						    </div>
						<?php //endif; ?>
						<label>Login</label>
					      <div class="ui corner labeled input">
					        <input type="text" placeholder="Login" required >
					        <div class="ui corner label teal">
							    <i class="user icon black"></i>
							  </div>
					      	
					      </div>
					     
					    </div>
					    <div class="required field">
					       <?php
					        $pasrClass = 'block';  
					      	//if(isset($errorPass)):
					      		
					       ?>
					        <div class="ui inverted red pointing qlqr below label " display='<?=$pasrClass?>'>
						    	 Senha Inválida
						    </div>
						<?php //endif; ?>
					      <label>Senha</label>
					      <div class="ui  corner labeled input">
					        <input type="password" placeholder="******" required>
					        <div class="ui corner label teal">
							    <i class="lock icon black "></i>
							</div>
					      </div>

					    </div>
					  <!-- </div> -->
					 
				<input type="submit" name="login-btn" value="Entrar" class="ui teal fluid button" >
				
		    </div>
		
		</form>	
	</article>
</section>

</main>

<!-- jQuery for semantic js-->
 <script src="extra_libs/jQuery/jquery-2.1.4.min.js"></script>
 <script src="extra_libs/Semantic/dist/semantic.min.js"></script>
</body>
</html>
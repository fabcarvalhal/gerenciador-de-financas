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

			
					
		<form name="logform" id="logform"  accept-charset="utf-8">
				
		
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
					      
					  	<div class="displayresp" id="displayresplog">
					        <div class="ui inverted red pointing qlqr below label ivldlog"  >
						    	 
						    </div>
						</div>
						<label>Login</label>
					      <div class="ui corner labeled input">
					        <input type="text" placeholder="Login" name="login" id="log-ipt">
					        <div class="ui corner label teal" id="cornerlog">
							    <i class="user icon black"></i>
							  </div>
					      	
					      </div>
					     
					    </div>
					    <div class="required field">
					     
					    <div class="displayresp" id="displayresppass">  
					        <div class="ui inverted red pointing qlqr below label ivldpass" display="none">
						    	 
						    </div>
						</div>

					      <label>Senha</label>
					      <div class="ui  corner labeled input">
					        <input type="password" placeholder="******" name="senha"  id="pass_ipt">
					        <div class="ui corner label teal" id="cornerpass">
							    <i class="lock icon black "></i>
							</div>
					      </div>

					    </div>
					  <!-- </div> -->
					 
				<button class="ui teal fluid button" id="btn-login" disabled>Login</button>
				
		    </div>
		
		</form>	
	</article>
</section>

</main>

<!-- jQuery for semantic js-->
 <script src="extra_libs/jQuery/jquery-2.1.4.min.js"></script>
 <script src="extra_libs/Semantic/dist/semantic.min.js"></script>
 <script src="js/allJS.js" type="text/javascript" charset="utf-8" async defer></script>
 <script type="text/javascript">
	var inputs = $('input');

	// Chama a função de verificação quando as entradas forem modificadas
	// Usei o 'keyup', mas 'change' ou 'keydown' são também eventos úteis aqui
	inputs.on('keyup',function(){

	  verifinputs(inputs);

	});
 </script>
</body>
</html>
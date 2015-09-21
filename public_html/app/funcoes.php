<?php 

/**
 * [linkMenu gera o link no menu lateral]
 * @param  [string] $nomePagina  [nome da pagina desejada]
 * @return [boolean]             
 */
function linkMenu($nomePagina){
  if(isset($_GET['page']) && $_GET['page'] != $nomePagina){
  	 	echo "?page=".$nomePagina;
  
   }else{
   		echo '#';

   }

}//linkmenu

function paginasPermitidas(){
	$permitidas = array('cards','homecard','despesascard','contascard','addcontacard');
	if(!isset($_GET['allow'])){
		if(!isset($_GET['page'])){
			$pagina = 'homecard';
		}else{
			$pagina = $_GET['page'];
		}
			
		if(true === in_array($pagina,$permitidas)){
			return true;
		}else{
			return false;
		}

	}else{
		return true;
	}
}
?>
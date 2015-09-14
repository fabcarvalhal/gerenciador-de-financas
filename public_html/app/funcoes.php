<?php 

/**
 * [linkMenu gera o link no menu lateral]
 * @param  [string] $nomePagina  [nome da pagina desejada]
 * @return [escreve]             [não retorna nada, apenas escreve]
 */
function linkMenu($nomePagina){
  if(isset($_GET['page']) && $_GET['page'] != $nomePagina){
  	 	echo "?page=".$nomePagina;
  
   }else{
   		echo '#';

   }

}//linkmenu

function paginasPermitidas(){
	// $paginas = array('cards','homecard','despesascard','contascard');

	// if(true === in_array($_GET['page'],$paginas)){
	// 	return true;
	// }else{
	// 	return false;
	// }
	ob_start();
	include 'despesascard.php';
	$pagina = ob_get_contents();
	ob_end_clean();
	if(isset($token) && $token == '123'){
		return true;
	}else{
		return false;
	}
}
?>
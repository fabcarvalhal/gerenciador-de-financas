<!-- Inicio visao geral -->

<article class="ui 	sixteen wide centered column box">

<h3 class="ui top attached header topat">
<i class="table icon"></i>
	<div class="content">
	Visão geral - {mes atual}

	
	</div>
	
</h3>
<div class="ui attached segment">


	

<div class="ui selection list listViGeral ">
  <a class="item">
   <div class="ui right floated inverted teal label">R$ 100</div>
    <i class="dollar icon teal"></i>
    <div class="content">
      <div class="header">Contas <br>
      <small>Saldo acumulado</small>
        
    </div>
      
    </div>
  </a>
  <a class="item">
   <div class="ui right floated inverted red label">R$ 100</div>
    <i class="minus icon red"></i>
    <div class="content">
      <div class="header">Despesas <br>
    </div>
      
    </div>
  </a>
<a class="item">
   <div class="ui right floated inverted green label">R$ 100</div>
    <i class="add icon green"></i>
    <div class="content">
      <div class="header">Receitas <br>
        
    </div>
      
    </div>
  </a>
 
	</div>
</div>



</article>


<!-- Fim visao geral -->



<!-- Inicio alertas -->
<article class="ui 	sixteen wide column statsGer">

	<h3 class="ui top attached header topat">
<i class="alarm icon"></i>
  <div class="content">
  Alertas

  
  </div>
  
</h3>
<div class="ui attached segment">


  

<div class="ui selection list listAlarms ">
  
  <a class="item">
   <div class="ui right floated  label">Valor alerta</div>
    <i class="pin inverted black icon "></i>
    <div class="content">
      <div class="header">Nome alerta <br>
    </div>
      
    </div>
  </a>

  <a class="item">
   <div class="ui right floated  label">Valor alerta</div>
    <i class="pin inverted black icon "></i>
    <div class="content">
      <div class="header">Nome alerta <br>
    </div>
      
    </div>
  </a>
  
  <a class="item">
   <div class="ui right floated  label">Valor alerta</div>
    <i class="pin inverted black icon "></i>
    <div class="content">
      <div class="header">Nome alerta <br>
    </div>
      
    </div>
  </a>

  </div>
</div>



</article>


<!-- Fim alertas -->



<!-- Inicio graficos -->
<article class="ui  sixteen wide column statsGer">

  <h3 class="ui top attached header topat">
<i class="bar chart icon"></i>
  <div class="content">
  Gráficos - Despesas por Categoria

  
  </div>
  
</h3>
<div class="ui attached segment">

  <div id="chart">


    <div id="canvas-holder" class="canvashold">

      <canvas id="chart-area" width="250" height="250" ></canvas>

    </div>
    
  </div>
  <div id="my-doughnut-legend"></div>
</div>



</article>


<!-- Fim graficos -->


<!-- Inicio orçamentos -->
<article class="ui  sixteen wide column statsGer">

  <h3 class="ui top attached header topat">
<i class="tasks icon"></i>
  <div class="content">
  Orçamento do Mês

  
  </div>
  
</h3>

<div class="ui attached segment">


<!-- Barra superior - Valor Gasto -->
    <div class="ui top red inverted attached progress" data-percent="60" id="v-gasto-progress">
      <div class="bar"></div>
    </div>

    <!-- Orçamento - Detalhe -->
    <div class="ui relaxed list">

        <div class="ui down item">
         <div class="ui right floated label">R$ 100</div>
   
          <div class="content">
            <div class="header">Meta
          </div>
            
          </div>
        </div>

        <div class="item">
         <div class="ui right floated inverted red label">R$ 100</div>
        
          <div class="content">
            <div class="header">Valor Gasto
          </div>
            
          </div>
        </div>  

        <div class="item">
         <div class="ui right floated inverted orange label">R$ 100</div>
        
          <div class="content">
            <div class="header">Previsto
          </div>
            
          </div>
        </div>        

    </div>

    <!-- Barra inferior - Despesa Prevista -->
    <div class="ui progress bottom attached inverted orange" data-percent="80" id="v-previsto-progress">
      
      <div class="bar"></div>
    
    </div>


</article>
<!-- Fim orçamentos -->


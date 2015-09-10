$('.triggerSide').click(function(){


$('.left.sidebar')
  .sidebar('setting', 'transition', 'overlay')
  .sidebar('show')
;
});




  $('#btn-login').on('click',function(){
   
    var login = $('#log-ipt').val();
    var passw = $('#pass_ipt').val();
    var log = 'admin';
    var sss = 'pass';
    
    $('#displayresplog').css('display', 'none');
    $('#cornerlog').removeClass('red');
    $('#cornerlog').addClass('teal');
    $('#displayresppass').css('display', 'none');
    $('#cornerpass').removeClass('red');
    $('#cornerpass').addClass('teal');
  
    
    $('#btn-login').addClass('active inline  loader');
    //$('#btn-login').html('Autenticando....');

      setTimeout(function(){ 
            $('#btn-login').removeClass('active inline loader');
            $('#btn-login').html('Login');


             if(login == ''){

                $('.ivldlog').html('Favor fornecer o login');
                $('#displayresplog').css('display', 'block');
                $('#cornerlog').removeClass('teal');
                $('#cornerlog').addClass('red');

                
              }

              if(login.length < 10){

                $('.ivldlog').html('Login precisa ter mais de 8 caracteres');
                $('#displayresplog').css('display', 'block');
                $('#cornerlog').removeClass('teal');
                $('#cornerlog').addClass('red');

                
              }

              if(passw == ''){

                $('.ivldpass').html('Favor fornecer a senha');
                $('#displayresppass').css('display', 'block');
                $('#cornerpass').removeClass('teal');
                $('#cornerpass').addClass('red');

                
              } 

              if(passw.length < 12){

                $('.ivldpass').html('Senha precisa conter 12 ou mais caracteres');
                $('#displayresppass').css('display', 'block');
                $('#cornerpass').removeClass('teal');
                $('#cornerpass').addClass('red');

                
              } 

        }, 2000);




    return false;
  });



function verifinputs(inputs) {
    var preenchidos = true;  // assumir que estão preenchidos
    inputs.each(function () {
        // verificar um a um e passar a false se algum falhar
        // no lugar do if pode-se usar alguma função de validação, regex ou outros
        if (!this.value) {
          preenchidos = false;
          // parar o loop, evitando que mais inputs sejam verificados sem necessidade
          return false;
        }
    });
    // Habilite, ou não, o <button>, dependendo da variável:
    $('button').prop('disabled', !preenchidos); // 
}


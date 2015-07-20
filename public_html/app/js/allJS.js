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

    $('#btn-login').addClass('active inline loader');
    $('#btn-login').html('Autenticando....');
      if(login == ''){

        $('.ivldlog').html('Favor fornecer o login');
        $('#displayresplog').css('display', 'block');
        
      }
      if(passw == ''){

        $('.ivldpass').html('Favor fornecer a senha');
        $('#displayresppass').css('display', 'block');

      } 

         setTimeout(function(){ 
            $('#btn-login').removeClass('active inline loader');
            $('#btn-login').html('Login');
        }, 2000);


    return false;
  });
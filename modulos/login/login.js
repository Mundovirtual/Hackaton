$('#ErrorLogin').hide();
<<<<<<< HEAD
=======

>>>>>>> 7e17a5ecc0c0ff6bd75ea96345377edb913c2a1c
jQuery(document).on('submit','#Login',function(event){
      event.preventDefault();
 
      jQuery.ajax({
          url:'modulos/login/validar.php',
          type:'POST',
          dataType:'json',

          data:$(this).serialize(),
          beforeSend:function(){
             
          }
        })
        .done(function(respuesta){
          console.log(respuesta.error);
          if (!respuesta.error) {
           location.href = "../../../Hackaton/view/index.php";                        
          } 
          if (respuesta.error) { 
            $('#ErrorLogin').slideDown('slow');
                setTimeout(function(){
                $('#ErrorLogin').slideUp('slow');
              },2000);

              
              }       
          
        })
        .fail(function(resp){
                
              })
        .always(function(){
           
      });
});

$("#change_phrase").click(function(){
  //AJAX//
  $.ajax({
    url:DOMINIO+'ajax.php?mode=inicio',
    type:'POST',
    dataType: 'json',
    data:"data",
    success: function(response){
    // SUCCESS
    // $("#text-frase").html("<img src='./images/svg/loading.svg'>")
    $("#text-frase").addClass("animate-right")
    $("#text-frase").html(response)
    setTimeout(function(){
      $("#text-frase").removeClass("animate-right")
    },600)
    // FIN - SUCCESS
    }
  }).fail(function(e) {
    console.log(e);
  });
  //FIN - AJAX//
})


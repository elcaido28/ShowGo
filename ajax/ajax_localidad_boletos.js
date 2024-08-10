$(buscar_localidad());

function buscar_localidad(consul){
  $.ajax({
    url: 'ajax/ajax_localidad_boletos.php',
    type: 'POST',
    dataType: 'html',
    data: {consul: consul},
  })
  .done(function(respuesta){
    $("#cont_localidad_bol").html(respuesta);

  })
  .fail(function(){
    console.log("error");

  })
}
$(document).on('change','#local_bolet', function(){
  var valr= $(this).val();
  if(valr!=""){
    buscar_localidad(valr);
  }
})

$(buscar_localidad2());

function buscar_localidad2(consul){
  $.ajax({
    url: 'ajax/ajax_localidad_boletos.php',
    type: 'POST',
    dataType: 'html',
    data: {consul: consul},
  })
  .done(function(respuesta){
    $("#cont_localidad_bol2").html(respuesta);

  })
  .fail(function(){
    console.log("error");
  })
}

$(document).on('change','#local_bolet2', function(){
  var valr= $(this).val();
  if(valr!=""){
    document.getElementById("cont_localidad_bol2").innerHTML="";
    buscar_localidad2(valr);
  }
})

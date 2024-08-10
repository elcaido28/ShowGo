// $(buscar_localidad_combo());
//
// function buscar_localidad_combo(consul){
//   $.ajax({
//     url: 'ajax/ajax_localidad_combo.php',
//     type: 'POST',
//     dataType: 'html',
//     data: {consul: consul},
//   })
//   .done(function(respuesta){
//   //$("#destino1").html(respuesta);
//   $("#destino").append(respuesta);
//   })
//   .fail(function(){
//     console.log("error");
//
//   })
// }
//
// $(document).on('change','#local_bolet', function(){
//   var valr= $(this).val();
//   if(valr!=""){
//     var sel = document.getElementById("destino");
//     var i;
//      for(i = sel.options.length - 1 ; i >= 0 ; i--){
//          sel.remove(i);
//      }
//     buscar_localidad_combo(valr);
//
//
//   }
// })

$(buscar_localidad_combo1());

function buscar_localidad_combo1(consul){
  $.ajax({
    url: 'ajax/ajax_localidad_combo.php',
    type: 'POST',
    dataType: 'html',
    data: {consul: consul},
  })
  .done(function(respuesta){
  //$("#destino1").html(respuesta);
  $("#destino1").append(respuesta);
  })
  .fail(function(){
    console.log("error");

  })
}

$(document).on('change','#local_bolet', function(){
  var valr= $(this).val();
  if(valr!=""){
    var sel = document.getElementById("destino1");
    var i;
     for(i = sel.options.length - 1 ; i >= 0 ; i--){
         sel.remove(i);
     }
    buscar_localidad_combo1(valr);


  }
})
//
//
// $(buscar_localidad_combo2());
//
// function buscar_localidad_combo2(consul){
//   $.ajax({
//     url: 'ajax/ajax_localidad_combo.php',
//     type: 'POST',
//     dataType: 'html',
//     data: {consul: consul},
//   })
//   .done(function(respuesta){
//   //$("#destino1").html(respuesta);
//   $("#destino2").append(respuesta);
//   })
//   .fail(function(){
//     console.log("error");
//
//   })
// }
//
// $(document).on('change','#local_bolet', function(){
//   var valr= $(this).val();
//   if(valr!=""){
//     var sel = document.getElementById("destino2");
//     var i;
//      for(i = sel.options.length - 1 ; i >= 0 ; i--){
//          sel.remove(i);
//      }
//     buscar_localidad_combo2(valr);
//
//
//   }
// })
//
//
// $(buscar_localidad_combo3());
//
// function buscar_localidad_combo3(consul){
//   $.ajax({
//     url: 'ajax/ajax_localidad_combo.php',
//     type: 'POST',
//     dataType: 'html',
//     data: {consul: consul},
//   })
//   .done(function(respuesta){
//   //$("#destino1").html(respuesta);
//   $("#destino3").append(respuesta);
//   })
//   .fail(function(){
//     console.log("error");
//
//   })
// }
//
// $(document).on('change','#local_bolet', function(){
//   var valr= $(this).val();
//   if(valr!=""){
//     var sel = document.getElementById("destino3");
//     var i;
//      for(i = sel.options.length - 1 ; i >= 0 ; i--){
//          sel.remove(i);
//      }
//     buscar_localidad_combo3(valr);
//
//
//   }
// })

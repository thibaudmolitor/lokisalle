$(function() {
    $( "#slider" ).slider({
      value:100,
      min: 0,
      max: 5000,
      step: 100,
      slide: function( event, ui ) {
        $( "#amount" ).val( "$" + ui.value );
      }
    });
    $( "#amount" ).val( "$" + $( "#slider" ).slider( "value" ) );
  } );
 


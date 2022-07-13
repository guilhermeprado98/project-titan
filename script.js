$(function(){
   $("#tabela input").keyup(function(){
       var index = $(this).parent().index();
       var nth = "#tabela td:nth-child("+(index+1).toString()+")";
       var valor = $(this).val().toUpperCase();
       $("#tabela tbody tr").show();
       $(nth).each(function(){
           if($(this).text().toUpperCase().indexOf(valor) < 0){
               $(this).parent().hide();
           }
       });
   });

   $("#tabela input").blur(function(){
       $(this).val("");
   });
});

$(function() {
   var options =
       {
           range: true,
           min: 0,
           max: 500,
           values: [ 50, 300 ],
           slide: function( event, ui ) {
               $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
           }
       };

       $( "#slider-range" ).slider(
           options
       );
       $( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) +
           " - $" + $( "#slider-range" ).slider( "values", 1 ) );
   });

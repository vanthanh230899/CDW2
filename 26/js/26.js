$(document).ready(function(){
  var items = document.getElementsByClassName("item");
  Array.prototype.forEach.call(items, item => {
    item.addEventListener('click',() => {
      var content = item.nextElementSibling;
      if (content.style.display === "block") {
        content.classList.remove('active');
        content.classList.add('out');
        setTimeout(() => {
          content.style.display="none";
        },400);
        item.firstChild.nextElementSibling.style.display = "inline-block";
        item.firstChild.nextElementSibling.nextElementSibling.style.display = "none";
      } else {
        content.classList.remove('out');
        content.classList.add('active');
        content.style.display="block";
       
        item.firstChild.nextElementSibling.nextElementSibling.style.display = "inline-block";
        item.firstChild.nextElementSibling.style.display = "none";
      }
    });
  });

  $( "#slider-range" ).slider({
    range: true,
    min: 0,
    max: 500000,
    values: [ 0, 500000 ],
    slide: function( event, ui ) {
      $( "#amount" ).val( "($)" + ui.values[ 0 ] + "             ($)" + ui.values[ 1 ] );
    }
  });
  $( "#amount" ).val( "($)" + $( "#slider-range" ).slider( "values", 0 ) +
    "              ($)" + $( "#slider-range" ).slider( "values", 1 ) );

    $(".element-select2").select2({
      theme: "classic",
      minimumResultsForSearch: Infinity
    });
    $("#category").select2();
});


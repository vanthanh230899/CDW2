$( function() {
    $( "#slider-range" ).slider({
      range: true,
      min: 0,
      max: 500000,
      values: [ 0, 500000 ],
      slide: function( event, ui ) {
        $( "#amount" ).val( "MIN($)" + ui.values[ 0 ] + "               MAX($)" + ui.values[ 1 ] );
      }
    });
    $( "#amount" ).val( "MIN($)" + $( "#slider-range" ).slider( "values", 0 ) +
      "                 MAX($)" + $( "#slider-range" ).slider( "values", 1 ) );
  } );

function openTab(evt,tabname){

  tabcontent = document.getElementsByClassName("tabcontent");

  var i, tabcontent, tablinks;
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }

   tablinks = document.getElementsByClassName("tablinks");

   for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }

  document.getElementById(tabname).style.display = "block";
  evt.currentTarget.className += " active";
  //default

}
$(document).ready(function(){
  document.getElementById("defaultOpen").click();
  var message = document.getElementById("massageSubject");
  message.innerText = "Tell Me More about This Property";
});

function modalTab(evt,thumbnail){
  var modal = document.getElementById("modal");
  modal.style.display = "block";
  
  var modalContent = document.getElementsByClassName("thumbnail");

  Array.prototype.forEach.call(modalContent, modal => {
    modal.style.display = "none"
  });

  document.getElementById(thumbnail).style.display = "block";

  window.onclick = function(event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  }
}

function changSubject(evt){
  var subject = evt.target.options[evt.target.options.selectedIndex].innerText;

  var message = document.getElementById("massageSubject");
  message.innerText = subject;

  var submit = document.getElementById("submitSubject");

  submit.setAttribute("value",subject);
}

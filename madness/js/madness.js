var key_combo = [];
$(document).ready(function(){
  $("#click_mad").click(function(){
    $(this).fadeOut('slow');
  });
  $(".pass_by").mouseover(function(){
    
  });
});

window.addEventListener("keydown", function(event){
  key_combo.push(event.keyCode);
});
/** might make more sense to split javascript between multiple files for each page */
//Add a window/tab closed listener. Probably to log out the user
window.onbeforeunload = function(){
  
}

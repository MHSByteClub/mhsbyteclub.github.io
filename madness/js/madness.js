var key_combo = [];
$(document).ready(function(){
  $(".easter_egg").hide();
  $("#click_mad").click(function(){
    $(this).fadeOut('slow');
  });
  $(".pass_by").mouseover(function(){
    $(".easter_egg").show();
  });
});

window.addEventListener("keydown", function(event){
  key_combo.push(event.keyCode);
});
/** might make more sense to split javascript between multiple files for each page */
//Add a window/tab closed listener. Probably to log out the user
window.onbeforeunload = function(){
  
}

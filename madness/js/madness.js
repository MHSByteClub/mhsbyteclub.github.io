$(document).ready(function(){
  var key_combo = [];
  $("#click_mad").click(function(){
    $(this).fadeOut('slow');
  });
  $(".pass_by").mouseover(function(){
    
  });
  $(".page").keydown(function(){
    key_combo.push(event.keyCode);
  });
});
/** might make more sense to split javascript between multiple files for each page */
//Add a window/tab closed listener. Probably to log out the user
window.onbeforeunload = function(){
  
}

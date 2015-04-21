$(document).ready(function(){
  init_madness();
});

function init_madness(){
  var canvas = document.getElementById("mad"),
  ctx = canvas.getContext("2d"),
  letters = [],
  phrases = ["Login", "March Madness", "Rock", "Paper", "Scissor"];
  
  for(var i = 97; i < 122; i++){
    letters.push(String.fromCharCode(i));
  }
  
  canvas.width = window.innerWidth;
  canvas.height = window.innerHeight;
  
  if(Math.floor(Math.random(0, 2)) == 1){
    use_phrases();
  }else{
    use_letters();
  }
  
  function use_phrases(){
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  }
  
  function use_letters(){
    ctx.clearRect(0, 0, canvas.width, canvas.height);
  }
}

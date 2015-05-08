import 'dart:html';

void main(){
  CanvasElement canvas = document.querySelector('#madgame');
  CanvasRenderingContext2D ctx = canvas.context2D;
  
  ctx.beginPath();
  ctx.arc(75, 75, 10, 0, Math.PI*2, true); 
  ctx.closePath();
  ctx.fill();
}

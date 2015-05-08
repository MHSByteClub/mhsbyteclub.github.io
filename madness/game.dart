import 'dart:html';

void main(){
  CanvasElement canvas = querySelector('#madgame');
  CanvasRenderingContext2D ctx = canvas.getContext("2d");

  ctx.beginPath();
  ctx.arc(75, 75, 10, 0, Math.PI*2, true); 
  ctx.closePath();
  ctx.fill();
}

import 'dart:html';

void main(){
  CanvasElement canvas = document.querySelector('#madgame');
  CanvasRenderingContext2D ctx = canvas.context2D;
  
  ctx.fillRect(0,0,300,150);
}

import 'dart:html';

void main(){
  CanvasElement canvas = querySelector("#madgame");
  new GameMain(canvas).start();
}

class GameMain{
  CanvasElement canvas;
  
  GameMain(this.canvas);
  
  start(){
    var content = canvas.context2D;
    
     context..lineWidth = 0.5
           ..fillStyle = "red";
  
    context..beginPath()
           ..arc(p.x, p.y, bodySize, 0, PI * 2, false)
           ..fill()
           ..closePath()
           ..stroke();
  }
}

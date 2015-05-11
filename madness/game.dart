import 'dart:html';

void main(){
  CanvasElement canvas = querySelector("#madgame");
  new GameMain(canvas).start();
}

class GameMain{
  CanvasElement canvas;
  GameMain(this.canvas);
  
  void start(){
    
  }
}

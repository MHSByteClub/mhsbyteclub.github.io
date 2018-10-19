function setup() {
  createCanvas(750, 100);
  var t;
}


t=0
x=760
y=50
function draw() {
  background(255)
  angleMode('degrees');
  drawDots();
  drawPac(x,50,t);
  if(x>-1000){
  	drawMessage("PROJECT SHOWCASE 10/24 @ 3:30 PM in C104",x+200,y);
  }
  drawPac(x+800,50,t);
  t+=40;
  x-=3;
  if(x<-1600){
    x=760; 
  }
}


function drawPac(x,y,t){
  noStroke();
 
  fill(255,255,255);
  rect(x+5,y-10,800,50);
  fill(230,230,0);
  arc(x,y,40,40,185+30*sin(t),5); 
  arc(x,y,40,40,345,165-30*sin(t));
}

function drawDots(){
  fill(0,0,0);
  for(var i=0; i<750; i+=25){
    rect(i,50,2,2);
  }
  
}

function drawMessage(message,x,y){
  fill(0,0,0);
 	textAlign(CENTER);
   if(x<350){
     x=350;
   }
  text(message,x+30,y+5)    
}
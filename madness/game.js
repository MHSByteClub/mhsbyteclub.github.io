var util = require("util"),
    io = require("socket.io");
    
var socket, 
    player;
    
function init(){
    player = [];
    socket = io.listen(8000);
    
    socket.configure(function() {
        socket.set("transports", ["websocket"]);
        socket.set("log level", 2);
    });
}

init();

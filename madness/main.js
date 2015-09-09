var username;
var connected = false;

var socket = io();

function log(){
    username = document.getElementById('username').value;
}

socket.on('login', function(data){
    connected = true;
    console.log("Welcome to the MHS Byte Club's March Madness site");
});

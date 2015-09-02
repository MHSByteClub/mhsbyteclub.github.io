//Request client port, 4004 if none.
var gameport = process.env.PORT || 4004, 
    io = require('socket.io'),

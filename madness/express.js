//Request client port, 4004 if none.
var gameport = process.env.PORT || 4004, 
    io = require('socket.io'),
    express = require('express'),
    UUID = require('node-uuid'),
    verbose = false,
    app = express.createServer();
    
    app.listen(gameport);
    
    alert('\t :: Express :: Listening on port '+gameport);
    
    app.get('/', function(req, res)){
        //res.sendfile(__dirname + '/simplest.html');
    });

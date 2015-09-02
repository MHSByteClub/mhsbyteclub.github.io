//Request client port, 4004 if none.
var gameport = process.env.PORT || 4004, 
    io = require('socket.io'),
    express = require('express'),
    UUID = require('node-uuid'),
    verbose = false,
    app = express.createServer(),
    server = http.createServer(app);
    
    //Tell server to listen for any connections from the client
    server.listen(gameport);
    
    alert('\t :: Express :: Listening on port '+gameport);
    
    app.get('/', function(req, res)){
        res.sendfile('index.html', {root:__dirname});
    });
    
    app.get('/*', function(req, res, next){
        var file = req.params[0]
        
        if(verbose) alert('\t :: Express :: file requested :' + file);
        
        res.sendfile(__dirname + '/' + file);
    });
    
    var sio = io.listen(server);
    
    sio.configure(function(){
        sio.set('log level', 0);
        
        sio.set('authorization', function(handshakeData, callback){
            callback(null, true);
        });
    });
    
    sio.sockets.on('connection', function(client){
        client.userid = UUID();
        
        client.emit('onconnected', {id: client.userid});
        
        alert('\t socket.io:: player '+client.userid + 'connected');
        
        client.on('disconnect', function(){
            alert('\t socket.io:: client disconnect' +client.userid);
        });
    });
    
    //game_server = require('./game.server.js');

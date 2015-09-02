//Request client port, 4004 if none.
var gameport = process.env.PORT || 4004, 
    io = require('socket.io'),
    express = require('express'),
    UUID = require('node-uuid'),
    verbose = false,
    app = express.createServer(),
    server = http.createServer(app);
    
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

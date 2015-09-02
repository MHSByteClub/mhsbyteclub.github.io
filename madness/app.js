var
        gameport        = process.env.PORT || 4004,

        io              = require('socket.io'),
        express         = require('express'),
        UUID            = require('node-uuid'),

        verbose         = false,
        http            = require('http'),
        app             = express(),
        server          = http.createServer(app);

    server.listen(gameport)

    console.log('\t :: Express :: Listening on port ' + gameport );

    app.get( '/', function( req, res ){
        console.log('trying to load %s', __dirname + '/index.html');
        res.sendfile( '/index.html' , { root:__dirname });
    });

    app.get( '/*' , function( req, res, next ) {
        var file = req.params[0];
        
        if(verbose) console.log('\t :: Express :: file requested : ' + file);

        res.sendfile( __dirname + '/' + file );

    }); 


    var sio = io.listen(server);

    sio.configure(function (){

        sio.set('log level', 0);

        sio.set('authorization', function (handshakeData, callback) {
          callback(null, true);
        });

    });
    
    game_server = require('./game.server.js');
    
    sio.sockets.on('connection', function (client) {
        client.userid = UUID();
        client.emit('onconnected', { id: client.userid } );
        game_server.findGame(client);
        console.log('\t socket.io:: player ' + client.userid + ' connected');
        client.on('message', function(m) {

            game_server.onMessage(client, m);

        });
        client.on('disconnect', function () {
            console.log('\t socket.io:: client disconnected ' + client.userid + ' ' + client.game_id);
            if(client.game && client.game.id) {
                game_server.endGame(client.game.id, client.userid);

            } 

        }); 
     
    }); 

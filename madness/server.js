var app = require('express')();
var http = require('http').Server(app);
var io = require('socket.io')(http);

app.get('*', function(req, res){
	res.sendFile(__dirname + '/index.html');
});

io.on('connection', function(socket){
	console.log('User connected');
	
	socket.emit('server_mes', {message: 'Welcome to the site'});
	
	socket.on('client_mes', function(data){
		console.log(data['message']);
	});
});

http.listen(process.env.PORT, function(){
	console.log("Server running at: "+process.env.PORT);
});



var http = require("http"),
    sio  = require("socket.io");

// create http server
var server = http.createServer().listen(process.env.PORT, process.env.IP),

// create socket server
io = sio.listen(server);

// set socket.io debugging
io.set('log level', 1);

io.sockets.on('connection', function (socket) {

  socket.emit('news', { message: 'Hello world!' });

  socket.on('my other event', function (data) {
    console.log(data.message);
  });

var express = require('express');
var app = express();

var phpExpress = require('php-express')({
 
    // assumes php is in your PATH
    binPath: 'php'
  });
app.use(express.static("public"));
app.engine('php', phpExpress.engine);
app.set("view engine", "php");
app.set("views", "./public");

var server = require("http").Server(app);
var io = require("socket.io")(server);
server.listen(3000);

app.get("/", function(req, res) {
    res.render("views/index");
})
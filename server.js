var express = require('express');
var app = express();
var fs = require("fs");
var phpExpress = require('php-express')({
 
    // assumes php is in your PATH
    binPath: 'php'
  });
app.use(express.static("public"));
app.engine('php', phpExpress.engine);
app.set("view engine", "php");
app.set("views", "./public/views/");
// routing all .php file to php-express
app.all(/.+\.php$/, phpExpress.router);

var server = require("http").Server(app);
var io = require("socket.io")(server);
server.listen(3000);

app.get("/", function(req, res) {
    res.render("index");
});

//get query parameter
app.get("/index.php", function(req, res) {
    // res.render("index.php?p=" + req.param("tagId"));
    // res.send("index.php?p=" + req.param("p"));
    res.render("index", {p: req.query.p});
})
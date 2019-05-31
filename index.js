const express = require('express');
const path = require('path');
const ejs = require('ejs');
const app = express();

// config views
app.set('view engine', 'ejs');
app.set('views',path.join(__dirname, 'views'));

// config middleware
app.use(express.urlencoded({extended: true}));
app.use(express.json());

// routes
app.use(require('./config/routes'));

//run server
var server = app.listen(3000, function () {
  var host = server.address().address;
  var port = server.address().port;

  console.log("app listening at http://%s:%s", host, port);
})
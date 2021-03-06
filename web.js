
/**
 * Node Sever Script 
 */

var express = require('express')
  , http = require('http')
  , path = require('path');

var app = express();

app.configure(function(){
  app.set('port', process.env.PORT || 3003);
  if(process.env.BASIC_AUTH_USER) {
    app.use(express.basicAuth(process.env.BASIC_AUTH_USER, process.env.BASIC_AUTH_PASS));
  }
  app.use(express.static(path.join(__dirname, 'public')));
});

app.configure('development', function(){
  app.use(express.errorHandler());
});

http.createServer(app).listen(app.get('port'), function(){
  console.log("Express server listening on port " + app.get('port'));
});

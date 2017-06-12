var http = require('http');
var mysql = require('mysql');

  var con = mysql.createConnection({
    host: "localhost",
    user: "Rahul",
    password: "Koqa313*@3",
    database: "testing"
  });

  con.connect(function(err) {
    if (err) throw err;
    console.log("Connected!");
    var sql = "INSERT INTO customers (name, address) VALUES ('Company Inc', 'Highway 37')";
    con.query(sql, function (err, result) {
      if (err) throw err;
      console.log("1 record inserted");
    });
  });


http.createServer(function (req, res) {
    res.writeHead(200, {'Content-Type': 'text/html'});
    res.end('Hello World! here i am trying to add a connection class');

}).listen(8080);

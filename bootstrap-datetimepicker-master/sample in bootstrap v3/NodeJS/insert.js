var mysql = require('mysql');

var con = mysql.createConnection({
  host: "localhost",
  user: "Rahul",
  password: "Koqa313*@3"
});

con.connect(function(err) {
  if (err) throw err;
  console.log("Connected!");
});

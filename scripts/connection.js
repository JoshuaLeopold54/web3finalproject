var mysql = require('node_modules/mysql');
var connection = mysql.createConnection({
  host     : 'localhost',
  user     : 'root',
  password : ''
});
 
connection.connect(function(err) {
  if (err) {
    console.error('error connecting: ' + err.stack);
    return;
  } else {
	console.log('Connected');
  }
 
  console.log('connected as id ' + connection.threadId);
});
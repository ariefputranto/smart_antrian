var mysql = require('mysql');

var db = mysql.createPool({
	connectionLimit : 10,
    host: "localhost",
    user: "root",
    password: "MyDamnRoot123*",
    database: "smart_antrian"
});

module.exports = db;
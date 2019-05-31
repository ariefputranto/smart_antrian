const db = require("../config/db");
const field = ['name', 'email', 'password', 'address', 'phone'];
class Users {
	list(callback) {
	    db.getConnection(function(err, connection) {
		    if (err) throw err;
		    
		    let sql = 'SELECT * FROM users';

		    connection.query(sql, function (err, result) {
		    	connection.release();
		        if (err) throw err;
		        callback(result);
		    });
		});
	}

	get(id, callback) {
		if (isNaN(id)) throw 'id must be number';

	    db.getConnection(function(err, connection) {
		    if (err) throw err;
		    
		    let sql = 'SELECT * FROM users WHERE id = ?';

		    connection.query(sql, [id], function (err, result) {
		    	connection.release();
		        if (err) throw err;
		        callback(result);
		    });
		});
	}

	create(data, callback) {
		var inserted_data = [];
		field.forEach(function(value){
			if (typeof data[value] === 'undefined') throw value+' is empty'
			inserted_data.push(data[value]);
		});

	    inserted_data.push(new Date());

	    db.getConnection(function(err, connection) {
		    if (err) throw err;
		    
		    let sql = `INSERT INTO users (name, email, password, address, phone, created_at) 
		    	VALUES (?, ?, ?, ?, ?, ?)`;

		    connection.query(sql, inserted_data, function (err, result) {
		    	connection.release();
		        if (err) throw err;
		        callback('successfully added new user');
		    });
		});
	}

	update(id, data, callback) {
		var updated_data = [];
		field.forEach(function(value){
			if (typeof data[value] === 'undefined') throw value+' is empty';
			updated_data.push(data[value]);
		});

	    updated_data.push(new Date());
	    updated_data.push(id);

	    db.getConnection(function(err, connection) {
		    if (err) throw err;
		    
		    let sql = `UPDATE users SET name =? , email =?, password =?, 
		    	address =?, phone =?, updated_at =? WHERE id = ?`;

		    connection.query(sql, updated_data, function (err, result) {
		    	connection.release();
		        if (err) throw err;
		        callback('successfully updated user');
		    });
		});
	}

	delete(id, callback) {
		if (isNaN(id)) throw 'id must be number';

	    db.getConnection(function(err, connection) {
		    if (err) throw err;
		    
		    let sql = 'DELETE FROM users WHERE id = ?';

		    connection.query(sql, [id], function (err, result) {
		    	connection.release();
		        if (err) throw err;
		        callback('successfully deleted users');
		    });
		});
	}
}

module.exports = new Users();
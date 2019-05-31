const users = require('../models/Users');
class UsersController {
	list(req, res) {
		var user_list = users.list(function(result){
		    res.send(JSON.stringify(result));
		});
	}

	get(req, res) {
		var id = req.params.id;
		var user = users.get(id, function(result){
		    res.send(JSON.stringify(result));
		});
	}

	create(req, res) {
		var data = {
			'name' : req.body.name,
			'email' : req.body.email,
			'password' : req.body.password,
			'address' : req.body.address,
			'phone' : req.body.phone,
		};
		var create_user = users.create(data, function(result){
		    res.send(JSON.stringify(result));
		});
	}

	update(req, res) {
		var id = req.params.id;
		var data = {
			'name' : req.body.name,
			'email' : req.body.email,
			'password' : req.body.password,
			'address' : req.body.address,
			'phone' : req.body.phone,
		};
		var update_user = users.update(id, data, function(result){
		    res.send(JSON.stringify(result));
		});
	}

	delete(req, res) {
		var id = req.params.id;
		var delete_user = users.delete(id, function(result){
		    res.send(JSON.stringify(result));
		});
	}
}

module.exports = new UsersController();
var express = require('express');
var router = express.Router();

// Controllers
var defaultController = require('../controllers/DefaultController');
var usersController = require('../controllers/UsersController');
 
// Routes
router.get('/fibonacci_prima/:number', defaultController.fibonacciPrime);
router.get('/is_subarray', defaultController.isSubArray);

//User routes
router.get('/users', usersController.list);
router.get('/users/:id', usersController.get);
router.post('/users', usersController.create);
router.put('/users/:id', usersController.update);
router.delete('/users/:id', usersController.delete);
 
module.exports = router;
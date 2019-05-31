class DefaultController {
	fibonacciPrime(req, res) {
		var max_value = req.params.number;
		var number_before = 0;
		var number_now = 1;
		var result = 0;
		var sum = 0;
		var isPrime = function(value) {
		    for(var i = 2; i < value; i++) {
		        if(value % i === 0) {
		            return false;
		        }
		    }
		    return value > 1;
		}
		
		if (isNaN(max_value))
			res.send('0');

		while (sum <= max_value) {
			sum = number_now + number_before;
			number_before = number_now;
			number_now = sum;

			if (isPrime(sum) && sum <= max_value)
				result += sum;
		}

	    res.send(''+result);
	}

	isSubArray(req, res) {
		var parent = [1, 2, 0, 5, 8, 1, 3];
		var child = [3, 0, 5, 1];
		var isSub = true;

		child.forEach(function(value, key){
			if (parent.indexOf(value) === -1 && isSub) {
				isSub = false;
			}
		});

		res.send(isSub);
	}
}

module.exports = new DefaultController();
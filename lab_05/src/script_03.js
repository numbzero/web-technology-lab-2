'use strict'
console.log("[exercise_03]");

function get_min_array(array)
{
	return Math.min.apply(null, array);
}

console.log("get_min_array([2, 4, -4, 10, 0, 17]) - " + get_min_array([2, 4, -4, 10, 0, 17]));
console.log();
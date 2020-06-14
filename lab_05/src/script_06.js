'use strict'

async function exercise_06()
{
	let response = await fetch("https://cat-fact.herokuapp.com/facts");
	let data = await response.json()
	console.log("[exercise_06]");
	console.log(data);
}
'use strict'

function exercise_05()
{
	console.log("[exercise_05]");
	get_data("https://cat-fact.herokuapp.com/facts")
		.then(function (data) {
			console.log(data.response);
		})
		.catch(function (error) {
			console.log(error);
		});
}

function get_data(url)
{
	var	request = new XMLHttpRequest();

	return new Promise(function (resolve, reject) {
		request.onreadystatechange = function () {
			if (request.readyState !== 4) return;
			if (request.status >= 200 && request.status < 300) {
				resolve(request);
			} else {
				reject({
					status: request.status,
					statusText: request.statusText
				});
			}
		};
		request.responseType = 'json';
		request.open('GET', url, true);
		request.send();
	});
}
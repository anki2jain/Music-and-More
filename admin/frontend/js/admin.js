window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	theme: "light2",
	title:{
		text: "Most Played Songs"
	},
	axisY: {
		title: "Number of times"
	},
	data: [{
		type: "column",
		yValueFormatString: "#,##0.## Played",
		dataPoints: [{"y":5,"label":"Dekhte Dekhte"},{"y":1,"label":"Tamma Tamma Again"},{"y":3,"label":"Dil Chori"}]	}]
});
chart.render();



animateValue("visit", 1, 834, 50);
animateValue("page", 1, 1000, 50);
animateValue("unique", 1, 532, 50);




}

function animateValue(id, start, end, duration) {
    var range = end - start;
    var current = start;
    var increment = end > start? 1 : -1;
    var stepTime = Math.abs(Math.floor(duration / range));
    var obj = document.getElementById(id);
    var timer = setInterval(function() {
        current += increment;
        obj.innerHTML = current;
        if (current == end) {
            clearInterval(timer);
        }
    }, stepTime);
}

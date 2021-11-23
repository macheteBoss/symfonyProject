var orderCounts = [];
var referralCounts = [];
$.ajax({
	type: 'POST',
	url: '/lk/getOrdersAndReferralsByMonth',
	success: function(data) {
		$.each(data['orders'], function (index, value) {
			orderCounts.push(value);
		});
		$.each(data['referrals'], function (index, value) {
			referralCounts.push(value);
		});
	}
})

function chartData(data) {
	return {
		labels : ["Январь","Февраль","Март","Апрель","Май","Июнь","Июль","Август","Сентябрь","Октябрь","Ноябрь","Декабрь"],
		datasets : [
			{
				label: "My Second dataset",
				fillColor : "rgba(48, 164, 255, 0.2)",
				strokeColor : "rgba(48, 164, 255, 1)",
				pointColor : "rgba(48, 164, 255, 1)",
				pointStrokeColor : "#fff",
				pointHighlightFill : "#fff",
				pointHighlightStroke : "rgba(48, 164, 255, 1)",
				data : data
			}
		]

	};
}
var ordersChartData = chartData(orderCounts);
var referralsChartData = chartData(referralCounts);

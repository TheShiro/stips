function sendAjax() {
	let data = {
		"user_id": "abstract-user", 
		"channels": [ { "channel_id": "0", "address": "@stipsoculus" } ], 
		"ticker": "BTC", 
		"id_alert_type": 0, 
		"id_source_project": 3, 
		
		"condition": {
			"wallet": "bigWallet", 
			"amount": $('#amount').val(), 
			"direction": $('#direction').val(), 
			"signal_id": 0, 
			"value": $('#value').val(), 
			"period": $('#period').val(), 
			"percentage": true 
		}
	}
	console.log(JSON.stringify(data))
	$.ajax({
		url: 'http://8.8.8.8',
		type: 'POST',
		contentType: "application/json; charset=utf-8",
		dataType: "json",
		data: JSON.stringify(data),
		success: (response) => {
			console.log('send')
		},
		error: (response) => {
			console.log('error')
		}
	})
}
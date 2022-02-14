<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
<!--<link rel="stylesheet" href="/resources/demos/style.css">-->
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>tinymce.init({selector:'textarea'});</script>
<script>
	function getAllInput(){
		let arr = $("[info]");
		let keys;
		let obj = {};
		for(let i=0; i<arr.length;i++){
			keys = arr[i].getAttribute("info");
			obj[keys] = arr[i].value;
		}
		console.log(obj);
		return obj;
	}
</script>
</head>
<body>

<div class="container">
	<div class="username">
		<div class="username_label">Логін<div>
		<input class="username_input" info="username" placeholder="Введіть ім'я"/>
	</div>
	<div class="password">
		<div class="password_label">Пароль<div>
		<input class="password_input" info="password" placeholder="Введіть пароль"/>
	</div>
	<button class="submit">Відправити</button>
	
</div>
<script>
	$(".submit").click(function(){
		sendData = getAllInput();
		console.log(sendData);
			$.ajax({
				url:"login_desk_upload.php",
				method:"POST",
				data:sendData,
				success: function(data) {
					console.log(data);
					if(data = "match"){
						location = "http://green.lviv.in/test/desk_main.php";
					}
				}
			})
	});
</script>
</body>
</html>
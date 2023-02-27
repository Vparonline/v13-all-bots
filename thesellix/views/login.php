<!DOCTYPE html>
<html>

<head>
	<link rel="icon" href="https://cdn.discordapp.com/attachments/1070780485673951294/1070782317905330228/tststststststtts.png" type="image/x-icon" />
	<title>Thesellix.site - Web</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
	</script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="./css/main.css">

	<script type="text/javascript">
		$(document).ready(() => {

			$("#form").submit((event) => {
				event.preventDefault();

				$.ajax({
					type: 'POST',
					url: '/login',
					data: $('#form').serialize(),
					dataType: "json",
					success: (response) => {
						$('#form')[0].reset();

						document.getElementById("check").innerHTML = response.Success;
						//ADD THIS CODE
						setTimeout(() => {
							document.getElementById("check").innerHTML = "";
						}, 3000);
						if (response.Success == "Success!") {
							document.getElementById("aa").click();
						};
					},
					error: () => {
					}
				})
			});

		});
	</script>
</head>

<body>
	<div class="col-md-4 col-md-offset-4 form-card" style="background-color: #1B2A47;">
		<div>
			<a href="/login"><img src="https://cdn.discordapp.com/attachments/1070780485673951294/1070782317905330228/tststststststtts.png" width="200px" height="200px"></a>
			<p style="color: white;">Hesabınız İle Oturum Açın!</p>
		</div>
		<br><br><br><br>
		<div class="form-group ">
			<form id="form" method="post">
				<input style="background-color: #1B2A47; border-radius: 20px; color: white;" type="text" name="email" pattern="[-!#$%&'*+\/0-9=?ก-๙A-Z^_a-z`{|}~](\.?[-!#$%&'*+\/0-9=?ก-๙A-Z^_a-z`{|}~])*@[ก-๙a-zA-Z0-9](-*\.?[ก-๙a-zA-Z0-9])*\.[ก-๙a-zA-Z](-?[ก-๙a-zA-Z0-9])+$" placeholder="Email" required="" class="form-control"><br />
				<br>
				<input style="background-color: #1B2A47; border-radius: 20px; color: white;" type="password" name="password" placeholder="Parolanız" required="" class="form-control"><br />
				<br>
				<input type="submit" value="Oturum Aç" class="btn btn-success" style="background-color: #51A6F5; border-radius: 20px;">
			</form>
		</div>
		<div class="mssg bg-danger">
			<span id="check"></span>
		</div>
		<div id="LangTable"><a href="/profile" id="aa"></a>
		</div>
		<div><span style="color: #828690;">Daha önce bir paket almadınız mı?</span><a href="https://www.thesellix.site/shop.html" style="color: orange;"> O zaman satın al!</a>
		</div>
		<br>
		</div>
	</div>
</body>

</html>

<style>
body {
	background-color: #292F52;
}

</style>

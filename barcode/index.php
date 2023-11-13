<!DOCTYPE html>
<html lang="en">

<head>
	<!-- <meta charset="UTF-8"> -->
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Barcode malala</title>
	<script type="text/javascript" src="JsBarcode"></script>
	<script src="JsBarcode.all.min.js"></script>

</head>

<body>
	<input type="text" name="txt_input" id="txt_input">
	<button type="button" id="btn_generate">Generate ng barcode malala</button>
	<br></br>
	<svg id="barcode"></svg>

	<script type="text/javascript">
		document.getElementById("btn_generate").addEventListener('click', function() {
			var text = document.getElementById("txt_input").value;

			JsBarcode("#barcode", text);

		});
	</script>

	<button type="submit" href="scanner.php">Go to scanner</button>

</body>

</html>
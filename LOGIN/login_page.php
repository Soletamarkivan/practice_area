<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="JsBarcode.all.min.js"></script>

</head>

<body>


    <input type="text" name="name" id="name">


    <button id="generate">Generate Barcode</button>
    <br>
    <svg id="barcode"></svg>

    <script type="text/javascript">
        // document.getElementById("generate").addEventListener('click', function() {
        //     var text = document.getElementById("name").value;


        //     JsBarcode("#barcode", text);

        // });
        // $("#generate").click


        var text = document.getElementById("name");
        text.addEventListener('keyup', function() {


            JsBarcode("#barcode", '16-10-GIS0.44X8IV-CE');
            // console.log(this.value);
        });
    </script>



</body>


</html>
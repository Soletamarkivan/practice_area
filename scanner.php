<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scanner malala</title>
    <script src="https://unpkg.com/html5-qrcode@2.0.9/dist/html5-qrcode.min.js"></script>
</head>

<body>
    <div id="qr-reader" style="width: 600px">
        <script>
            var lastscan = ""

            function onScanSuccess(decodedTdext, decodedResult) {
                // console.log(`Code scanned = ${decodedText}`, decodedResult);

                if (lastscan == decodedTdext) {

                } else {
                    lastscan = decodedTdext
                    console.log(decodedTdext);
                }


            }
            var html5QrcodeScanner = new Html5QrcodeScanner(
                "qr-reader", {
                    fps: 10,
                    qrbox: 250
                });
            html5QrcodeScanner.render(onScanSuccess);
        </script>
        <!-- <input type="text" id="scanner" name="scanner"><button type="button">sds</button> -->
    </div>



</body>

</html>
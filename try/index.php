<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="sender.php" method="post" enctype="multipart/form-data">
        <input type="text" placeholder="Subject" name="subject" id="subject">
        <input type="text" placeholder="Body" name="body" id="body">
        <input type="file" name="emailAttachments[]" multiple="multiple" id="emailAttachments" class="form-control">

        <button type="submit">Send</button>
    </form>

</body>

<script>
    $(document).ready(function() {
        
    })
</script>

</html>
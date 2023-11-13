<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="style.css"> -->

    <link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <!-- <script type="text/javascript" src="frontend-script.js"></script> -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <h2>AutoComplete Search In PHP MYSQL & jQuery</h2>
</head>

<body>
    <form method="post">
        <div class="autocomplete-container" style="width:300px;">
            <input type="text" id="tutorial_name" name="tutorial_name" placeholder="tutorial name">
        </div>
        <!-- <input type="submit" name="submit"> -->
    </form>

</body>

<script>
    $(function() {
        $("#tutorial_name").autocomplete({
            source: 'db_con.php'
        });
    });
</script>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <input type="text" placeholder="username" name="username" id="username">
    <input type="password" placeholder="password" name="password" id="password">

    <button type="submit" id="add" name="add" class="add">ADD</button>


</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {

        // alert("asds");

        $(document).on('click', '.add', function(e) {
            // alert("sdsds");
            e.preventDefault();

            var username = $('#username').val();
            var password = $('#password').val();

            // console.log(username, password)

            if (username && password) {
                $.ajax({
                    method: "POST",
                    url: "try_code.php",
                    data: {
                        username: username,
                        password: password

                    },
                    success: function(data) {

                    }
                });
                alert('asd');
            }

        })
    })
</script>

</html>
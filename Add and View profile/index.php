<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form class="add">
        <input type="text" placeholder="username" name="username" id="username">
        <input type="password" placeholder="password" name="password" id="password">
        <button type="submit">Add</button>
    </form>


</body>


<!-- scripts -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {

        $('form').on('submit', function(e) {
            e.preventDefault()

            var username = $('#username').val();
            var password = $('#password').val();
            s
            // console.log(password);

            if (username && password) {
                $.ajax({
                    method: 'POST',
                    url: 'code.php',
                    data: {
                        username: username,
                        password: password
                    },
                    success: function(data) {
                        $('.add')[0].reset()
                        // $('#add').modal(hide);
                    }
                });
                alert('success');
            } else {
                alert('Error');
            }

        });
    });
</script>

</html>
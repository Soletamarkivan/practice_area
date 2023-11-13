<?php
 $.ajax({
    method: 'POST',
    url: 'code_add_rteis.php',
    data: {

        user_id: user_id,
        company_id: company_id,
        department_id: department_id,
        item_code: item_code,
        borrowed: borrowed,
        stocks_id: stocks_id


    },
    success: function(data) {

        // console.log(data)


        Swal.fire({

            position: 'top-end',
            icon: 'success',
            title: 'Your work has been saved',
            showConfirmButton: false,
            timer: 1500
        })
        // $('#adduser').modal('hide');

    }
});

?>
//Update form

$(document).ready(function () {
    $('#edibtn').on('click', function (e) {
        e.preventDefault();

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var form = $("#inv-form");
        // you can't pass Jquery form it has to be javascript form object
        var formData = new FormData(form[0]);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        // console.log(formData)
        var ajaxurl = $("#inv-form").attr("action");
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            contentType: false, // this is requireded please see answers above
            processData: false,
            success: function (response) {
                if (response) {
                    // $('#preview-image').attr('src', 'http://localhost:8000/images/1679137708.png');
                    // $('#nav-img').attr('src', 'http://localhost:8000/images/1679137708.png');


                    if ($.isEmptyObject(response.error)) {
                        $('.invoicenum_err').text('');
                        $('.invoicedate_err').text('');
                        $('.duedate_err').text('');
                        $('.company_err').text('');
                        $('.billedto_err').text('');
                        $('.business_err').text('');
                        $('.adress_err').text('');
                        $('.gstin_err').text('');
                        $('.item_err').text('');
                        $('.gstrate_err').text('');
                        $('.rate_err').text('');
                        $('.amount_err').text('');
                        $('.igst_err').text('');
                        $('.total_err').text('');
                        $('.quantity_err').text('');
                        alert('Form Submitted Successfully');


                    } else {
                        printErrorMsg(response.error);
                    }
                }
                // location.reload();
            },
            error: function (response) {
                console.log(response);
            }
        });
    });

    function printErrorMsg(msg) {
        $.each(msg, function (key, value) {
            $('.' + key + '_err').text(value);
        });
    }
});


//    Update Password

$(document).ready(function () {
    $('.pass').change(function () {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var form = $("#update-password");
        // you can't pass Jquery form it has to be javascript form object
        var formData = new FormData(form[0]);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log(formData)
        var ajaxurl = $("#update-password").attr("action");
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            contentType: false, // this is requireded please see answers above
            processData: false,
            success: function (response) {
                if (response) {
                    // $('#preview-image').attr('src', 'http://localhost:8000/images/1679137708.png');
                    // $('#nav-img').attr('src', 'http://localhost:8000/images/1679137708.png');

                    alert("Password updated successfully.");
                    console.log(response.img);
                }
                // location.reload();
            },
            error: function (response) {
                console.log(response);
            }
        });
    });
});


//    Update User Name
$(document).ready(function () {
    $('.name').change(function () {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var form = $("#update-form");
        // you can't pass Jquery form it has to be javascript form object
        var formData = new FormData(form[0]);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log(formData)
        var ajaxurl = $("#update-form").attr("action");
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            contentType: false, // this is requireded please see answers above
            processData: false,
            success: function (response) {
                if (response) {
                    // $('#preview-image').attr('src', 'http://localhost:8000/images/1679137708.png');
                    // $('#nav-img').attr('src', 'http://localhost:8000/images/1679137708.png');

                    alert("Name updated successfully.");
                    // console.log(response.img);
                }
                // location.reload();
            },
            error: function (response) {
                console.log(response);
            }
        });
    });
});


//    Update Profile Photo

$(document).ready(function () {
    $('#avatar').change(function () {


        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        var form = $("#image-upload");
        // you can't pass Jquery form it has to be javascript form object
        var formData = new FormData(form[0]);
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
            }
        });
        console.log(formData)
        var ajaxurl = $("#image-upload").attr("action");
        $.ajax({
            type: 'POST',
            url: ajaxurl,
            data: formData,
            dataType: 'json',
            contentType: false, // this is requireded please see answers above
            processData: false,
            success: function (response) {
                if (response) {
                    $('#preview-image').attr('src', 'http://localhost:8000/images/' + response.img);
                    $('#nav-img').attr('src', 'http://localhost:8000/images/' + response.img);

                    // console.log(response.img);
                }
                // location.reload();
            },
            error: function (response) {
                console.log(response);
            }
        });
    });
});

$(".update").on("click", () => {
    $("#avatar").click();
});

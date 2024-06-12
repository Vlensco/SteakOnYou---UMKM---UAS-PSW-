$(document).ready(function () {
    console.log("value: " + $("#complete_name").val());
});

$("#reservation-form").on("submit", function (e) {
    e.preventDefault();

    var form = $(this);

    var name = form.find("#complete_name").val();
    var email = form.find("#email_address").val();
    var no_of_guest = form.find("#no_of_guest").val();
    var day = form.find("#day").val();
    var time = form.find("#time").val();

    if (
        name == "" ||
        email == "" ||
        no_of_guest == "" ||
        day == "" ||
        time == ""
    ) {
        swal("Oops...", "Please Fill In The Form", "error");
        form.trigger("reset");
    } else {
        $.ajax({
            type: "POST",
            url: "/reservasi",
            data: $("#reservation-form").serialize(),
            success: function (response) {
                console.log(response);
                if (response.status == true) {
                    swal(
                        "Thank You!",
                        "Your Message has been sent. Admin will respond you shortly",
                        "success"
                    );
                } else {
                    swal("Oops...", "Reservation Failed", "error");
                }
                form.trigger("reset");
            },
            error: function (data) {
                //Error Message == 'Title', 'Message body', Last one leave as it is
                swal("Oops...", "Something went wrong :(", "error");
                form.trigger("reset");
            },
        });
    }
});

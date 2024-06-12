let star = 0;
$("#star_1").click(function () {
    star = 1;
    $(this).removeClass("far").addClass("fa-solid");
    $("#star_2").removeClass("fa-solid").addClass("far");
    $("#star_3").removeClass("fa-solid").addClass("far");
    $("#star_4").removeClass("fa-solid").addClass("far");
    $("#star_5").removeClass("fa-solid").addClass("far");
});

$("#star_2").click(function () {
    star = 2;
    $(this).removeClass("far").addClass("fa-solid");
    $("#star_1").removeClass("far").addClass("fa-solid");
    $("#star_3").removeClass("fa-solid").addClass("far");
    $("#star_4").removeClass("fa-solid").addClass("far");
    $("#star_5").removeClass("fa-solid").addClass("far");
});

$("#star_3").click(function () {
    star = 3;
    $(this).removeClass("far").addClass("fa-solid");
    $("#star_1").removeClass("far").addClass("fa-solid");
    $("#star_2").removeClass("far").addClass("fa-solid");
    $("#star_4").removeClass("fa-solid").addClass("far");
    $("#star_5").removeClass("fa-solid").addClass("far");
});

$("#star_4").click(function () {
    star = 4;
    $(this).removeClass("far").addClass("fa-solid");
    $("#star_1").removeClass("far").addClass("fa-solid");
    $("#star_2").removeClass("far").addClass("fa-solid");
    $("#star_3").removeClass("far").addClass("fa-solid");
    $("#star_5").removeClass("fa-solid").addClass("far");
});

$("#star_5").click(function () {
    star = 5;
    $(this).removeClass("far").addClass("fa-solid");
    $("#star_1").removeClass("far").addClass("fa-solid");
    $("#star_2").removeClass("far").addClass("fa-solid");
    $("#star_3").removeClass("far").addClass("fa-solid");
    $("#star_4").removeClass("far").addClass("fa-solid");
});

$("#review-form").on("submit", function (e) {
    e.preventDefault();

    var form = $(this);

    var nama = form.find("#full_name").val();
    var review = form.find("#message").val();
    var bintang = star;

    if (nama == "" || review == "" || bintang == "0") {
        swal("Oops...", "Please Fill In The Form", "error");
    } else {
        let formData = new FormData();

        formData.append("full_name", nama);
        formData.append("message", review);
        formData.append("star", bintang);

        // console.log(nama);
        // console.log(review);
        // console.log(bintang);

        $.ajax({
            type: "POST",
            url: "/submitreview",
            data: formData,
            cache: false,
            contentType: false,
            processData: false,
            success: function (response) {
                console.log(response);
                if (response.status == true) {
                    swal("Success", "Thank you for your review", "success");
                } else {
                    swal("Oops...", "Reservation Failed", "error");
                }
                form.trigger("reset");
                star = 0;
                $("#star_1").removeClass("fa-solid").addClass("far");
                $("#star_2").removeClass("fa-solid").addClass("far");
                $("#star_3").removeClass("fa-solid").addClass("far");
                $("#star_4").removeClass("fa-solid").addClass("far");
                $("#star_5").removeClass("fa-solid").addClass("far");
            },
            error: function (data) {
                //Error Message == 'Title', 'Message body', Last one leave as it is
                swal("Oops...", "Something went wrong :(", "error");
                form.trigger("reset");
                star = 0;
                $("#star_1").removeClass("fa-solid").addClass("far");
                $("#star_2").removeClass("fa-solid").addClass("far");
                $("#star_3").removeClass("fa-solid").addClass("far");
                $("#star_4").removeClass("fa-solid").addClass("far");
                $("#star_5").removeClass("fa-solid").addClass("far");
            },
        });
    }
});

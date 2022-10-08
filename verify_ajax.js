$(document).ready(function () {
    $("#btn_submit").click(function () {
        var username = $("#user_name").val().trim();

        if (username != "") {
            $.ajax({
                url: 'info.php',
                type: 'post',
                data: { username: username },
                success: function (data) {
                    var msg = "";
                    if (response == 1) {
                        window.location = "info.php";
                    } else {
                        msg = "Key in username and click submit";
                    }
                    $("#message").html(msg);
                    $("#message").css("color", "green");
                }
            })
        }
    })
})

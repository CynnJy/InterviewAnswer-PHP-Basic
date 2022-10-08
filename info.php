<?php

    var msg = ""

    if (username = "abc"){
        /* Correct Name - Show Verfied msg*/
        var msg="<p style=color:green>Verfied</p>"
    }else{
        /* Wrong Name - Show Error Msg */
        msg = "<p style=color:red>Error</p>";
    }
     $("#message").html(msg);
?>
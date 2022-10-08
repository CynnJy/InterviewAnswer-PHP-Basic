<html>

<style>
    h1{ font-size: large;}
    .container{ display: block;}
    #div_login{
        width: 50%;
        display: block;
        padding: 20px;
    }
    .main-title{
        display: flex;
        align-items: center;
    }
    .box {
        flex: 50%;
        height: fit-content;
    }
    input.txtbox_name{ 
        border: none;
        border-bottom: 2px solid;
        padding: 5px;
    }
    #btn_submit{
        float: right;
        width: 100px;
        color: #fff;
        background-color: #097969;
        border: none;
        padding: 6px 10px;
        font-weight: 600;
        cursor: pointer;
        transition: ease-in-out 0.2s;
        border-radius: 2px;
    }
    #btn_submit:hover{
        background-color: #075348;
    }
</style>

<head><title>Login Form</title></head>

<body>
    <div class="container">
        <div id="div_login">
            <div class="main-title">
                <!-- Title -->
                <h1 class="box">User Name: </h1>

                    <!-- UserName TextBox -->
                    <input type="text" class="txtbox_name box" id="user_name" name="user_name" placeholder="Username"/>
                </div>

                <!-- Submit Button -->
                <div>
                    <input type="button" value="Submit" name="but_submit" id="btn_submit" />
                </div>

                <!-- Message will display after verify-->
                <div id="message"></div>
        </div>

    </div>

    <script type="text/javascript" src="verify_ajax.js"></script>
</body>
</html>

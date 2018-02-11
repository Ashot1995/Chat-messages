<html>
<head>
    <title>Chat</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-1.12.4.min.jis"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous">
    </script>
    <style>
        body {
            background: url("img/1.jpg") no-repeat;
            background-size: 100%;
        }

        #chatlogs {

            height: 200px;
            overflow-y: scroll;

        }
    </style>
</head>

<body>

<div class="container col-4 table-bordered">
    <h1 style="text-align: center ;color:green ">CHAT</h1>
    <form name="form1" class="alert-success">
        <div id="chatlogs" class="alert-info ">
            Loading <img src="img/ref.gif" alt="" height="15px" width="15px">
        </div>


        Անուն: <input type="text" name="uname" class="col-12" id="myinputbox" autofocus/><br/>
        Հաղորդագրություն: <br/>

        <textarea name="msg" rows="5" class="col-12"></textarea><br/>
        <a href="#" onclick="submitChat()" class="btn btn-success d-flex justify-content-end">ՈԻղղարկել <img
                    src="img/mes.png" height="30px"
                    width="30px" alt=""></a><br/><br/>


</div>
<script>


    function submitChat() {
        if (form1.uname.value == '' || form1.msg.value == '') {
            alert('Բոլոր դաշտերը պարտադիր են!!!');
            return;
        }
        var uname = form1.uname.value;
        var msg = form1.msg.value;
        var xmlhttp = new XMLHttpRequest();

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                document.getElementById('chatlogs').innerHTML = xmlhttp.responseText;
            }
        }
        xmlhttp.open('GET', 'insert.php?uname=' + uname + '&msg=' + msg, true);
        xmlhttp.send();
    }

    window.onload = function() {
        var input = document.getElementById("myinputbox").focus();
    }
</script>
<script src="js/bootstrap.min.jis"></script>
</body>
</html>
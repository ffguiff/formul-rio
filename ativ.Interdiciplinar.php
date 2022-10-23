<!DOCTYPE html>
<html lang = "pt-BR">
    <head>
        <meta charset = "UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel = "icon" href = 
        "https://cdn-icons-png.flaticon.com/512/6733/6733817.png"/>
        <title>Boas vindas!</title>
    </head>
    <style>
        *
        {
        max-height: 100vh;
        margin: 0;
        box-sizing:border-box;
        }
        body{
            text-align: center;
            background-image: url('src/boas-vindas.png');
        }
        button{
            color:aliceblue;
            box-shadow: 0px 3px 4px rgb(0, 0, 0);
            font-size: 20px;
            transition-duration: 0.3s;
            cursor: pointer;
            background-color: rgb(72, 207, 189);
            margin-top : 10px;
            width: 240px;
            height: 66px;
            border-radius: 100px;
            border : none;
        }
        button:hover{
            opacity: 0.7;
            width: 297px;
            height: 70px;
            transition-duration: 0.3s;
        }
        #information{
            box-shadow: 0px 3px 4px rgb(0, 0, 0);
            border-radius: 20px;
            margin-top: 10%;
            width: 300px;
            height: 250px;
            background-color: #ffff;
        }
        .container{
            display: flex;
            flex-direction: row;
            justify-content: center;
            align-items: center;
        }
    </style>
    <body>
    <button id="button" onclick ="information()">Ver dados</button>
    <div class= "container">
        <div id ="information" onclick="voltar()">
                <?php
                    $usuario = $_POST['usuario'];
                    $senha = $_POST['senha'];
                    echo '<br/>'.'<br/>'.'<br/>';
                    echo '<h1>'.'Seu usuario é: '.$usuario;
                    echo '<br/>'.'<br/>';
                    echo 'Sua senha é: '.$senha;
                ?>
        </div>
        </div>
        <script>
            document.getElementById("information").style.visibility = "hidden";
            function information(){
                document.getElementById("information").style.visibility = "visible";
                document.getElementById("button").style.visibility = "hidden";
            }
            function voltar(){
                document.getElementById("information").style.visibility = "hidden";
                document.getElementById("button").style.visibility = "visible";
            }
        </script>
    </body>
</html>
<?php
    if(isset($_SESSION['userlogin'])){
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<head>
    <meta charset = "utf-8"/>
    <!--Importacion de CSS (stylesheet.css)-->
    <link rel= "stylesheet"  type="text/css"  href="stylesheet.css"/>
     <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
            
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title> Inicio de Sesion</title>

</head>
<body>

    <div id="content">

        <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark sticky-top" style="background-color: #03204C;">
                <a class="navbar-brand" href="index.php">
                    <img src="logoCbackground.jpeg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Inicio
                </a>
        </nav>

        <!--formulario Inicio de Sesion-->
        <form style="margin-top: 8px; margin-left: 8px; margin-right: 8px;">
            <div class="form-group">
                <label for="exampleInputEmail1">Nombre de Usuario</label>
                <input name="username" id="username" type="text" class="form-control" placeholder="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Contrase&ntilde;a</label>
                <input name="password"  type="password" id="password"  class="form-control" id="exampleInputPassword1">
            </div>
            <button name="button" id="login" type="button" class="text-white btn" style="background-color: #04396B">Login</button>
        </form>

        <?php
        /*
            $username = 'root';
            $password = '';
            $host = 'localhost'; 
            $db_name = "demo";
            $tbl_name = "users";

            //Conexion a la bd y seleccion de bd
            $link = mysqli_connect($host, $username, $password) or die("Error con conexion");
            mysqli_select_db($link, $db_name) or die ("No se puede conectar a la BD;");


            if(isset($_POST['Submit'])){
                $myusername =$_REQUEST['username'];
                $mypassword = $_REQUEST['password'];
                $myusername =$_POST['username'];
                $mypassword = $_POST['password'];
                $myusername = stripslashes($myusername);
                $mypassword = stripslashes($mypassword);
                $myusername = mysqli_real_escape_string($link, $myusername);
                $mypassword = mysqli_real_escape_string($link, $mypassword);
                $sql = "SELECT * FROM $tbl_name WHERE username = '$myusername' and password = '$mypassword'";
                $result = mysqli_query($link, $sql);
                //cuenta el numero de filas que conciden
                $count = mysqli_num_rows($result);
                //si hubo algun resultado el numero de filas debe ser 1
                if($count == 1){
                    $_SESSION["myusername"];
                    $_SESSION["mypassword"];
                    header("location:index.php");
                }else{
                    echo "Usuario y/o Contraseña incorrecto";
                }
            }
            */
        ?>
        <script src="http://code.jquery.com/jquery-3.3.1.min.js"
		    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous">
        </script>
        <script type="text/javascript" src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script>
            $(function(){
        $('#login').click(function(e){

            var valid = this.form.checkValidity();

            if(valid){
                var username = $('#username').val();
                var password = $('#password').val();
            }

            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: 'jslogin.php',
                data:  {username: username, password: password},
                success: function(data){
                    alert(data);
                    if($.trim(data) === "1"){
                        setTimeout(' window.location.href =  "index.php"', 1000);
                    }
                },
                error: function(data){
                    alert('there were erros while doing the operation.');
                }
            });

        });
    });
        </script>
        
    </div>

    
    

    <!--footer -->
    <nav class="navbar navbar-expand-sm navbar-light " style="background-color: #B2CDE0;">            
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link disabled " href="#" tabindex="-1" aria-disabled="true">Desarrollado por Maneto</a>
            </li>
        </ul>
    </nav>

    
</body>
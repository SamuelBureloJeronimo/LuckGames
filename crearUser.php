<?php
    require 'php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuckGames</title>
    <meta http-equiv="Content-Type" content="text/html, charset=iso-8859-2">
    <link rel="icon" href="img/logoMando.png">
    <link rel="stylesheet" href="css/styleIndex.css">
    <link rel="stylesheet" href="css/styleLogin.css">
</head>
<body>
    <!-- Cabecera de Pagina -->
    <div class="divHeader">
        <header>
            <!-- Banner -->
            <a href="index.php"><img src="img/banner2Possible.jpg"></a>
            <!-- Navegacion -->
            <div> 
                <nav>
                    <ul class="ul1">
                        <li><a href="">Inicio</a> </li>
                        <li id="tipoJuego"><a href="" id="#p">Categorias</a>
                            <ul>
                                
                                <li id="list">
                                    <form action="categorias/Aventura.php" method="post">
                                        <input class="inP" type="submit" value="Aventura">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Accion.php" method="post">    
                                        <input class="inP" type="submit" value="Acción">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Anime.php" method="post">    
                                        <input class="inP" type="submit" value="Anime">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Clasicos.php" method="post">    
                                        <input class="inP" type="submit" value="Clasicos">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Carreras.php" method="post">    
                                        <input class="inP" type="submit" value="Carreras">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Casual.php" method="post">    
                                        <input class="inP" type="submit" value="Casual">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Conducir.php" method="post">    
                                        <input class="inP" type="submit" value="Conducir">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Football.php" method="post">    
                                        <input class="inP" type="submit" value="Football">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Horror.php" method="post">    
                                        <input class="inP" type="submit" value="Horror">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Magicos.php" method="post">    
                                        <input class="inP" type="submit" value="Magicos">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Multiplay.php" method="post">    
                                        <input class="inP" type="submit" value="Multiplay">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="categorias/Shooter.php" method="post">    
                                        <input class="inP" type="submit" value="Shooter">
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">Buscar</a><input type="text" placeholder="Buscar..." maxlength="50"></li>
                    </ul>
                    <ul class="ul2">
                        <li><a href="login.php" id="a11">Login</a></li>
                        <li><a href="crearUser.php">Crear cuenta</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!-- Fin /div -->
    </div> 


    <!-- Cuerpo de pagina -->
    <div class="divBody">
    <aside class="sec1">
            <div class="SectionPopulares">
                <h2>Populares</h2>
                <hr>
                <center>
                    <?php
                        $p = "SELECT * from listGames where Etiquetas='Popular #1'";
                        $consult = mysqli_query($conexion,$p);
                        if(!$consult){
                            echo "<script>alert('La pagina no cargo completamente')</script>";
                            return;
                        }
                        $pp = mysqli_fetch_array($consult);
                    ?>
                    <br><p><?php echo $pp['Nombre'] ?></p><br>
                    <a href=""><img src=<?php echo $pp['URL_Minia'] ?>></a>
                </center>
            </div>
            <div class="SectionRecientes">
                <h2>Mas recientes...</h2>
                <hr>
                <?php
                    $p = "SELECT * from listGames where Etiquetas='Reciente'";
                    $consult = mysqli_query($conexion,$p);
                    if(!$consult){
                        echo "<script>alert('La pagina no cargo completamente')</script>";
                        return;
                    }
                    while($pp = mysqli_fetch_array($consult)){
                ?>
                    <div class="divRec">
                        <center>
                            <br><p><?php echo $pp['Nombre'] ?></p>
                            <a href=""><img src=<?php echo $pp['URL_Minia'] ?>></a>
                            <br>
                        </center>
                    
                    </div>
                <?php
                    }
                ?>
            </div>
        </aside>

        <!-- Login Section -->
        <section class="LoginSec">
            <div class="formLogin">
            <center>
                <form action="php/crearUser.php" method="post">
                    <img src="img/IS.png" height="90px"><br>
                    <label for="lblUsuario" style="color:rgb(238, 108, 255)">Usuario</label><br>
                    <input type="text" class="jtxtUser" name="jtxtUser" required placeholder="Usuario..." width="20">
                    <br><br>
                    <label for="lblPass" style="color:rgb(255, 0, 157)">Contraseña</label><br>
                    <input type="password" class="jtxtUser" name="jtxtPass" required placeholder="Contraseña..." width="20">
                    <br><br>
                    <label for="lblPassConfirm" style="color:rgb(255, 0, 0)">Contraseña</label><br>
                    <input type="password" class="jtxtUser" name="jtxtPassConfirm" required placeholder="Confirmar contraseña..." width="20">
                    <br><br>
                    <input type="submit" class="bttonIniciar" value="Crear cuenta">
                    <br>
                </form>
            </center>
            </div>
        </section>
    </div>
    <!-- Pie de Pagina -->
    <div class="divFooter">
        <footer>
            <div class="divInfo">
                <ul>

                    <li id="liInfo">
                        <h1>Informacion de la Compañia</h1>
                        <pre>
LuckGames es una empresa para compartir video juegos,
somos parte de la comunidad de creadores de contenido
y sabemos lo  importante que es para algunos el poder
obtener  videojuegos  gratis y  sin  tanta publicidad.
                        </pre>
                    </li>

                    <li id="liRedes">
                        <h1>Redes Sociales</h1>
                        <ul>
                            <div>
                                <li><a href=""><img src="img/youtube.png" width="28px">YouTube</a></li>
                                <li><a href=""><img src="img/facebook.png" width="26px">Facebook</a></li>
                                <li><a href=""><img src="img/github.png" width="26px">GitHub</a></li>
                            </div>
                            
                        </ul>
                    </li>
                    <li id="liContacto">
                        <h1>Informacion de Contacto</h1>
                        <pre>
Creado por: Samuel Burelos Jeronimo
Edad: 19 años

Macuspana, Tabasco. México.
Col. Josefa Ortiz de Dominguez
CP: 86709
                        </pre>
                    </li>
                        
                </ul>
            </div>
            </footer>
        <!-- Fin /div -->
        </div>
        <script src="js/scriptHeader.js"></script>
</body>
</html>
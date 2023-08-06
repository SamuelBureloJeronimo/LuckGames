<?php
    require '../php/conexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LuckGames</title>
    <meta http-equiv="Content-Type" content="text/html, charset=iso-8859-2">
    <link rel="icon" href="../img/logoMando.png">
    <link rel="stylesheet" href="../css/styleIndex.css">
</head>
<body>
    <!-- Cabecera de Pagina -->
    <div class="divHeader">
        <header>
            <!-- Banner -->
            <a href="../index.php"><img src="../img/banner2Possible.jpg"></a>
            <!-- Navegacion -->
            <div> 
                <nav>
                    <ul class="ul1">
                        <li><a href="">Inicio</a> </li>
                        <li id="tipoJuego"><a href="" id="#p">Categorias</a>
                            <ul>
                                
                                <li id="list">
                                    <form action="Aventura.php" method="post">
                                        <input class="inP" type="submit" value="Aventura">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Accion.php" method="post">    
                                        <input class="inP" type="submit" value="Acción">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Anime.php" method="post">    
                                        <input class="inP" type="submit" value="Anime">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Clasicos.php" method="post">    
                                        <input class="inP" type="submit" value="Clasicos">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Carreras.php" method="post">    
                                        <input class="inP" type="submit" value="Carreras">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Casual.php" method="post">    
                                        <input class="inP" type="submit" value="Casual">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Conducir.php" method="post">    
                                        <input class="inP" type="submit" value="Conducir">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Football.php" method="post">    
                                        <input class="inP" type="submit" value="Football">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Horror.php" method="post">    
                                        <input class="inP" type="submit" value="Horror">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Magicos.php" method="post">    
                                        <input class="inP" type="submit" value="Magicos">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Multiplay.php" method="post">    
                                        <input class="inP" type="submit" value="Multiplay">
                                    </form>
                                </li>
                                <li id="list">
                                    <form action="Shooter.php" method="post">    
                                        <input class="inP" type="submit" value="Shooter">
                                    </form>
                                </li>
                            </ul>
                        </li>
                        <li><a href="">Buscar</a><input type="text" placeholder="Buscar..." maxlength="50"></li>
                    </ul>
                    <ul class="ul2">
                        <li><a href="../login.php" id="a11">Login</a></li>
                        <li><a href="../crearUser.php">Crear cuenta</a></li>
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
                    <a href="<?php echo $pp['URL_Link'] ?>" target="blank"><img src="../<?php echo $pp['URL_Minia'] ?>"></a>
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
                            <a href="<?php echo $pp['URL_Link'] ?>" target="_blank"><img src="../<?php echo $pp['URL_Minia'] ?>"></a>
                            <br>
                        </center>
                    
                    </div>
                <?php
                    }
                ?>
            </div>
        </aside>

        <!-- Lobby Section -->
        <section class="Lobby">
            <div>
                <table width="100%">
                    <center>
                        <tr class="trResponsive">
                            <th><img src="img/buscar.png" width="30px"></th>
                        </tr>
                        <tr class="trLobby">
                            <?php
                                $p = "SELECT * from listGames";
                                $consult = mysqli_query($conexion,$p);
                                if(!$consult){
                                    echo "<script>alert('La pagina no cargo completamente')</script>";
                                    return;
                                }
                                $n=0;
                                while($juegos = mysqli_fetch_array($consult)){
                                    $posicion_coincidencia = strrpos($juegos['Categorias'], "Clasicos");
                                    if($n==22){
                                        break;
                                    }
                                    if($posicion_coincidencia !== false)
                                    {
                            ?>
                                        <td>
                                            <a href="<?php echo $juegos['URL_Link'] ?>" target="_blank"><img src="../<?php echo $juegos['URL_Minia'] ?>" width="100%" height="93%"></a>
                                            <a href="<?php echo $juegos['URL_Link'] ?>" target="_blank"><?php echo $juegos['Nombre'] ?></a>
                                        </td>
                           <?php
                                    $n++;
                                    }
                            ?>   
                            <?php
                            }
                                    if($n === 0){   
                            ?>
                                    <td style="width: 850px; height: 90px; border: 3px solid cyan;">
                                        <Label>No se encontraron coincidencias. Vuelve a intentarlo</Label>
                                    </td>
                                    
                            <?php
                                }
                            ?>
                        </tr>
                        <tr class="trFin">
                            <td class="trNavBotton"><a href=""><<</a></td>
                            <td class="trNavBotton"><a href="">1</a></td>
                            <td class="trNavBotton"><a href="">2</a></td>
                            <td class="trNavBotton"><a href="">3</a></td>
                            <td class="trNavBotton"><a href="">4</a></td>
                            <td class="trNavBotton"><a href="">5</a></td>
                            <td class="trNavBotton"><a href="">6</a></td>
                            <td class="trNavBotton"><a href="">7</a></td>
                            <td class="trNavBotton"><a href="">8</a></td>
                            <td class="trNavBotton"><a href="">9</a></td>
                            <td class="trNavBotton"><a href="">>></a></td>
                        </tr>
                    </center>
                </table>
            </div>
            <br>
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
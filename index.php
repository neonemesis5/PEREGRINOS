<?php
require_once 'noticia.class.php';
require_once 'dbconection.php';
$db = database::getInstance();
$noticias = $db->LoadNoticias();

//foreach ($noticias as $noticia) {
//    
//    echo $noticia->gettitulo()."</br>";
//}
///http://www.vissit.com/inserta-tus-fotos-de-instagram-en-tu-web/
//http://www.mkyong.com/java/how-to-resize-an-image-in-java/ resize imagen
//https://rolandocaldas.com/html5/slider-css-sin-javascript-automatico
//http://stackoverflow.com/questions/19655843/html-div-onclick-event
//http://stackoverflow.com/questions/9198028/changing-form-method-with-js-on-firefox
//http://cybmeta.com/meta-charset-como-y-por-que-utilizarlo-siempre/
?>
<!DOCTYPE html>

<html lang="en" >
    <head>


        <!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame
        Remove this if you use the .htaccess -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"  />
        <meta charset="utf-8" />
        <title>Peregrinos al Santo Cristo de la Grita</title>
        <meta name="description" content="Peregrinos del Santo Cristo de la Grita" />
        <meta name="author" content="A.C. DE PEREGRINOS A EL SANTO CRISTO DE LA GRITA" />
        <meta name="googlebot" content="Peregrinos Santo Cristo de la Grita,La Grita,Santo Cristo" />
        <meta name="robots" content="index,follow">
        <meta name="googlebot"  content="index,follow">

        <link rel="shortcut icon" href="http://www.peregrinossantocristolagrita.com.ve/img/icons/favicon.ico" />

        <meta name="viewport" content="width=device-width; initial-scale=1.0" />

        <!-- styles -->
        <link rel="stylesheet" href="styles/style.css" type="text/css">

        <script language="Javascript" src="scripts/jquery.min.js"></script>
        <script src="scripts/swfobject_modified.js" type="text/javascript"></script>
        <link rel="stylesheet" href="slider.css" type="text/css">
        <script type="text/javascript">
//            console.log();
//            var algo = document.getElementById('enviardata');
//            alert(algo);
            $(document).ready(function () {//               

                $('#quienes').click(function () {
                    $("#lefttop").load('quienes.php');
                });

                $('#cparticipar').click(function () {
                    $("#lefttop").load('cparticipar.php');
                    /*$("#side1").load('s2.php');/**/
                });


//                $('#lefttop:not(#enviardata)').click(function () {
//
//                    enviardata();
//                });



                $('#directiva').click(function () {
                    $("#lefttop").load('directiva.php');
                });
                $('#colabora').click(function () {
                    $("#lefttop").load('colaboradores.php');
                });
                $('#contacto').click(function () {
                    $("#lefttop").load('contacto.php');
                });
                $('#btnInfo').click(function () {
                    $("#lefttop").load('infoperegrin.php');
                });


//                $('div').on("click", "#cparticipar", {"data": "Passed to the handler"}, function (event) {
//                    // Do stuff here when an element inside of a div tag with the id of elem is
//                    //clicked.
//
//                    // the data passed can be used with event.data
//                })


            });



            function pdfview() {
                window.open('pdf/triptico.pdf', '_blank', 'fullscreen=yes');
            }
            function galeria() {
                window.open('galeria.html', '_blank', 'fullscreen=yes');
            }
//            function enviardata() {
//
////                $("#lefttop:not(#datoscparticipar)").attr("method", "get");
////                var $inputs = $('#myForm :input');
////                var values = {};
////                $inputs.each(function () {
////                    values[this.name] = $(this).val();
////                    alert(values[this.name]);
////                });
//////                alert();
//                alert('Esta informacion es privada y no sera utilizada para ningun fin publicitario y/o tapmoco sera redistribuida');
//
//            }

        </script>
    </head>

    <body>
        <h1>Peregrinos a el Santo Cristo de la Grita</h1>
        <div>
            <header>               
                <a href="http://peregrinossantocristolagrita.com.ve"><div id="logo"> </div></a>
                <div id="Rtop"></div>
            </header>
            <nav>
                <ul>
                    <li><a href="http://peregrinossantocristolagrita.com.ve"><div>Inicio</div></a></li>
                    <li><a href="javascript:void(0)"  id="quienes"><div>Quienes Somos</div></a></li>
                    <li><a href="javascript:void(0)" id="directiva"><div>Junta Directiva</div></a></li>
                    <li><a href="javascript:void(0)" id="cparticipar"><div>¿COMO PARTICIPAR?</div></a></li>
                    <li><a href="javascript:void(0)" onclick="pdfview();" ><div>Programa</div></a></li>
                    <li><a href="javascript:void(0)" onclick="galeria();"><div>Galeria</div></a></li>
                    <li><a href="javascript:void(0)" id="colabora"><div>Colaboradores</div></a></li>
                    <li><a href="javascript:void(0)" id="contacto"><div>Contactenos</div></a></li>
                </ul>
            </nav>
            <section id="contenido">
                <section id="contleft">


                    <section id="lefttop">
                        <div id="slider-container">
                            <div id="slider-box">
                                <div class="slider-element">
                                    <article class="element-red">

                                    </article>
                                </div>
                                <div class="slider-element">
                                    <article class="element-green">

                                    </article>
                                </div>
                                <div class="slider-element">
                                    <article class="element-blue">

                                    </article>                            
                                </div>
                            </div>
                        </div>
                        <h4 id="titulotray">Noticias y Actividades Recientes</h4>
                        <div id="noticiasprin">
                            <?php foreach ($noticias as $noticia) { ?>
                                <div id="subnoti">
                                    <div id="titulonoti"><strong><?php echo $noticia->gettitulo(); ?></strong></div>
                                    <div id="mensajenoti"><?php echo $noticia->getmensaje(); ?></div>
                                    <div id="fechanoti"><?php echo "Publicacion hecha: " . date("d /m /Y", strtotime($noticia->getfecha())); ?></div>
                                </div>
                            <?php } ?>
                        </div>
                    </section>   
                </section>
                <aside>
                    <ul>
                        <li ><a><div id="btnInfo"></div></a></li>
                        <li ><a onclick="pdfview();"><div id="btnTrip"><div id="icontrip"></div><div id="texticontrip"><?php echo "Triptico informativo\nPeregrinos a el\nSanto Cristo de la Grita 2015"; ?></div></div></a></li>
                        <li ><a><div id="btnAfic"></div></a></li>
                        <li ><a><div id="news">Noticias y Eventos</div></a></li>
                        <li ><a><div id="rutaperegrino">RUTA DEL PEREGRINO</div></a></li>

                    </ul>
                </aside>
            </section>
            <div class="social">
                <ul>
                    <li><a href="https://twitter.com/peregrinosscris" target="_blank">Twitter <i id="tw" class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.facebook.com/peregrinos.santocristo" target="_blank">Facebook <i id="fa" class="fa fa-facebook"></i></a></li>
                    <li><a href="https://plus.google.com/112992630280449572359" target="_blank">Google+ <i id="go" class="fa fa-dribbble"></i></a></li>
                </ul>
            </div>
            <footer>
                pie
            </footer>
        </div>
        <script type="text/javascript">
            swfobject.registerObject("FlashID");
        </script>
    </body>
</html>
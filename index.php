<!DOCTYPE html>
<html>
	<head>
		<html lang="en">
  <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
        <meta name="description" content="Centro de Investigacion y Enseñanza Musical">
        <meta name="author" content="Ing. Alexis Gonzalez">
        <link rel="icon" href="recursos/img/logo-icon.png" class="rounded-circle">
		<!-- CSS Code -->
		<link rel="stylesheet" href="css/style.css">
    <!--Estilo para tarjetas de presentacion-->
    <link href='css/rotating-card.css' rel='stylesheet'/>
		
		<title>Centro de Investigacion y Enseñanza Musical</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
     <link href="css/cover.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="css/animate.css" rel="stylesheet">
		
<!-- JS Code -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script>
			$(document).ready(function(){
			    $('section[data-type="parallax_section"]').each(function(){
			        var $bgobj = $(this); // Variable para asignacion de objeto
			        $(window).scroll(function() {
			        	$window = $(window);
			            var yPos = -($window.scrollTop() / $bgobj.data('speed'));
			            // cordinadas del background
			            var coords = '50% '+ yPos + 'px';
			            // moviendo el background
			            $bgobj.css({ backgroundPosition: coords });
			        });
			    });
			});

		</script>
    <script type="text/javascript">
      $(function(){

     $('a[href*=#]').click(function() {

     if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'')
         && location.hostname == this.hostname) {

             var $target = $(this.hash);

             $target = $target.length && $target || $('[name=' + this.hash.slice(1) +']');

             if ($target.length) {

                 var targetOffset = $target.offset().top;

                 $('html,body').animate({scrollTop: targetOffset}, 1000);

                 return false;

            }

       }

   });

});

    </script>
	</head>
	<body>
		<section id="principal" data-type="parallax_section" data-speed="10">
			<article>
			<div class="cover-container">
			 <div class="inner">
              <h3 class="masthead-brand" style="color:white;"><img src="recursos/img/logo-icon.png" class="rounded-circle" >CIEM</h3>
              <nav class="nav nav-masthead">
                <a class="nav-link active" href="?opcion=Home">Principal</a>
                <a class="nav-link" href="#section2">Conoce Mas</a>
                <a class="nav-link" href="#section3">Equipo de Formadores CIEM</a>
              </nav>
            </div>
             <div class="inner cover animated lightSpeedIn">
         <!-- <img src="logo.png" class="img-thumbnail" align="center" width="50%">-->
            <h1 style="color:white;" class="cover-heading " >Bienvenido a CIEM</h1>
            <p style="color:white;"><strong>

            Centro de Investigacion y Enseñanza Musical</strong></p>
            <p class="lead">
              <a href="escritorio.php" class="btn btn-lg btn-secondary">"El arte de pensar en musica"</a>
              <!--Script Me Gusta-->
              <div class="fb-like" data-href="https://www.facebook.com/ciemaraguamusical" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
            </p>
          </div>
           <div class="mastfoot">
            <div class="inner">
              <p>by Desarrollador Web<a href="https://formarte.com.vemdo"> Ing. Alexis Gonzalez</a></p>
            </div>
          </div>
			</div>

			</article>
		</section>




		<section id="section2" data-type="parallax_section" data-speed="10">
			<article id="parallax-front" data-speed='11'>
			<div class="cover-container">
			
				<div class="blog-header">
        <h1 class="blog-title">La Historia de CIEM</h1>
        <p class="lead blog-description">Informacion Oficial del desarrollo y creacion del proyecto CIEM</p>
      </div>

      <div class="row">

        <div class="col-sm-8 blog-main">

          <div class="blog-post" id="1">
            <h2 class="blog-post-title">La Asociación Civil “Centro de Investigación y Enseñanza Musical”</h2>
            <p class="blog-post-meta">Mayo 15, 2017 por <a href="#">Colaborador Web</a></p>

            <p class="lead text-justify">Es una comunidad organizada de músicos en el estado Aragua, que
           promueven la cultura científica en el sistema de educación musical, desarrollando metodologías para el aprendizaje permanente y la creación musical, con el propósito de ofrecer una visión innovadora orientada a
            la formación socio crítica; a través del estudio, documentación, producción, innovación, preservación, acrecentamiento y difusión del patrimonio musical, regional, nacional y universal; 
          articulada con las distintas organizaciones públicas, privadas y comunitarias.</p>
            <br>
            <p class="lead text-justify">El Código Soublet plantea una metodología didáctica para estudiar, aprender y enseñar música,  con el uso de un lenguaje en el que 
intervienen un conjunto de algoritmos expresados mediante términos lingüísticos, fórmulas matemáticas y figuras geométricas, relacionados 
con las frecuencias sonoras y su organización armónica dentro del universo de la tonalidad; con el firme compromiso de cultivar la investigación,
 la creación intelectual y musical. El objetivo de esta información es contribuir a la organización constructiva y humana del conocimiento, 
 su empleo literario facilita el estudio de los códigos musicales de manera sencilla pero su comprensión plantea ciertas exigencias, por lo que se ha realizado
 un programa de formación para hacerlo accesible a los educadores como herramienta para la enseñanza musical.</p>
            <blockquote>
              <p class="lead text-justify">Esta investigación contemporánea integra diversas disciplinas que fundamentan los principios y 
axiomas del lenguaje musical, permitiendo el desarrollo integral del estudiante de forma interactiva de acuerdo a 
sus necesidades e inteligencias múltiples; la música ha establecido un vínculo ancestral con la humanidad; es así como a 
través de la historia, seguimos creciendo y enriqueciendo el contenido musical cuyo aprendizaje y transmisión, dependía en 
un principio de la imitación y oralidad, pero a medida que se fue desarrollando el discurso musical, la escritura y la tecnología, 
surgió la necesidad de crear propuestas que permitieran facilitar 
la liberación del conocimiento teórico – práctico, para el estudio y la enseñanza de la música.</p>
            </blockquote>
             <hr id="2">     
            <h2>Visión y Misión</h2>
            <p class="lead text-justify">Visión: Ser un centro de investigaciones y enseñanza de la música, innovador,  reconocido y autosustentable a largo plazo, responsable en la investigación, creación, enseñanza, preservación, fortalecimiento y difusión del patrimonio musical de Venezuela y el mundo.</p><br>
            <p class="lead text-justify">Misión: Somos una institución fundada en el aprecio y el respeto, con vocación innovadora en el arte y la sociedad, orientados a la investigación y enseñanza musical; en las áreas de armonía moderna, solfeo, contrapunto, historia e interpretación de instrumentos musicales. Incentivando a una mayor participación de la comunidad, desarrollando y difundiendo el potencial creador  humano, en el legado musical de la cultura venezolana y del mundo.</p>
            <hr id="3">
            <h2>Valores</h2>
            <p class="lead text-justify">
            <ul>
              <li>Amor por la música.</li>
              <li>Contemplación y comprensión.</li>
              <li>Pertenencia y confianza.</li>
              <li>Paz-ciencia y persistencia.</li>
              <li>Aprender y compartir.</li>
              <li>Voluntad y decisión.</li>
              <li>Respeto por la palabra, acción y sustento.</li>
              <li>Verdad y creación.</li>
              <li>Estudio, atención y concentración.</li>
              <li>Conciencia.</li>
            </ul>
            </p>
          </div><!-- /.blog-post -->
          <hr id="4">

          <div class="blog-post">
            <h2 class="blog-post-title">Reseña Historica</h2>
            <p class="blog-post-meta">Mayo 15, 2017 por <a href="#">Colaborador Web</a></p>

            <p class="lead text-justify">La idea de un centro de investigaciones y enseñanzas de la música, se inicia en la ciudad de Maracay 
          desde hace 30 años aproximadamente, con la formación de laboratorios experimentales o pequeños grupos de estudios denominados 
          “Escuela Itinerante de Música” por el maestro Juan Antonio Soublet, nacido en Monte Azul estado Guárico en 1937; 
          quien ocupado por mejorar las estrategias metodológicas que se presentan en el estudio y enseñanza de la música,
           ha sido pionero en la investigación y práctica de este arte; desde entonces ha estado 
           promoviendo por muchos pueblos de Venezuela, soluciones con hallazgos significativos que han contribuido al impulso, 
          fortalecimiento y evolución del patrimonio musical de Venezuela y el mundo.</p>
            <br>
            <p class="lead text-justify">Considerando los distintos procesos socioculturales en los que se ha manifestado la música a través
 de la historia como una disciplina vinculada a otras ciencias, los integrantes de la comunidad musical comprometidos en consolidar 
 y compartir estos aportes musicales, de carácter científico, pedagógico, artístico, cultural y social; deciden organizarse 
 y para el 30 de Julio del 2011, se constituyen bajo la figura jurídica de una Asociación Civil sin fines de lucro que tiene 
 por nombre Centro de Investigación y Enseñanza Musical CIEM
adscrita a la secretaria de cultura de la ciudad Maracay y legalizada en el Registro Principal del estado Aragua.</p> <br>
<p class="lead text-justify">Los asociados de la comunidad CIEM continúan estudiando ideas que fundamentan la práctica intelectual, 
científica, histórica y social, con una mirada integral de vanguardia sobre el pensamiento y la expresión musical; a través del 
desarrollo e implementación de proyectos que aportan un legado universal al conocimiento, siguen comprometidos con este proceso 
evolutivo de investigación-aprendizaje-enseñanza-creación permanentes centrados en la transdisciplinariedad.</p>
<hr id="5">

          </div><!-- /.blog-post -->

          <div class="blog-post">
            <h2 class="blog-post-title">Laboratorios Musicales</h2>
            <p class="blog-post-meta">Mayo 15, 2017 por <a href="#">Colaborador Web</a></p>
             <h3>Laboratorio Musical “Código Soublet”</h3><br>
            <p  class="lead text-justify primeralinea">
Propósito: Promover la nueva visión educativa, revolucionaria e innovadora, basada en el uso caracteres simbólicos y fórmulas de orden lógico matemático; mediante el aporte de herramientas literarias y estrategias metodológicas, que mejoren las prácticas docentes asociadas a la percepción y estudio del sonido para la enseñanza, composición y análisis de obras musicales. 
 <p><br>

<p class="lead text-justify">El ser humano y el mundo entero están en continuo cambio, las políticas gubernamentales, económicas, las finanzas, la administración pública, las innovaciones en  medicina, la cibernética, la conducta humana, las metodologías de enseñanza y los procesos de aprendizaje; describen el enfoque de un modelo sostenible, constructivista, aplicado a las diversas disciplinas y actividades creativas que están revolucionando estos tiempos históricos de auge cultural y social, del despertar de conciencia. En la sociedad actual venezolana, el modo de vida está siendo determinado por la cultura, como el elemento estratégico de transformación revolucionaria, mediante el impulso y el libre desarrollo de la creatividad, esto es lo que se busca con el programa de formación docente, Pensar y Crear Música sin el uso de instrumentos musicales. De igual forma se espera lograr la apreciación del libro y la lectura de la obra Síntesis de Armonía Tonal, como mecanismo de dimensión cultural, para generar en el pueblo un pensamiento crítico que esté en atención permanentemente frente a los nuevos descubrimientos musicales y la revelación de los códigos armónicos, mediante la publicación, la distribución, la promoción y la difusión del libro.</p><br>

<p class="lead text-justify"> “No existe en el mundo, ningún método de estudio que haga referencia a la armonización de pequeñas o grandes células melódicas; es por ello, que nos dimos la tarea de hacer una Síntesis de la Armonía Tonal, idea fundamentada en los números, con una visión científica y metodológica que nos permite conocer los elementos esenciales para el desarrollo de la armonía tonal.”</p><br>
<h3>Laboratorio Musical Cagua: Enseñanza de Instrumentos Musicales.</h3><br>
<p class="blog-post-meta">Mayo 15, 2017 por <a href="#">Colaborador Web</a></p>

          <p  class="lead text-justify">
Propósito: Promover la enseñanza integral para la ejecución de instrumentos musicales mediante la conformación de agrupaciones orquestales, ensambles, solistas, dúos, que sean difusores del patrimonio musical nacional y universal.
 <p><br>

<p class="lead text-justify">El programa de ejecución instrumental comprende las cátedras de guitarra, cuatro, flauta, violín, piano y canto, entre otras. El pensum de estudio contiene unidades curriculares que se especializan en el estudio integral teórico y práctico del instrumento. Las actividades son desarrolladas en alianza interinstitucional con otras escuelas y organizaciones que habilitan sus espacios para la operatividad de las clases, talleres y seminarios especiales que son realizadas en Cagua estado Aragua.</p><br>
          </div><!-- /.blog-post -->
        </div><!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->


				</div>
			</article>
		</section>
		<section id="" data-type="parallax_section" data-speed="10">
			<article id="section3">
      <h1 class="animated lightSpeedIn" style="color: #fff; margin-bottom: 2rem;" ><strong>Formadores CIEM</strong></h1>
      <!--Bloque de Anuncios-->
<div class="container-fluid row-md-4">
         <div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="img/rotating_card_thumb.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/perf_darling.png"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Darling Omaet</h3>
                                <p class="profession">Musico</p>
                                <p class="text-center">Flautista, Formadora CIEM,Compositora, Docente, Musicoterapeuta, Lic. en Administracion.</p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i>Mas Informacion
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"Mi palabra favorita es armonia"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Descripcion</h4>
                                <p class="text-center">"Veo que cada ser es un sonido y vibra en una frecuencia, entonces eso me inspira a tener fe  en que algun dia nos integremos todos y estaremos en armonia"</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        
                                        <p>
                                            <a href="https://www.facebook.com/darling.omaet" target="_black"><img src="img/icon-face.png" alt="Facebook" width="32px" height="32px"></a>
                                        </p>
                                    </div>
                                    <div class="stats">
                                    
                                        <p>
                                            <a href="#" target="_black" title="AraguaLuthier"><img src="img/icon-twiter.png" alt="Twiter" width="32px" height="32px"></a>
                                        </p>
                                    </div>
                                    <div class="stats">
                
                                        <p>
                                            <a href="#" target="_black"><img src="img/icon-insta.jpg" alt="Instagram" width="32px" height="32px"></a>
                                        </p>
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="footer">
                          
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->

                 <div class="col-md-4 col-sm-6">
             <div class="card-container">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="img/rotating_card_thumb.png"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="img/perf_nelson.png"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Nelson Muñoz</h3>
                                <p class="profession">Musico y Luthier</p>
                                <p class="text-center">Pak Hok Pai - Músico - Luthier. Lic. Actividad Física y Salud - Instructor Escuela Superior de Kung-fu Wushu "Gimnasio Kwong" Aragua Venezuela" </p>
                            </div>
                            <div class="footer">
                                <i class="fa fa-mail-forward"></i>Mas Informacion
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto">"Nada es imposible para una mente dispuesta"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">Descripcion</h4>
                                <p class="text-center">Mi filosofia de vida es eso, amor por lo que se hace, voluntad, constancia, ser fiel a los valores, ser integro, aportar en positivo. </p>

                                <div class="stats-container">
                                    <div class="stats">
                                        
                                        <p>
                                            <a href="https://www.facebook.com/nelsonjmb" target="_black"><img src="img/icon-face.png" alt="Facebook" width="32px" height="32px"></a>
                                        </p>
                                    </div>
                                    <div class="stats">
                                    
                                        <p>
                                            <a href="https://twitter.com/AraguaLuthier_N?lang=es" target="_black" title="AraguaLuthier"><img src="img/icon-twiter.png" alt="Twiter" width="32px" height="32px"></a>
                                        </p>
                                    </div>
                                    <div class="stats">
                
                                        <p>
                                            <a href="https://www.instagram.com/nelson_aragualuthier/" target="_black"><img src="img/icon-insta.jpg" alt="Instagram" width="32px" height="32px"></a>
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                         <img src="img/icon-CE.jpg" alt="Correo Electronico" width="16px" height="16px"> nelsonjmb@hotmail.com
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
       </div>
</article>
<article id="section4">

<?php 

$directory="img/full/";
$dirint= dir($directory);
while (($archivo=$dirint->read()) !==false) {



  if (preg_match("/gif/", $archivo) || preg_match("/jpg/", $archivo) || preg_match("/png/", $archivo)){


            echo "<div class='img-contenedor'>";
            echo "<img src='".$directory."/".$archivo."' alt='Galeria'>";
            echo "</div>";
        }

}


$dirint->close();





 ?>

<div class="img-contenedor">
<img src="img/full/Expo.png" alt="" />
</div>

</article>
          
<!--Fin Bloque de Anuncios-->
		
		</section>
	</body>
</html>
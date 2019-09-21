<?php include('contactform.php'); ?>
<section class="bannerPrincipal">
    <div class="overlay"></div><!--overlay-->
    <div class="center">
                 <form class="pergunta" action="contactform.php" method="post">
                    <h2>Quer saber mais?</h2>
                    <input type="text" name="pergunta" placeholder="Qual sua dúvida?" required>
                    <input type="email" name="email" placeholder="Qual Seu email?" required>
                    <input type="submit" name="submit" value="Enviar!">
                   
                </Form>
            </div><!--center-->
        </section><!---bannerPrincipal-->

        <section id="servicos" class="especialidades">
            <div id="especialidades"><a href="<?php echo INCLUDE_PATH; ?>especialidades"></a></div>
                 <div class="center">
                    <h2 class="title">Nossos Serviços</h2>
                    <div class="w33 left box-especialidades">
                    
                        <h3>Mini Cháles</h3>
                        <div class="image mini">
                            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/01.jpg');" class="banner-singleMini" onclick="openModal();currentSlide(1)" class="hover-shadow" ></div>
                            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/02.jpg');" class="banner-singleMini" onclick="openModal();currentSlide(2)" class="hover-shadow" ></div>
                            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/04.jpg');" class="banner-singleMini" onclick="openModal();currentSlide(3)" class="hover-shadow" ></div>
                            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/05.jpg');" class="banner-singleMini" onclick="openModal();currentSlide(4)" class="hover-shadow" ></div>
                            <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/06.jpg');" class="banner-singleMini"  onclick="openModal();currentSlide(5)" class="hover-shadow"></div>
                        </div>
                        <p>Mini Cláles são desenvolvidos para o melhor custo benefício para até 2 adultos e 1 criança!</p>
                    
                    </div>
                    <div class="w33 left box-especialidades">
                    
                        <h3>Chalés</h3>
                        <div class="image chale">

                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Chale/01.jpg');" class="banner-singleChale" onclick="openModal();currentSlide(6)" class="hover-shadow" ></div>
                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Chale/02.jpg');" class="banner-singleChale" onclick="openModal();currentSlide(7)" class="hover-shadow" ></div>
                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Chale/03.jpg');" class="banner-singleChale" onclick="openModal();currentSlide(8)" class="hover-shadow"  ></div>
                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Chale/04.jpg');" class="banner-singleChale" onclick="openModal();currentSlide(9)" class="hover-shadow" ></div>
                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Chale/05.jpg');" class="banner-singleChale" onclick="openModal();currentSlide(10)" class="hover-shadow" ></div>

                        </div>
                        <p>Chalés de 45 M² que subistituem até uma casa, com um ótimo preço tanto para quem quer morar como para quem quer ter uma casa de temporada!</p>
                    
                    </div>
                    <div class="w33 left box-especialidades">

                        <h3>Carpintaria
                        </h3>
                        <div class="image marcenaria">

                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Outros/01.jpg');" class="banner-singleOutro" onclick="openModal();currentSlide(11)" class="hover-shadow" ></div>
                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Outros/02.jpg');" class="banner-singleOutro" onclick="openModal();currentSlide(12)" class="hover-shadow" ></div>
                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Outros/03.jpg');" class="banner-singleOutro" onclick="openModal();currentSlide(13)" class="hover-shadow" ></div>
                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Outros/04.jpg');" class="banner-singleOutro" onclick="openModal();currentSlide(14)" class="hover-shadow" ></div>
                        <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Outros/05.jpg');" class="banner-singleOutro" onclick="openModal();currentSlide(15)" class="hover-shadow" ></div>

                        </div>
                        <p>Também trabalhamos com encaixe e carpintaria em geral para proporcionar o melhor ambiente interno e externo!</p>

                    </div>
                <div class="clear"></div>
            </div><!--Center-->
        </section><!--especialidades-->


        <section class="descricaoAutor">
        <div class="center">    
            <div class="w50 left">
                <h2>Adilson G. Rocha</h2>
                <p>Prazer em te ter no meu site, procuro ao máximo manter claro meus objetivos e com esse trabalho,
                     que é praticamente arte me sinto cada dia mais vivo fazendo o que gosto!            </div><!--w50-->
            <div class="w50 right">
                <img class="adilson" src="<?php echo INCLUDE_PATH; ?>estilo/Adilson/foto1.jpg"/>
            </div>
        </div><!--Center-->
        </section><!--Autor-->

        <div class="clear"></div>
        
       
        <section id="depoimentos" class="extras">
            <div class="center">
                <div  class="w50 left">
                    <h2 class="title">Depoimentos de clientes</h2>
                        <div class="depoimentoSingle">
                            <p class="depoimentoDescricao">A postagem do SmartCamping alcançou 1 Milhão de pessoas e mais de 20 mil curtidas em menos de 15 dias<br />Isso tudo fez a a minha página ganhar mais de 12 mil seguidores sem gastar com propagandas!</p>
                            <a class="depoimentoAutor" href="https://www.instagram.com/campingportalparaty/">Wado Proprietário Camping Portal de Paraty</a>
                       
                        </div><!--depoimentoSigle-->
                        <div class="depoimentoSingle">
                            <p class="depoimentoDescricao">Chalés Triunfo, gratidão pelo trabalho lindo que fizeram!</p>
                            <a class="depoimentoAutor" href="https://www.instagram.com/explore/locations/1012749538/camping-lyrimar/">Lourdes Camping Lyrimar</a>
                       
                        </div><!--depoimentoSigle-->
                </div><!--divClass50-->
                <div class="w50 left">
                    <h2 class="title">Serviços</h2>
                    <div class="servicos">
                        <ul>
                            <li>Chalés 45 M²</li>
                            <li>Mini Chalés</li>
                            <li>Tiny House</li>
                            <li>Construção Ecológica</li>
                            <li>Serviços carpintaria interna e externa</li>
                        </ul>
                    <br />
                    <h2 class="title">Contato</h2>
                        <ul>
                            <li>Telefone: (11) 97437-1974 </li>
                            <li>Endereço: Rua Maria Barbosa Nabarrete N° 175</li>
                            <li>Mogi das Cruzes - SP</li>
                            <li>Email: contato@chalestriunfo.com.br</li>
                        </ul>

                    
                    </div><!--servicos-->
                </div><!--divClass50-->
                <div class="clear"></div>
            </div><!--center-->
        </section><!--extras-->






<!--Slider do site-->
<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/01.jpg' style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/02.jpg' style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/04.jpg' style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/05.jpg' style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">5 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/06.jpg' style="width:100%">
    </div>
    <div class="mySlides">
      <div class="numbertext">6 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/Chale/01.jpg' style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">7 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/Chale/02.jpg' style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">8 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/Chale/03.jpg' style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">9 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/Chale/04.jpg' style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">10 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/Chale/05.jpg' style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">11 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/Outros/01.jpg' style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">12 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/Outros/02.jpg' style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">13 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/Outros/03.jpg' style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">14 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/Outros/04.jpg' style="width:100%">
    </div>
    
    <div class="mySlides">
      <div class="numbertext">15 / 15</div>
      <img src='<?php echo INCLUDE_PATH; ?>/estilo/Outros/05.jpg' style="width:100%">
    </div>
    
    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>
    
    <script>
        
    function openModal() {
      document.getElementById("myModal").style.display = "block";
    }
    
    // Close the Modal
    function closeModal() {
      document.getElementById("myModal").style.display = "none";
    }
    
    var slideIndex = 1;
    showSlides(slideIndex);
    
    // Next/previous controls
    function plusSlides(n) {
      showSlides(slideIndex += n);
    }
    
    // Thumbnail image controls
    function currentSlide(n) {
      showSlides(slideIndex = n);
    }
    
    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("demo");
      var captionText = document.getElementById("caption");
      if (n > slides.length) {slideIndex = 1}
      if (n < 1) {slideIndex = slides.length}
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";
      dots[slideIndex-1].className += " active";
      captionText.innerHTML = dots[slideIndex-1].alt;
    }
    </script>
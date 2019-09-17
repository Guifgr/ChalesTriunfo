<?php include('config.php'); ?>
<!DOCTYPE html>
<html lang="en">

    <head>
        <link rel="icon" href=" <?php echo INCLUDE_PATH; ?>estilo/chale.ico"/>
        <title>Chalés Triunfo</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="<?php echo INCLUDE_PATH; ?>estilo/style.css" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,400,700&display=swap" rel="stylesheet"> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="Chalés,Triunfo,Casa,madeira,contrução,ecológica,casa de madeira,Chales triunfo,chalés triunfo,arte,madereira,construção madeira">
    <meta name="description" content="Com a Chalés triunfo você pode construir lindas obras de arte sem danificar a natureza">
</head>
<body>

<?php 
    $url = isset($_GET['url']) ? $_GET['url'] : 'home';
    switch ($url) {
        case 'depoimentos':
           echo '<target target="depoimentos" />';
            break;
        
       case 'servicos':
            echo '<target target="servicos" />';
            break;

        case 'onde':
            echo '<target target="onde" />';
            break;
    }
?>

    <header>
        <div class="center">
            <div class="logo left">
            <a href="<?php echo INCLUDE_PATH; ?>">
                <img class="logo" src="<?php echo INCLUDE_PATH; ?>estilo/Adilson/output-onlinepngtools.png">
            </a>
            </div><!---logo-->
            <nav class="desktop right">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>onde">Onde estamos</a></li>
                </ul>
            </nav>

            <nav class="mobile right">
                <div class="botao-menu-mobile">
                        <i class="fa fa-bars fa-3x"></i>
                </div>
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Home</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>depoimentos">Depoimentos</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>onde">Onde estamos</a></li>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </header>
    
        <?php

        if(file_exists('pages/'.$url.'.php')){
            include('pages/'.$url.'.php');
        }
        else
            include('pages/home.php');
        ?>


        <footer>
            <div class="center">
                <p>Chalés Triunfo | Todos os direitos reservados</p>
            </div><!--center-->
        </footer>

<script src=" <?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
<script src=" <?php echo INCLUDE_PATH; ?>js/scripts.js"></script>

<!--Manipulando os slides (vvvvvvvvv)-->
<?php
if($url == 'home'||$url == ''||$url == 'servicos'||$url == 'depoimentos'){
?>

<script src=" <?php echo INCLUDE_PATH; ?>js/slider.js"></script>

<?php
};
?>
<!--Manipulando os slides (^^^^^^^^)-->

</body>
</html>
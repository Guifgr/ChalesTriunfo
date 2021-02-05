<?php 
require('connect.php');
require('dbproduto.php');
setlocale(LC_MONETARY,"pt_BR", "ptb");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<link href="<?php echo INCLUDE_PATH; ?>estilo/loja.css" rel="stylesheet"/>
</head>
<body>
    <div class="loja">

        <section id="servicos" class="especialidades">
                <div id="especialidades"><a href="<?php echo INCLUDE_PATH; ?>especialidades"></a></div>
                    <div class="centerHeigth">
                        <div class="w25 left box-especialidades">
                        
                            <h3><?php echo $name1?></h3>
                            <div class="image mini">
                                <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/01.webp');" class="banner-singleMini"></div>
                            </div>
                            <p><strong><?php echo money_format('%n', $price1);?></strong> <br /><?php echo $shortinformation1?><br /><br /><?php echo $information1?></p>
                            <a href="https://api.whatsapp.com/send?phone=5511974371974&text=Estou%20interessado(a)%20em%20comprar%20o%20SMARTCAMP%201" class="buttonCompra">Quero comprar!</a>
                        </p>
                        
                    </div>
                    <div class="w25 left box-especialidades">
                        <h3><?php echo $name2?></h3>
                            <div class="image marcenaria">
                                
                                <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/MiniChale/04.webp');" class="banner-singleMini"></div>
                                
                            </div>
                            <p><strong><?php echo money_format('%n', $price2);?></strong> <br /><?php echo $shortinformation2?><br /><br /><?php echo $information2?></p>
                            <br />
                            <a href="https://api.whatsapp.com/send?phone=5511974371974&text=Estou%20interessado(a)%20em%20comprar%20o%20SMARTCAMP%202" class="buttonCompra">Quero comprar!</a>
                            </div>
                            <div class="w25 left box-especialidades">
                                <h3><?php echo $name3?></h3>
                                <div class="image chale">
                                    
                                    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Chale/01.webp');" class="banner-singleChale"></div>
                                    
                                </div>
                                <p><strong><?php echo money_format('%n', $price3);?></strong> <br /><?php echo $shortinformation3?><br /><br /><?php echo $information3?></p>
                                <a href="https://api.whatsapp.com/send?phone=5511974371974&text=Estou%20interessado(a)%20em%20comprar%20o%20Chalé%20de%202%20andares" class="buttonCompra">Quero comprar!</a>
                                
                            </div>
                            <div class="w25 left box-especialidades">

                                <h3><?php echo $name4?></h3>
                                    <div class="image marcenaria">
                                        
                                    <div style="background-image: url('<?php echo INCLUDE_PATH; ?>/estilo/Outros/woodFrame.webp');" class="banner-singleOutro"></div>
                                    
                                </div>
                                <p><strong><?php echo money_format('%n', $price4);?></strong> <br /><?php echo $shortinformation4?><br /><br /><?php echo $information4?></p>
                                <br />
                                <a href="https://api.whatsapp.com/send?phone=5511974371974&text=Estou%20interessado(a)%20em%20comprar%20a%20Contrução%20de%20Wood%20frame" class="buttonCompra">Quero comprar!</a>

                        </div>
                    <div class="clear"></div>
                </div><!--Center-->
            </section><!--especialidades-->
        </div><!---lojaview-->

</body>
</html>



<?php require $_SERVER['DOCUMENT_ROOT'] . '/include/core.php' ?>
<!doctype html>
<!DOCTYPE html>
<html lang="pt-BR">
<html>

<head>

    <?php $core->include('head-opening') ?>

    <meta charset="utf-8">

    <!-- Navigation bar color -->
    <meta name="theme-color" content="#09060d"/>
    <meta name="msapplication-navbutton-color" content="#09060d">
    <meta name="apple-mobile-web-app-status-bar-style" content="#09060d">

    <!-- Viiewport -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Black Sabbath: 50 anos de heavy metal</title>

    <!-- css -->
    <link rel="stylesheet" href="static/styles/style.css?version=1.3">
    <!-- Material icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Bangers|Montserrat:400,700,900|Raleway:400,700,900&display=swap" rel="stylesheet">

    <!-- Swiper.js -->
    <script src="https://unpkg.com/swiper/js/swiper.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/css/swiper.min.css">

    <?php $core->include('seo') ?>
    <?php $core->include('sharing') ?>
    <?php $core->include('favicon') ?>

    <?php $core->include('head-closing') ?>

</head>

  <body>

    <?php $core->include('body-opening') ?>

    <div id="audio-container">

      

                    <audio class="audio-hidden" src="static/media/tracks/bells-intro.mp3" id="bells" loop="True" data-track_id="bells" data-artist="Black Sabbath" data-song="Black Sabbath" data-year="1970" data-link="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" data-stop="None"></audio>

      

                    <audio class="audio-hidden" src="https://p.scdn.co/mp3-preview/4bf1e398de0edc42cd4a3efb4be5fa33f1aa0ac3?cid=7a4790705f9d45efa515017ecdccbb61" id="black-sabbath" loop="True" data-track_id="black-sabbath" data-artist="Black Sabbath" data-song="Black Sabbath" data-year="1970" data-link="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" data-stop="None"></audio>

      

                    <audio class="audio-hidden" src="https://p.scdn.co/mp3-preview/9690fdff672dba332aeeee1c207b8bac52ac2424?cid=7a4790705f9d45efa515017ecdccbb61" id="the-wizard" loop="True" data-track_id="the-wizard" data-artist="Black Sabbath" data-song="The Wizard" data-year="1970" data-link="https://open.spotify.com/track/3JvMig6Sc8XRLqHseNsccM" data-stop="None"></audio>

      

                    <audio class="audio-hidden" src="https://p.scdn.co/mp3-preview/8199ac51302e7fa896dd81421d247ae100ca7f0b?cid=7a4790705f9d45efa515017ecdccbb61" id="behind-the-wall-of-sleep" loop="True" data-track_id="behind-the-wall-of-sleep" data-artist="Black Sabbath" data-song="Behind the Wall of Sleep" data-year="1970" data-link="https://open.spotify.com/track/7eXYekcOIQCxDJNS50JjQa" data-stop="None"></audio>

      

                    <audio class="audio-hidden" src="https://p.scdn.co/mp3-preview/82ab9db4cbf7987f7bb3dd912d3e4f7b4f020961?cid=7a4790705f9d45efa515017ecdccbb61" id="nib" loop="True" data-track_id="nib" data-artist="Black Sabbath" data-song="N.I.B." data-year="1970" data-link="https://open.spotify.com/track/62oNfnQqObaqARM0DTibAL" data-stop="None"></audio>

      

                    <audio class="audio-hidden" src="https://p.scdn.co/mp3-preview/0b5e88563e508c4c29a2771e9c481f95c738f0d3?cid=7a4790705f9d45efa515017ecdccbb61" id="evil-woman" loop="True" data-track_id="evil-woman" data-artist="Black Sabbath" data-song="Evil Woman" data-year="1970" data-link="https://open.spotify.com/track/79muBjOf7N6akgrEJuik6R" data-stop="None"></audio>

      

                    <audio class="audio-hidden" src="https://p.scdn.co/mp3-preview/6a22745f2284e225f961f7dae38549788e4b71dd?cid=7a4790705f9d45efa515017ecdccbb61" id="sleeping-village" loop="True" data-track_id="sleeping-village" data-artist="Black Sabbath" data-song="Sleeping Village" data-year="1970" data-link="https://open.spotify.com/track/0KHeKEA1pf0YtlCcGVCGce" data-stop="None"></audio>

      

                    <audio class="audio-hidden" src="https://p.scdn.co/mp3-preview/c8f89d9fc60247ba6d9a0ad85ee2d9096afa405b?cid=7a4790705f9d45efa515017ecdccbb61" id="warning" loop="True" data-track_id="warning" data-artist="Black Sabbath" data-song="Warning" data-year="1970" data-link="https://open.spotify.com/track/4JW2yU9lIb8jCNv47PpTfZ" data-stop="None"></audio>

      

                    <audio class="audio-hidden" src="https://p.scdn.co/mp3-preview/2f1f29ad1be729ea00b8427d8427bb073236b455?cid=7a4790705f9d45efa515017ecdccbb61" id="wicked-world" loop="True" data-track_id="wicked-world" data-artist="Black Sabbath" data-song="Wicked World" data-year="1970" data-link="https://open.spotify.com/track/0DAwAUbGa2ilY49D0JyRyW" data-stop="None"></audio>

      

    </div>

    <!-- Addpted from https://codepen.io/fabiowallner/pen/YOyJbJ -->
<div class="please-rotate">


    <div class="rotate-wrapper">

        <div class="phone"></div>

        <div class="message">
            <p class="text">Por favor, coloque seu dispositivo em posição vertical</p>
        </div>

    </div>

</div>

    <div class="swiper-container">

      <div class="swiper-wrapper">

        

            <div class="swiper-slide title" id="title-screen">

    <!-- Header Estadão -->
    <div class="estado-header">
        <a href="https://www.estadao.com.br/">
            <img src="static/media/estadao-logo.svg" class="logo">
        </a>
    </div> <!-- End of div.estado-header -->

    <!-- Content of the title screen -->
    <div class="title-contents-wrapper">

        <div class="title-contents">

            <div class="title-box">

                <div class="sabbath-logo-holder ">

                    <img class="logo" src="static/media/logo-sabbath.png">

                </div> <!-- End of sabbath-logo-holdr -->

                <div class="subtitle-holder">
                    <h2 class="subtitle">50 anos de heavy metal</h2>
                </div> <!-- End of subtitle-holder -->

                <div class="text-holder">

                <p class="text">No aniversário de um disco que mudou a música, o Estadão apresenta uma jornada pela sonoridade da 1ª banda de metal
                </p>

                </div> <!-- End of text holder -->

            </div> <!-- End of div.title-box -->
        
            <div class="call-to-action">

                <button type="button" id="sound-button">
                    <span class="sound-button-content displayed"><i class="material-icons">volume_off</i>Ligar o som</span>
                    <span class="sound-button-content not-displayed"><i class="material-icons">volume_up</i>Desligar o som</span>
                </button>

                <div class="text-holder">

                    <p class="text">Arraste para continuar</p>

                </div> <!-- End of div.text-holder -->

                <div class="arrow-down-holder">
                <p class="arrow-down up-and-down"></p>
                </div> <!-- End of div.arrow-down-holder-->

            </div> <!-- End of div.call-to-action -->

    </div> <!-- End of div.title-contents -->
    
    </div> <!-- End of div.title-contents-wrapper -->

</div> <!-- End of div.swiper-slide -->


        

            <div class="swiper-slide story" id="intro-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="bells">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Black Sabbath (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Essas badaladas que você está ouvindo agora, ecoando em meio à chuva e aos trovões, são parte da introdução do primeiro disco do <strong>Black Sabbath</strong>.</p>
            
                <p class="text">Quando esse sino tocou pela primeira vez, um novo estilo musical tinha acabado de nascer: o <em>heavy metal</em>.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="intro-2">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="bells">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Black Sabbath (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Lançado em uma sexta-feira, 13 de fevereiro de 1970, o disco exibia uma sonoridade diferente do <em>blues rock</em> distorcido que as bandas mais pesadas da época tocavam.</p>
            
                <p class="text">Grupos como Led Zeppelin e Cream já tinham aumentado o volume do <em>rock 'n roll</em> britânico, tornando a música dançante dos Beatles algo mais pesado e enérgico.</p>
            
                <p class="text">O Black Sabbath, porém, rompeu com a cadência despreocupada de seus contemporâneos. Em suas composições se destacam sons ruidosos, que foram combinados a uma estética sinistra e misteriosa.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="intro-3">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="black-sabbath">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Black Sabbath (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">A faixa-título do disco, que está tocando agora, encapsula a proposta: ela começa de forma lenta e pesada e evolui até atingir um ritmo veloz.</p>
            
                <p class="text">A melodia, sobreposta aos lamentos chorosos e monotônicos do vocalista <strong>Ozzy Osbourne</strong>, dialoga com a letra. Nela, o narrador se encontra com uma figura diabólica disposta a devastar o mundo todo.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="intro-4">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="black-sabbath">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Black Sabbath (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Os responsáveis por essa sonoridade eram quatro jovens da classe trabalhadora de Birmingham, cidade industrial no centro da Inglaterra.</p>
            
                <p class="text">Para autores como Andrew L. Cope, pesquisador que dedicou sua tese de doutorado ao som da banda, a atmosfera lúgubre do local e a falta de perspectivas de futuro ajudaram a moldar um novo gênero musical que se baseava em uma forma agressiva de tocar.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story img" id="birmingham-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="black-sabbath">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Black Sabbath (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    
        
    <div class="image-holder">

        <picture>
        
            <img src="static/media/pics/aston-crop-1.png" class="full-img" alt="Imagem área da região de Aston, em Birmingham. Foto de 1958">
        
        </picture>                    
    
    </div> <!-- End of div.image-holder -->

    
    <div class="legend-holder">

        
        <p class="text">Os membros da banda cresceram em <strong>Aston</strong>, região da cidade que foi muito afetada por bombardeios durante a 2ª Guerra</p> <!-- safe tag disables Jinja2 auto-escaping -->
        
        
        <p class="credit"><strong>Foto:</strong> Phyllis Nicklin (1958). Licença CC.</p>
        

    </div>
    
        
    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>

    </div> <!-- End of div.arrow-down-holder-->


</div> <!-- End of div.swiper-slide -->

        

            <div class="swiper-slide story img" id="birmingham-2">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="black-sabbath">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Black Sabbath (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    
        
    <div class="image-holder">

        <picture>
        
            <img src="static/media/pics/aston-crop-2.png" class="full-img" alt="Imagem de escombros na região de Aston, em Birmingham. Foto de 1968">
        
        </picture>                    
    
    </div> <!-- End of div.image-holder -->

    
    <div class="legend-holder">

        
        <p class="text">A área era considerada um <strong>lugar duro</strong>, que não oferecia muitas esperanças além de um emprego industrial</p> <!-- safe tag disables Jinja2 auto-escaping -->
        
        
        <p class="credit"><strong>Foto:</strong> Phyllis Nicklin (1968). Licença CC.</p>
        

    </div>
    
        
    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>

    </div> <!-- End of div.arrow-down-holder-->


</div> <!-- End of div.swiper-slide -->

        

            <div class="swiper-slide story" id="ozzy-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="black-sabbath">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Black Sabbath (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Ozzy, que acabaria se tornando o membro mais famoso e controverso da banda, teve uma juventude ilustrativa da situação da cidade.</p>
            
                <p class="text">Ele abandonou a escola aos 15 anos. Trabalhou como pedreiro, encanador, operário em uma fábrica de carros e até em um abatedouro. Antes de virar vocalista, chegou a passar seis semanas preso por furtar roupas.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story quote-img" id="ozzy-2">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="black-sabbath">
        <a href="https://open.spotify.com/track/1udmPvJoBnqitbeYKKc9mc" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Black Sabbath (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    
        
    <div class="image-holder">

        <picture>
        
            <img src="static/media/pics/ozzy-solo-70s-crop.png" class="full-img" alt="O cantor original do Black Sabbath, Ozzy Osbourne.">
        
        </picture>                    
    
    </div> <!-- End of div.image-holder -->

    <div class="legend-holder">

        <p class="text quote">“Estávamos bravos com isso [...] e pensamos: 'vamos assustar o mundo inteiro com música'”</p> <!-- safe tag disables Jinja2 auto-escaping -->
        <p class="author"><em><strong>Ozzy Osbourne</strong>, vocalista, em entrevista à revista Q Classic</em></p>
        <p class="credit"><strong>Foto:</strong> Black Sabbath, divulgação</p>

    </div>
        
    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>

    </div> <!-- End of div.arrow-down-holder-->


</div> <!-- End of div.swiper-slide -->

        

            <div class="swiper-slide story" id="bill-ward-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/3JvMig6Sc8XRLqHseNsccM" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="the-wizard">
        <a href="https://open.spotify.com/track/3JvMig6Sc8XRLqHseNsccM" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – The Wizard (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">O baterista <strong>Bill Ward</strong> diz que até mesmo o barulho das fábricas e indústrias foi uma influência significativa para a banda.</p>
            
                <p class="text">Ele se destacou por tocar de forma agressiva e com alto volume, o que contribuía para a violência sonora – até então sem precedentes – do grupo. Sua performance raivosa, relata, era inspirado no som do maquinário.</p>
            
                <p class="text">O estilo ruidoso aparece em faixas como <strong>The Wizard</strong>, que evidencia como o Black Sabbath perverteu o <em>blues rock</em> e transformou-o em um som ameaçador.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story quote-img" id="bill-ward-2">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/3JvMig6Sc8XRLqHseNsccM" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="the-wizard">
        <a href="https://open.spotify.com/track/3JvMig6Sc8XRLqHseNsccM" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – The Wizard (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    
        
    <div class="image-holder">

        <picture>
        
            <img src="static/media/pics/bill-ward.png" class="full-img" alt="Bill Ward, baterista da formação clássica do Black Sabbath.">
        
        </picture>                    
    
    </div> <!-- End of div.image-holder -->

    <div class="legend-holder">

        <p class="text quote">“Você conseguia ouvir os pistões caindo... E eu ficava batucando, colocando ritmo nas batidas”</p> <!-- safe tag disables Jinja2 auto-escaping -->
        <p class="author"><em><strong>Bill Ward</strong>, baterista, em depoimento no documentário <em>7 Ages of Rock</em></em></p>
        <p class="credit"><strong>Foto:</strong> Warner Bros. Studio</p>

    </div>
        
    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>

    </div> <!-- End of div.arrow-down-holder-->


</div> <!-- End of div.swiper-slide -->

        

            <div class="swiper-slide story" id="iommi-guitar-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/3JvMig6Sc8XRLqHseNsccM" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="the-wizard">
        <a href="https://open.spotify.com/track/3JvMig6Sc8XRLqHseNsccM" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – The Wizard (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Além de oferecer uma inspiração sombria, o estilo de vida industrial de Birmingham causou uma mudança mais palpável na sonoridade do grupo.</p>
            
                <p class="text">O guitarrista <strong>Tony Iommi</strong>, principal compositor da banda, foi vítima de um acidente de trabalho que deformou os dedos de sua mão direita.</p>
            
                <p class="text">Assim, ele foi forçado a afinar o instrumento alguns tons abaixo, o que deixa as cordas mais soltas e menos resistentes ao toque. Como consequência, surgiu um som mais grave e – como dá para ouvir – distorcido.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story quote-img" id="iommi-guitar-2">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/3JvMig6Sc8XRLqHseNsccM" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="the-wizard">
        <a href="https://open.spotify.com/track/3JvMig6Sc8XRLqHseNsccM" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – The Wizard (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    
        
    <div class="image-holder">

        <picture>
        
            <img src="static/media/pics/iommi-1978.png" class="full-img" alt="O guitarrista do Black Sabbath, Tony Iommi, em fotografia de 1971">
        
        </picture>                    
    
    </div> <!-- End of div.image-holder -->

    <div class="legend-holder">

        <p class="text quote">“Me disseram que eu nunca ia tocar de novo, mas eu não ia aceitar isso”</p> <!-- safe tag disables Jinja2 auto-escaping -->
        <p class="author"><em><strong>Tony Iommi</strong>, guitarrista, em entrevista à BBC</em></p>
        <p class="credit"><strong>Foto:</strong> Carl Lender. Licença CC.</p>

    </div>
        
    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>

    </div> <!-- End of div.arrow-down-holder-->


</div> <!-- End of div.swiper-slide -->

        

            <div class="swiper-slide story" id="geezer-butler-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/7eXYekcOIQCxDJNS50JjQa" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="behind-the-wall-of-sleep">
        <a href="https://open.spotify.com/track/7eXYekcOIQCxDJNS50JjQa" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Behind the Wall of Sleep (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">A sonoridade raivosa encontrou companhia nas letras do grupo, que eram escritas pelo baixista Geezer Butler.</p>
            
                <p class="text">Todas as composiçõs originais do disco – que traz também dois covers de grupos de blues – versam sobre o oculto ou sobre guerra e injustiças.</p>
            
                <p class="text">Por exemplo, <strong>Behind The Wall of Sleep</strong>, que está tocando agora, fala sobre um dos pesadelos que atormentavam o sono do músico. Butler imaginava que seus sonhos poderiam ser prenúncios da morte.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story quote-img" id="geezer-butler-2">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/7eXYekcOIQCxDJNS50JjQa" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="behind-the-wall-of-sleep">
        <a href="https://open.spotify.com/track/7eXYekcOIQCxDJNS50JjQa" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Behind the Wall of Sleep (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    
        
    <div class="image-holder">

        <picture>
        
            <img src="static/media/pics/geezer-butler.jpg" class="full-img" alt="O baixista e principal letrista da banda, Geezer Butler">
        
        </picture>                    
    
    </div> <!-- End of div.image-holder -->

    <div class="legend-holder">

        <p class="text quote">“Eu estava cercado por guerra e religião. Quando comecei a escrever, estava me rebelando contra tudo com o que cresci”</p> <!-- safe tag disables Jinja2 auto-escaping -->
        <p class="author"><em><strong>Geezer Butler</strong>, baixista, em entrevista à revista Metal Hammer</em></p>
        <p class="credit"><strong>Foto:</strong> Warner Bros. Studio</p>

    </div>
        
    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>

    </div> <!-- End of div.arrow-down-holder-->


</div> <!-- End of div.swiper-slide -->

        

            <div class="swiper-slide story" id="name-change-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/7eXYekcOIQCxDJNS50JjQa" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="behind-the-wall-of-sleep">
        <a href="https://open.spotify.com/track/7eXYekcOIQCxDJNS50JjQa" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Behind the Wall of Sleep (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Foi Butler que insistiu em trocar o nome da banda – antes, o grupo já havia se chamado <em>Polka Tulk Blues Band</em> e <em>Earth</em>.</p>
            
                <p class="text">A inspiração para investir em uma estética maligna veio do cinema. Pouco depois de terminar um ensaio com o grupo, Butler viu uma fila enorme que esperava para assistir a um filme de terror.</p>
            
                <p class="text">Se essas pessoas estavam dispostas a pagar para ver um filme assustador, por que não estariam dispostas a pagar por música assustadora?</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story img" id="name-change-2">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/7eXYekcOIQCxDJNS50JjQa" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="behind-the-wall-of-sleep">
        <a href="https://open.spotify.com/track/7eXYekcOIQCxDJNS50JjQa" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Behind the Wall of Sleep (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    
        
    <div class="image-holder">

        <picture>
        
            <img src="static/media/pics/black-sabbath-movie.png" class="full-img" alt="A capa em inglês do filme &#39;Black Sabbath&#39;, de 1963">
        
        </picture>                    
    
    </div> <!-- End of div.image-holder -->

    
    <div class="legend-holder">

        
        <p class="text">O filme era o italiano <em>I tre volti della paura</em>. Na tradução literal, a obra deveria se chamar 'As Três Faces do Medo', mas virou <strong>'Black Sabbath'</strong> na versão em inglês</p> <!-- safe tag disables Jinja2 auto-escaping -->
        
        

    </div>
    
        
    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>

    </div> <!-- End of div.arrow-down-holder-->


</div> <!-- End of div.swiper-slide -->

        

            <div class="swiper-slide story" id="imagery-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/62oNfnQqObaqARM0DTibAL" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="nib">
        <a href="https://open.spotify.com/track/62oNfnQqObaqARM0DTibAL" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – N.I.B. (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Além da faixa-título, outra canção do álbum faz referência direta ao demônio: <strong>N.I.B.</strong>, cuja letra narra um episódio em que o diabo se apaixona por uma mortal.</p>
            
                <p class="text">O verso mais marcante da canção – <em>“My name is Lucifer, plase take my hand!”</em> – sintetiza a imagem controversa que a banda construiu e que ajudou o lançamento a atingir sucesso comercial: entre música e polêmica, o disco ficou em 8º lugar nas paradas britânicas.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story img-small" id="imagery-2">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/62oNfnQqObaqARM0DTibAL" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="nib">
        <a href="https://open.spotify.com/track/62oNfnQqObaqARM0DTibAL" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – N.I.B. (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="img-holder">
            
        <img class="story-img" src="static/media/pics/black-sabbath-album-cover.jpg" alt="A capa do disco, que mostra uma bruxa em frente a um moinho medieval">

    </div> <!-- End of div.img-holder -->

    <div class="text-holder">

        <p class="text caption">Até a arte da capa era parte do conceito: ela exibe uma mulher misteriosa – uma bruxa? – em frente a um moinho do século XV, no interior rural da Inglaterra.</p>

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="imagery-3">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/62oNfnQqObaqARM0DTibAL" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="nib">
        <a href="https://open.spotify.com/track/62oNfnQqObaqARM0DTibAL" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – N.I.B. (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Essa estética se tornaria um marco da banda até o fim da carreira – embora nenhum dos outros discos tenha uma capa envolvida em tanto mistério quanto essa.</p>
            
                <p class="text">A soma do barulho e da associação mal-disfarçada às forças do mal inspiraram várias bandas pesadas que vieram depois, do Iron Maiden ao Slayer e além.</p>
            
                <p class="text">Em retrospectiva, a tática funcionou. Porém, na época, os críticos não economizaram nas resenhas negativas e irônicas.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide simple-quote" id="criticism-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/62oNfnQqObaqARM0DTibAL" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="nib">
        <a href="https://open.spotify.com/track/62oNfnQqObaqARM0DTibAL" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – N.I.B. (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
        <p class="quote">“O álbum inteiro é uma droga. Apesar dos títulos sombrios e das letras idiotas que parecem um tributo do Vanilla Fudge ao Aleister Crowley, o disco não tem nada de espiritualismo, ocultismo ou de qualquer coisa além de clichês do Cream mal-executados”</p>
        <p class="author"><strong>Lester Bangs</strong>, crítico musical, em uma resenha do álbum publicada na revista Rolling Stone logo depois do lançamento </p>

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="blues-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/79muBjOf7N6akgrEJuik6R" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="evil-woman">
        <a href="https://open.spotify.com/track/79muBjOf7N6akgrEJuik6R" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Evil Woman (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Na mesma resenha, Lester elogiou o trabalho de uma banda chamada Gun. Hoje obscuro, o grupo deixou de existir já no ano em que a crítica foi publicada. As letras que ele considerava idiotas e os títulos sombrios, porém, tinham vindo para ficar e seriam adotados por um caminhão de artistas a partir dali.</p>
            
                <p class="text">Entretanto, até mesmo membros do Black Sabbath – geralmente reverenciados como mestres e anciãos pelo metaleiros – já declararam que se sentem desconfortáveis quando são associados aos sons mais pesados cuja gênese influenciaram.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story quote-img" id="blues-2">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/79muBjOf7N6akgrEJuik6R" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="evil-woman">
        <a href="https://open.spotify.com/track/79muBjOf7N6akgrEJuik6R" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Evil Woman (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    
        
    <div class="image-holder">

        <picture>
        
            <img src="static/media/pics/ozzy-solo.jpg" class="full-img" alt="Ozzy Osbourne se ajoelha no palco em dos shows mais recentes da banda">
        
        </picture>                    
    
    </div> <!-- End of div.image-holder -->

    <div class="legend-holder">

        <p class="text quote">“Que parte disso é inspirada em nós? Uma parte é só gente brava gritando no microfone”</p> <!-- safe tag disables Jinja2 auto-escaping -->
        <p class="author"><em><strong>Ozzy Osbourne</strong>, em entrevista à CNN</em></p>
        <p class="credit"><strong>Foto:</strong> Carl Lender. Licença CC.</p>

    </div>
        
    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>

    </div> <!-- End of div.arrow-down-holder-->


</div> <!-- End of div.swiper-slide -->

        

            <div class="swiper-slide simple-quote" id="blues-3">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/79muBjOf7N6akgrEJuik6R" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="evil-woman">
        <a href="https://open.spotify.com/track/79muBjOf7N6akgrEJuik6R" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Evil Woman (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
        <p class="quote">“Muito [do Black Sabbath] tem raízes no blues e na improvisação. As pessoas que vieram nos passos deles não têm essas mesmas habilidades”</p>
        <p class="author"><strong>Rick Rubin</strong>, produtor do último disco da banda, em entrevista para a revista Rolling Stone</p>

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="blues-4">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/79muBjOf7N6akgrEJuik6R" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="evil-woman">
        <a href="https://open.spotify.com/track/79muBjOf7N6akgrEJuik6R" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Evil Woman (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">No lado B do disco de estreia – vale sempre lembrar que, na época do vinil, as gravações tinham dois lados – essas raízes ficam bem evidentes.</p>
            
                <p class="text"><strong>Evil Woman</strong> – cover do Crow que está tocando há algum tempo – é a primeira de uma série de faixas que revelam muito do lado <em>bluesmen</em> do grupo. </p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="blues-5">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/0KHeKEA1pf0YtlCcGVCGce" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="sleeping-village">
        <a href="https://open.spotify.com/track/0KHeKEA1pf0YtlCcGVCGce" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Sleeping Village (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Logo em seguida, em <strong>Sleeping Village</strong>, dá as caras a capacidade de improvisação de que o produtor Rick Rubin fala.</p>
            
                <p class="text">Depois de uma introdução lenta em que Ozzy Osbourne se limita a falar quatro frases, a música se desmancha em um solo breve.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="blues-6">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/0KHeKEA1pf0YtlCcGVCGce" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="sleeping-village">
        <a href="https://open.spotify.com/track/0KHeKEA1pf0YtlCcGVCGce" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Sleeping Village (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">A música do Black Sabbath não apenas tem ecos de <em>blues</em> e <em>jazz</em>, mas também incorpora um elemento importante da cultura desses gêneros: de acordo com Iommi, o disco todo foi gravado praticamente no improviso, em menos de dois dias.</p>
            
                <p class="text">A banda tocou junta no estúdio, quase como em uma <em>jam</em>. Em contraste, o mais comum é que as gravações de rock e metal sejam feitas de forma separada para cada instrumento.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="blues-7">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/4JW2yU9lIb8jCNv47PpTfZ" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="warning">
        <a href="https://open.spotify.com/track/4JW2yU9lIb8jCNv47PpTfZ" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Warning (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text"><strong>Warning</strong>, a penúltima peça do álbum, bebe ainda mais dessa fonte.</p>
            
                <p class="text">A canção é um cover do projeto solo de Aynsley Dunbar, baterista de Liverpool que tocou com nomes como Jeff Beck, David Bowie e Frank Zappa.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="blues-8">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/4JW2yU9lIb8jCNv47PpTfZ" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="warning">
        <a href="https://open.spotify.com/track/4JW2yU9lIb8jCNv47PpTfZ" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Warning (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Novamente, depois de um breve segmento cantado, a banda se dedica a improvisos, solos e exibicionismo técnico. A coisa toda dura mais de dez minutos.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story" id="ending-1">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/0DAwAUbGa2ilY49D0JyRyW" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="wicked-world">
        <a href="https://open.spotify.com/track/0DAwAUbGa2ilY49D0JyRyW" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Wicked World (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    

    <div class="text-holder">
            
            
                <p class="text">Antes dos 38 minutos de duração do disco chegarem ao fim, porém, ainda dá tempo da banda voltar ao nascente <em>heavy metal</em>.</p>
            
                <p class="text"><strong>Wicked World</strong> retoma os temas e ritmos da primeira metade do álbum e serve como prenúncio para o próximo lançamento do grupo, Paranoid, que chegaria ao mercado pouco mais de seis meses depois.</p>
            
                <p class="text">Nele, o Sabbath ficaria ainda mais grave, mais distorcido e mais pesado. Isso, porém, já é assunto para outra retrospectiva.</p>
            

    </div> <!-- End of div.text-holder -->

    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>
        
    </div> <!-- End of div.arrow-down-holder-->
                    
</div> <!-- End of div swiper.slide -->

        

            <div class="swiper-slide story img" id="ending-2">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/0DAwAUbGa2ilY49D0JyRyW" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="wicked-world">
        <a href="https://open.spotify.com/track/0DAwAUbGa2ilY49D0JyRyW" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Wicked World (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    
        
    <div class="image-holder">

        <picture>
        
            <img src="static/media/pics/sabbath-divulgacao.png" class="full-img" alt="Três membros do Black Sabbath em uma floresta, posando pata foto publicitária">
        
        </picture>                    
    
    </div> <!-- End of div.image-holder -->

    
        
    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>

    </div> <!-- End of div.arrow-down-holder-->


</div> <!-- End of div.swiper-slide -->

        

            <div class="swiper-slide sources" id="sources">

    
        <div class="player-header">

    <div class="spotify-logo-holder">
        <a href="https://open.spotify.com/track/0DAwAUbGa2ilY49D0JyRyW" target="_blank" rel="noopener">
            <img class="spotify-logo" src="static/media/spotify-icon.png">
        </a>
    </div> <!-- End of div.spotify-logo-holder -->

    <div class="track-info-holder active" data-track_id="wicked-world">
        <a href="https://open.spotify.com/track/0DAwAUbGa2ilY49D0JyRyW" target="_blank" rel="noopener">
            <p class=text><b>Tocando:</b></p>
            <p class="text marquee">Black Sabbath – Wicked World (1970)</p>    
        </a>
    </div> <!-- End of div.track-info-holder -->

    <div class="sound-button-holder">
        <i class="material-icons sound-icon not-displayed">volume_up</i>
        <i class="material-icons sound-icon displayed">volume_off</i>
    </div> <!-- End of div.sound-button-holder -->

</div> <!-- End of div.player-header -->


    
        
    <div class="title-holder">

        <h1 class="source-title">Saiba mais:</h1> 
    
    </div> <!-- End of div.image-holder -->

    <div class="sources-holder">

        
            <p class="text"><a href="https://www.amazon.com.br/Black-Sabbath-Heavy-Metal-Music/dp/0754668819"><strong>Andrew L. Cope.</strong> Black Sabbath and The Rise of Heavy Metal Music (2010)</a></p>
        
            <p class="text"><a href="https://www.bbc.com/news/uk-england-birmingham-38768573"><strong>BBC.</strong> Black Sabbath: 'We hated being a heavy metal band'</a></p>
        
            <p class="text"><a href="https://www.dailymotion.com/video/x2ew47k"><strong>BBC Two.</strong> 7 Ages of Rock: Never Say Die</a></p>
        
            <p class="text"><a href="https://www.blabbermouth.net/news/ozzy-osbourne-i-have-never-ever-ever-been-able-to-attach-myself-to-the-word-heavy-metal/"><strong>Blabbermouth.</strong> Ozzy Osbourne: I Have Never Ever Ever Been Able To Attach Myself To The Word 'Heavy Metal'</a></p>
        
            <p class="text"><a href="https://www.brumpic.com/new-blog-5/"><strong>Brumpic.</strong> The A-Z Of Phyllis Nicklin - Aston</a></p>
        
            <p class="text"><a href="https://www.loudersound.com/features/black-sabbaths-geezer-butler-my-life-story"><strong>Metal Hammer.</strong> Black Sabbath's Geezer Butler: My Life Story</a></p>
        
            <p class="text"><a href="https://www.rollingstone.com/music/music-album-reviews/black-sabbath-188300/"><strong>Rolling Stone.</strong> Resenha do disco escrita por Lester Bangs</a></p>
        
            <p class="text"><a href="https://www.rollingstone.com/music/music-features/black-sabbath-on-sixties-origins-we-were-rejected-again-and-again-192645/"><strong>Rolling Stone.</strong> Black Sabbath on Sixties Origins: ‘We Were Rejected Again and Again’</a></p>
        

    </div>
        
    <div class="arrow-down-holder">

        <p class="arrow-down up-and-down"></p>

    </div> <!-- End of div.arrow-down-holder-->


</div> <!-- End of div.swiper-slide -->

        

            <div class="swiper-slide end" id="end-screen">

    <!-- Header Estadão -->
    <div class="estado-header">

        <a href="https://www.estadao.com.br/">
           
            <img src="static/media/estadao-logo.svg" class="logo">
      
        </a>
    
    </div> <!-- End of div.estado-header -->

    <div class="inner-container">

        <div class="title-box">
            
            <div class="sabbath-logo-holder">
            
                <img class="logo" src="static/media/logo-sabbath.png">
            
            </div> <!-- End of div.sabbath-logo-holder -->
            
            <div class="subtitle-holder">
                
                <h2 class="subtitle">50 anos de heavy metal</h2>
            
            </div> <!-- End of subtitle-holder -->

        </div> <!-- End of div.title-box -->

        <div class="credits-holder">

            <div class="person">
                <p class="text role">Reportagem, design e desenvolvimento:</p>
                <p class="text name">Rodrigo Menegat</p>
            </div> <!-- End of div.person -->

            <div class="person">
                <p class="text role">Editor assistente multimídia:</p>
                <p class="text name">Carlos Marin</p>
            </div> <!-- End of div.person -->

            <div class="person">
                <p class="text role">Editora de infografia multimídia:</p>
                <p class="text name">Regina Elizabeth</p>
            </div> <!-- End of div.person -->

            <div class="person">
                <p class="text role">Editor executivo:</p>
                <p class="text name">Fábio Sales</p>
            </div> <!-- End of div.person -->

        </div> <!-- End of div.credits-holder -->

        <div class="spotify-credits">

            <p class="text">Todas as músicas tocadas neste especial, exceto a introdução da faixa <em>Black Sabbath</em>, são pré-visualizações oferecidas pelo <span class="role">Spotify</span>.</p>
                
        </div> <!-- End of div.spotify-credits -->

        <div class="button-holder">

            <button id="exit-button" onclick="location.href='https://infograficos.estadao.com.br'"><span class="exit-button-content">Veja mais especiais →</span></button>

        </div> <!-- End of div.button-holder -->

    </div> <!-- End of div.inner-container -->




</div> <!-- End of div.swiper-slide -->


        

      </div> <!-- End of div.swiper-wrapper -->

    </div> <!-- End of div.swiper-container -->
      
    <!-- Javascript -->
    <script src="static/scripts/scripts.js?version=1.1"></script>

    <?php $core->include('body-closing') ?>

</body>

</html>
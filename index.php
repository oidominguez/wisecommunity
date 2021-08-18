<!DOCTYPE html>
<html lang="pt-br">
<head> 
    <?php
        include_once "includes/head.html";
    ?>
    <title>Wise Community - Início</title>
</head>
<body>
    <div class="header">
    <div class="logo">
        <img src="assets/images/logo.png">
    </div>
    </div> <!-- header -->

    <!-- Menu -->
    <?php
        include_once "includes/menu.html";
    ?>
    <!-- Fim do Menu -->

    <div class="portal">
        <div class="discord" onclick="discordserver()">
            <section class="discordicon">
                <i class="fab fa-discord"></i>  
            </section>
            <section class="discordtexts">  
            <h6>Entre no servidor</h6>
            <p>Entre em nossa comunidade do discord e fique por dentro de nossos spoilers exclusivos!</p>
            </section>
        </div> <!-- discord -->
        <div class="youtube" onclick="youtubechannel()">
            <section class="youtubeicon">
                <i class="fa fa-youtube"></i>  
            </section>
            <section class="youtubetexts">
            <h6>Inscreva-se no canal</h6>
            <p>Apoie nossa comunidade se inscrevendo e acompanhando nosso conteúdo no youtube!</p>
            </section>
        </div> <!-- youtube -->
    </div> <!-- portal -->
    <div class="list">
        <div class="addons" onclick="addons()">
            <div class=bgaddons></div>
            <section class="addonsicon"> 
            </section>
            <section class="addonstexts">
            <h5>Wise Addons</h5>
            <p>Quer baixar alguma de nossas Addons? Confira e baixe agora mesmo nossos lançamentos por aqui!</p>
            </section>
        </div> <!-- addons -->
        <div class="minecraft" onclick="minecraft()">
            <div class=bgminecraft></div>
            <section class="minecrafticon">  
            </section>
            <section class="minecrafttexts">
            <h5>Minecraft</h5>
            <p>Quer baixar a última versão do Minecraft Pocket Edition? Faça o download agora mesmo por aqui!</p>
            </section>
        </div> <!-- minecraft -->
    </div> <!-- list -->

    <!-- Footer -->
    <?php
        include_once "includes/footer.html";
    ?>
    <!-- Fim do Footer -->

    <script src="assets/js/main.js"></script>
    <script src="https://kit.fontawesome.com/1942794f8c.js" crossorigin="anonymous"></script>
</body>
</html>
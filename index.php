<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./stylesheets/index.css">
    <title>PETComp</title>
</head>
<body>
    <?php
        include("./header.php");
    ?>
    <main>
        <section class="slider">
            <div>
                <ul class="fade" slider-imgs>
                    <li>
                        <h1>Seja bem-vindo ao novo site PETComp</h1>
                        <p>De cara nova e com muito mais informações!</p>
                        <a href="./integrantes.html">Conheça</a>
                    </li>
                    <li>
                        <h1>Conheça nossa história</h1>
                        <p>O grupo existe desde 2007 e desenvolve atividades de Monitoria, Desenvolvimento e Pesquisas</p>
                        <a href="./sobre.html">Conheça</a>
                    </li>
                    <li>
                        <h1>Seletivo 2021.1</h1>
                        <p>Veja a lista de integrantes do grupo e conheça os novos participantes</p>
                        <a href="./integrantes.html">Conheça</a>
                    </li>
                    <li>
                        <h1>PodComp</h1>
                        <p>Acompanhe todos o episódios já lançados do nosso podcast</p>
                        <a href="./produtos-podcomp.html">Conheça</a>
                    </li>        
                </ul>
                <button class="left">&#60;</button>
                <button class="rigth">&#62;</button>
            </div>
        </section>
        <section class="about">
            <div class="galery">
                <figure class="p1"><img src="./assets/photo-1.jpg" alt="photo-1"></figure>
                <figure class="p2"><img src="./assets/photo-2.jpg" alt="photo-2"></figure>
                <figure class="p3"><img src="./assets/photo-3.jpg" alt="photo-3"></figure>
                <figure class="p4"><img src="./assets/photo-4.jpg" alt="photo-4"></figure>
            </div>
            <div>
                <h1>Conheça o PET</h1>
                <p>O Programa de Educação Tutorial de Ciência da Computação da UFMA foi criado em 1 de Setembro de 2007, 
                    tendo como tutor o professor Alexandre César Muniz de Oliveira, em 19 de Janeiro de 2016 o professor Geraldo Braz Junior tornou-se o novo tutor do grupo.
                    E após sua excelente gestão, em 2019 assume o professor Luis Rivero. O PET Computação já realizou diversas atividades de pesquisa, ensino e extensão. 
                    Dentre algumas das atividades podemos citar minicursos, Projetos de Extensão, como por exemplo, ensino de pensamento computacional, 
                    organiza o Encontro Acadêmico de Computação (EAComp), desenvolvimento de sistemas, entre outros.</p>
                <a href="./sobre.html">Veja Mais &#62;</a>
            </div>
        </section>
        <section class="activities">
            <div>
                <h1>Atividades</h1>
                <p>O PETComp desenvolve diversas atividades. 
                    Clique em um dos cards para obter mais informações.</p>
            </div>
            <div>
                <ul>
                    <li>
                        <img src="./assets/activity/graduation-hat.png">
                        <p>Monitoria</p>
                        <a href="./monitoria.php">Saiba Mais</a>
                    </li>
                    <li>
                        <img src="./assets/activity/mic-podcast.png">
                        <p>PodCast</p>
                        <a href="./produtos-podcomp.php">Saiba Mais</a>
                    </li>
                    <li>
                        <img src="./assets/activity/web-programming.png">
                        <p>Fábrica de Software</p>
                        <a href="./desenvolvimento.php">Saiba Mais</a>
                    </li>
                    <li>
                        <img src="./assets/activity/talk-show.png">
                        <p>Organização de Eventos</p>
                        <a href="./eventos.php">Saiba Mais</a>
                    </li>
                    <li>
                        <img src="./assets/activity/online-course.png">
                        <p>Minicursos e Oficinas</p>
                        <a href="./minicursos.php">Saiba Mais</a>
                    </li>
                    <li>
                        <img src="./assets/activity/contract.png">
                        <p>Expressão Escrita</p>
                        <a href="./publicacoes.php">Saiba Mais</a>
                    </li>
                    
                </ul>
            </div>
        </section>
    </main>
    <?php
        include_once("./footer.php");
    ?>
    
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        document.getElementsByClassName("left")[0].onclick = () => {
            slideIndex--
            showSlides(slideIndex);
        }
        document.getElementsByClassName("rigth")[0].onclick = () => {
            slideIndex++
            showSlides(slideIndex);
        }
        function showSlides(n) {
            var i;
            var slides = document.querySelectorAll("[slider-imgs] li");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            slides[slideIndex-1].style.display = "flex";
        }
        setInterval(() => {
            slideIndex++
            showSlides(slideIndex)
        }, 5000)

        
    </script>
</body>
</html>
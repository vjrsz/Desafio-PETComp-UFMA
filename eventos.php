<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./stylesheets/eventos.css">
    <title>Eventos | PETComp</title>
</head>
<body>
    <?php
        include("./header.php");
    ?>
    <main>
        <section class="desc">
            <div class="title">
                <h1>Eventos</h1>
                <div class="divider"></div>
            </div>
            <p> Eventos serão promovidos e organizados pelo grupo. Entre as possíveis opções de eventos estão o EACOMP(Encontro Acadêmico de Computação), PET Game Jam, JIM.</p>
            <p>Os eventos serão planejados através de reuniões entre o grupo. Na primeira reunião, um petiano é eleito líder do monitoramento das atividades a serem realizadas para que ocorra o evento. Este líder, em conjunto com o tutor, indica membros para auxiliá-lo diretamente, podendo inclusive, ser todos os membros do PET. O tutor atua como facilitador entre as várias entidades e atores da universidade.</p>
            <p>O grupo então define a programação baseada em minicursos, tutorias, palestras, competições, apresentação, rodas de discussão e laboratórios e define também comissões para cuidar de grandes tarefas do evento. A programação é baseada na tendência atual da área e tende a atender os anseios do público diretamente envolvido do curso de Ciência da Computação.</p>
            <p>Os eventos são então divulgados através de redes sociais em todos os cursos da área do Maranhão, em instituições públicas e particulares, assim como e instituições que possuem cursos técnicos na área. Durante os eventos, as comissões formadas atuam para garantir que a realização do evento ocorra de forma completamente ordenada.</p>
        </section>
        <section class="galery">
            <div class="card">
                <div class="logo">
                    <img src="./assets/eventos/acalourada.svg">
                </div>
                <div>
                    <h1>Acalourada</h1>
                    <p>A Acalourada Virtual é uma atividade de recepção dos estudantes ingressantes no curso de Ciência da Computação de forma totalmente virtual. Essa atividade já vem sendo desenvolvida de forma presencial há mais de 3 anos em conjunto com a Coordenação de Computação, o Departamento de Informática e o PET de Computação, e procura guiar os calouros através da universidade e do curso, além de mostrar as oportunidades que a universidade oferece tanto de forma pessoal como profissional.</p>
                    <a href="#">Saiba Mais</a>
                </div>
            </div>
            <div class="card">
                <div class="logo">
                    <img src="./assets/eventos/eacomp.svg">
                </div>
                <div>
                    <h1>EAComp</h1>
                    <p>O Encontro Acadêmico de Computação (EAComp) da UFMA é uma forma de receber novos alunos e familiarizá-los com o curso de Graduação de Ciência da Computação da UFMA apresentando as oportunidades dentro da graduação. O EAComp é organizado pelo Programa de Educação Tutorial do curso de Ciência da Computação (PETComp).</p>
                    <a href="#">Saiba Mais</a>
                </div>
            </div><div class="card">
                <div class="logo">
                    <img src="./assets/eventos/ercemapi.svg">
                </div>
                <div>
                    <h1>ERCEMAPI</h1>
                    <p>A primeira edição da Escola Regional de Computação dos Estados do Ceará, Maranhão e Piauí (ERCEMAPI) ocorreu em 2007 e foi sediada em Fortaleza, CE. O evento busca promover a integração entre os três estados e tem como objetivo disseminar o conhecimento técnico e científico sobre temas e assuntos de vanguarda na área de Computação. As Escolas Regionais são eventos promovidos pela Sociedade Brasileira de Computação (SBC). A ERCEMAPI visa se consolidar como um evento de referência nos Estados do Maranhão, Ceará e Piauí e região. Além disso, o evento colabora e contribui com a consolidação dos Programas de Pós-Graduação da região.</p>
                    <a href="#">Saiba Mais</a>
                </div>
            </div>
        </div><div class="card">
            <div class="logo">
                <img src="./assets/eventos/ejim.svg">
            </div>
            <div>
                <h1>JIM</h1>
                <p>A Jornada Informática do Maranhão (JIM) é um evento de caráter acadêmico e técnico-científico com o objetivo de propiciar um espaço de intercâmbio entre os diversos atores dos setores de Informática da região, apresentando e discutindo temas que abordam a aplicação da Computação para a solução de problemas do Estado do Maranhão, bem como as pesquisas em Informática realizadas nas instituições do estado, disponibilizando aos participantes a possibilidade de acesso a temas e discussões recentes na área, através de diversas atividades, como palestras, minicursos, painéis de discussão e apresentação de trabalhos científicos.</p>
                <a href="#">Saiba Mais</a>
            </div>
        </div>
        </section>
    </main>
    <?php
        include_once("./footer.php");
    ?>
</body>
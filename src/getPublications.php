<?php
function connection_db(){
    $hostname = "localhost";
    $database = "bd_seletivo";
    $username = "root";
    $password = "";
    $mysqli = new mysqli($hostname, $username, $password, $database);

    if($mysqli->connect_errno){
        echo "falha ao conectar ao banco";
    }else{
        return $mysqli;
    }
}


function getData(){
    $mysqli = connection_db();
    $query = "SELECT * FROM publicacoes";
    $res = $mysqli->query($query);

    $res->data_seek(0);
    while ($row = $res->fetch_assoc()) {
        insert_html( $row['titulo'],  $row['autores'], $row['link_publicacao']);
    }
}

function insert_html($title, $author, $link){
    echo "
        <div class='card'>
            <h1>Artigo: ".utf8_encode($title)."</h1>
            <div class='links'>
                <p>COMPARTILHE</p>
                <div>
                <a href='#'><img src='.\assets\svg\\twitter_icon_copy.svg'></a>
                <a href='#'><img src='.\assets\svg\whatsapp.svg'></a>
                <a href='#'><img src='.\assets\svg\\facebook.svg'></a>
                </div>
            </div>
            <div class='authors'>
                <p>AUTORES</p>
                <p>".utf8_encode($author)."r</p>
            </div>
            <div class='buttons'>
                <a href='#'>Ver Mais</a>
                <a href='".utf8_encode($link)."'>Arquivos</a>
            </div>
        </div>
    ";
}

getData();





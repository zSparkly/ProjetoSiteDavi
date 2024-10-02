<?php
    include_once("templates/topo.php");
    include_once("templates/menu.php");

    if (isset($_GET['page'])) {
        $page = $_GET['page'];
        
        $allowed_pages = ['quemsomos', 'clientes', 'faleconosco'];
        
        if (in_array($page, $allowed_pages)) {
            include_once("paginas/$page.php");
        } else {
            echo "<main><h2>Página não encontrada!</h2></main>";
        }
    } else {
        echo "<main><h2>Bem-vindos ao tributo a Davi Brito, campeão do BBB24!

        </h2><p>Este espaço é dedicado a celebrar a trajetória de Davi Brito, um participante que conquistou o Brasil com sua autenticidade, carisma e força de vontade. Aqui, você encontrará tudo sobre sua jornada dentro e fora da casa mais vigiada do país: momentos inesquecíveis, curiosidades, declarações e muito mais. Esta é uma homenagem ao campeão que nos inspirou e mostrou o verdadeiro significado de superação.

        Essa introdução destaca a admiração pelo Davi e cria uma conexão emocional com os fãs que visitam o site.</p></main>";
    }

    include_once("templates/rodape.php");
?>


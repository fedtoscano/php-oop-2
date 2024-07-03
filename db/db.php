<?php
require_once __DIR__."/../Classes/Product.php";
require_once __DIR__."/../Classes/Products/Food.php";
require_once __DIR__."/../Classes/Products/Games.php";
require_once __DIR__."/../Classes/Products/Gadget.php";

//creo i prodotti singoli
$itemList = [

    //? FOOD
    new Food("Royal Canin Mini Adult", 43.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg', "Cane", 545, "prociutto", "riso"),
    new Food("Almo Nature Holistic Maintenance Medium Large Tonno e Riso", 44.99, "https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg", "Cane", 600, "manzo", "cereali"),
    new Food("Almo Nature Cat Daily Lattina", 34.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', 'Gatto', 400, 'tonno', 'pollo', 'prosciutto'),
    new Food('Mangime per Pesci Guppy in Fiocchi', 2.95, 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', 'Pesce', 30, 'Pesci e sottoprodotti dei pesci', 'Cereali', 'Lieviti', 'Alghe'),
    
    //? GADGET
    new Gadget('Voliera Wilma in Legno', 184.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', 'Uccello', 'Legno', 'M: L 83 x P 67 x H 153cm'),
    new Gadget('Cartucce Filtranti per Filtro EasyCristal', 2.29, 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', 'Pesce', 'Materiale espanso', 'ND'),
    
    //?GAMES
    new Game('Kong Classic', 13.49, 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', "Cane", 'Galleggia e rimbalza', '8,5cm x 10cm'),
    new Game('Topini di Peluche Trixie', 4.99, 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', "Gatto", 'Morbido con codina in corda', '8.5cm x 10cm')

];

?>

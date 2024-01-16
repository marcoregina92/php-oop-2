<?php

require_once __DIR__ . '/Models/Cuccia.php';

$gatti = new Categoria("Gatti");
$cani = new Categoria("Cani");

$prodotti = [
    new Cuccia(
        "<img src='https://s.cdnshm.com/catalog/it/t/567135052/trade-shop-cuccia-per-gatti-universale-a-meta-chiuso-con-morbido.jpg'>",
        "Cuccia per Gatto",
        "€ 30,00",
        $gatti,
        "Grigio",
        "Una bella cuccia per tenere il tuo gatto comodo e al caldo."
    ),
    new Cuccia(
        "<img src='https://c-zo.niceshops.com/upload/image/product/large/default/16847_6b4b20f8.256x256.jpg'>",
        "Cuccia per Gatto",
        "€ 20,00",
        $gatti,
        "Verde",
        "Cuccia colorata che farà sentire il tuo amico peloso al sicuro."
    ),
    new Cuccia(
        "<img src='https://m.media-amazon.com/images/I/B1VfO5SsDrS._UC256,256_CACC,256,256_.jpg'>",
        "Cuccia per Gatto",
        "€ 15,00",
        $gatti,
        "Blu",
        "Una bella cuccia per tenere il tuo gatto comodo e al caldo."
    ),    new Cuccia(
        "<img src='https://c-mw.niceshops.com/upload/image/product/large/default/99033_41496ab4.256x256.jpg'>",
        "Cuccia per Gatto",
        "€ 40,00",
        $gatti,
        "Rosso",
        "Cuccia moderna dal design inconfondibile."
    )

];
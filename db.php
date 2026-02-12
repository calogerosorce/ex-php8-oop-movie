<?php
$movies = [
    new Movie('Avatar', 2, 'Dei marine in un pianeta alieno',  new Genere('Science Fiction'), 'https://m.media-amazon.com/images/I/91N1lG+LBIS._AC_UF894,1000_QL80_.jpg'),
    new Movie('Interstellar', 3, 'Un team di esploratori viaggia attraverso un wormhole nello spazio nel tentativo di garantire la sopravvivenza dell\'umanità.', new Genere('Science Fiction'), 'https://m.media-amazon.com/images/I/91vIHsL-zjL.jpg'),
    new Movie('Pulp Fiction', 2.5, 'Le vite di due sicari della mafia, un pugile, la moglie di un gangster e una coppia di banditi da diner si intrecciano in quattro racconti di violenza e redenzione.', new Genere('Crime'), 'https://m.media-amazon.com/images/I/81UTs3sC5hL._AC_UF894,1000_QL80_.jpg'),
    new Movie('The Matrix', 2.5, 'Un hacker informatico scopre dai misteriosi ribelli la vera natura della sua realtà e il suo ruolo nella guerra contro i suoi controllori.', new Genere('Science Fiction'), 'https://m.media-amazon.com/images/I/91tyXRKh8nL._AC_UF894,1000_QL80_.jpg'),
    new Movie('Inception', 2.5, 'Un ladro che ruba segreti aziendali attraverso l\'uso della tecnologia di condivisione dei sogni riceve il compito inverso di piantare un\'idea nella mente di un CEO.', new Genere('Science Fiction'), 'https://m.media-amazon.com/images/I/81OF+X3jx0L._AC_UF894,1000_QL80_.jpg'),
    new Movie('It', 2.5, 'Nell\'estate del 1989, un gruppo di bambini bullizzati si unisce per distruggere un mostro mutaforma che si traveste da clown e predatore dei bambini di Derry, la loro piccola città del Maine.', new Genere('Horror'), 'https://pad.mymovies.it/filmclub/2009/04/029/locandina.jpg')
];

$movies[0]->setRating(8.5);
$movies[1]->setRating(9.0);
$movies[2]->setRating(9.5);
$movies[3]->setRating(8.7);
$movies[4]->setRating(8.8);
$movies[5]->setRating(7.5);

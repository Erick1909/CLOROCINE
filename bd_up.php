<?php 

$bd = new SQLite3("filmes.db");

$sql = "DROP TABLE IF EXISTS filmes";

if ($bd->exec($sql))
    echo "\ntabela apagada\n";

$sql = "CREATE TABLE filmes(
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo VARCHAR (200) NOT NULL,
        poster VARCHAR (200),
        sinopse TEXT,
        nota DECIMAL (2,1)
    )
    
";

if ($bd->exec($sql))
    echo "\ntabela filmes criada\n";
else
    echo "\nerro ao criar tabela de filmes\n";




$sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        0,
        'Vingadores: Guerra Infinita',
        'https://image.tmdb.org/t/p/original/89QTZmn34iwXYeCpVxhC9UrT8sX.jpg',
        'Enquanto os Vingadores e seus aliados continuam protegendo o mundo de ameaças grandes demais para qualquer herói,
         um novo perigo surgiu das sombras cósmicas: Thanos. Déspota da infâmia intergaláctica, seu objetivo é coletar todas seis Pedras do Infinito, 
         artefatos de poder inimaginável, e usá-las para infligir sua vontade distorcida a toda a realidade. Tudo o que os Vingadores lutaram levou até esse momento
         o destino da Terra e da própria existência nunca foi tão incerto',
        9.7
    )";

if ($bd->exec($sql))
    echo "\nfilmes inseridos com sucesso\n";
else
    echo"\nerro ao inserir filmes\n";



    $sql = "INSERT INTO filmes (id, titulo, poster, sinopse, nota) VALUES (
        1,
        'Baby Drive',
        'https://image.tmdb.org/t/p/original/rmnQ9jKW72bHu8uKlMjPIb2VLMI.jpg',
        'O talentoso motorista de fuga Baby confia nas batidas de sua própria trilha sonora para ser o melhor que existe.
         A música silencia um zumbido que o perturba desde um acidente na infância. Após conhecer a mulher dos seus sonhos, ele reconhece uma oportunidade de se livrar do estilo de vida questionável e recomeçar do zero. 
         Obrigado a trabalhar para um chefão do crime, Baby lida com a música ao mesmo tempo em que um golpe fadado ao fracasso ameaça sua vida, seu amor e sua liberdade.',
        7.5
    )";

if ($bd->exec($sql))
    echo "\nfilmes inseridos com sucesso\n";
else
    echo"\nerro ao inserir filmes\n";







?>

<?php include "cabecalho.php"?>

<?php 

$bd = new SQLite3("filmes.db");
$sql = "SELECT * FROM filmes";                      
$filmes = $bd->query($sql);



$filme1 = [
  "titulo" =>"Vingadores: Guerra Infinita",
  "nota" => "9,7",
  "sinopse" => "Enquanto os Vingadores e seus aliados continuam protegendo o mundo de ameaças grandes demais para qualquer herói, um novo perigo surgiu das sombras cósmicas: Thanos. Déspota da infâmia intergaláctica, seu objetivo é coletar todas as seis Pedras do Infinito, artefatos de poder inimaginável, e usá-las para infligir sua vontade distorcida a toda a realidade. Tudo o que os Vingadores lutaram levou até esse momento - o destino da Terra e da própria existência nunca foi tão incerto.",
  "poster" => "https://image.tmdb.org/t/p/original/89QTZmn34iwXYeCpVxhC9UrT8sX.jpg"];

$filme2 = [
  "titulo" =>"Alladin",
  "nota" => "8,4",
  "sinopse" => "Um jovem humilde descobre uma lâmpada mágica, com um gênio que pode lhe conceder desejos. Agora o rapaz quer conquistar a moça por quem se apaixonou, mas o que ele não sabe é que a jovem é uma princesa que está prestes a se noivar. Agora, com a ajuda do gênio, ele tenta se passar por um príncipe para conquistar o amor da moça e a confiança de seu pai.",
  "poster" => "https://image.tmdb.org/t/p/original/jdsjXjifxJ0DUz8LKdMQOTAIHgo.jpg"];

  $filme3 = [
   "titulo" =>"Baby Drive",
   "nota" => "7,5",
   "sinopse" => "O talentoso motorista de fuga Baby confia nas batidas de sua própria trilha sonora para ser o melhor que existe. A música silencia um zumbido que o perturba desde um acidente na infância. Após conhecer a mulher dos seus sonhos, ele reconhece uma oportunidade de se livrar do estilo de vida questionável e recomeçar do zero. Obrigado a trabalhar para um chefão do crime, Baby lida com a música ao mesmo tempo em que um golpe fadado ao fracasso ameaça sua vida, seu amor e sua liberdade.",
   "poster" => "https://image.tmdb.org/t/p/original/rmnQ9jKW72bHu8uKlMjPIb2VLMI.jpg"];
  
$filme4 = [
  "titulo" =>"Star Wars: Os Últimos Jedi",
  "nota" => "6,0",
  "sinopse" => "A tranquila e solitária vida de Luke Skywalker sofre uma reviravolta quando ele conhece Rey, uma jovem que mostra fortes sinais da Força. O desejo dela de aprender o estilo dos Jedi força Luke a tomar uma decisão que mudará sua vida para sempre. Enquanto isso, Kylo Ren e o General Hux lideram a Primeira Ordem para um ataque total contra Leia e a Resistência pela supremacia da galáxia.",
  "poster" => "https://image.tmdb.org/t/p/original/2iGN0aKHJYD0xQydlfuCUAcgNbO.jpg"];





  //$filmes = [$filme1, $filme2, $filme3, $filme4];

?>

<body>
<nav class="nav-extended pink lighten-2">
    <div class="nav-wrapper">
    <ul id="nav-mobile" class="right">
        <li><a href="galeria.php">Galeria</a></li>
        <li><a href="cadastrar.php">Cadastrar</a></li>
      </ul>
    </div>
    <div class="nav-header center">
        <h1>CLOROCINE</h1>
    </div>
    <div class="nav-content ">
      <ul class="tabs tabs-transparent pink darken-2">
        <li class="tab"><a class="active" href="#test1">Todos</a></li>
        <li class="tab"><a href="#test2">Assistidos</a></li>
        <li class="tab"><a href="#test3">Favoritos</a></li>
      </ul>
    </div>
  </nav>
 
 <div class="row">

    <?php while($filme = $filmes->fetchArray()) : ?>
  

      <div class="col s3">
          <div class="card hoverable">
              <div class="card-image">
                  <img src="<?= $filme ["poster"] ?>">
                  <a class="btn-floating halfway-fab waves-effect waves-light red">
                    <i class="material-icons">favorite_border</i>
                  </a>
              </div>
              <div class="card-content">
                <p lass="valing-wrapper">
                  <i class="material-icons amber-text">star</i><?= $filme ["nota"] ?>
                </p>
                <span class="card-title"> <?= $filme ["titulo"] ?> </span>
                <p><?= $filme ["sinopse"] ?></p>
              </div>
          </div>
      </div>
      <?php endwhile ?>
</div>
  
  
 
 
 
    
</body>
</html>
<?php include "cabecalho.php" ?>

<body>

    <nav class="nav-extended pink lighten-2">
        <div class="nav-wrapper">
            <ul id="nav-mobile" class="right">
                <li><a href="/">Galeria</a></li>
                <li class="active"><a href="/new">Cadastrar</a></li>
            </ul>
            <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        </div>
        <div class="nav-header center">
            <h1>CLOROCINE</h1>
        </div>
        <div class="nav-content">
            <ul class="tabs tabs-transparent pink darken-2">
                <li class="tab"><a class="active" href="#test1">Todos</a></li>
                <li class="tab"><a href="#test2">Assistidos</a></li>
                <li class="tab"><a href="#test3">Favoritos</a></li>
            </ul>
        </div>
    </nav>

    <div class="row">
        <form method="POST" enctype="multipart/form-data">
            <div class="col s6 offset-s3">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Cadastrar filme</span>

                        <!-- Title input-->
                        <div class="row">
                            <div class="input-field col s12">
                                <input id="title" name="title" type="text" class="validate" required>
                                <label for="title">Titulo do Filme</label>
                            </div>
                        </div>

                        <!-- Synopsis input-->
                        <div class="row">
                            <div class="input-field col s12">
                                <textarea id="synopsis" name="synopsis" class="materialize-textarea"></textarea>
                                <label for="synopsis">Sinopse</label>
                            </div>
                        </div>

                        <!-- Note input-->
                        <div class="row">
                            <div class="input-field col s4">
                                <input id="note" name="note" type="number" step=".1" min=0 max=10 class="validate" required>
                                <label for="note">Nota</label>
                            </div>
                        </div>

                        <!-- Poster input -->
                        <div class="file-field input-field">
                            <div class="btn pink accent-3">
                                <span>Poster</span>
                                <input type="file" name="poster_file">
                            </div>
                            <div class="file-path-wrapper">
                                <input name="poster" class="file-path validate" type="text">
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="input-field col s12">
                                <input id="poster" name="poster" class="file-path validate" type="url" required>
                                <label for="poster">https://</label>
                            </div>
                        </div> -->
                    </div>
                    <div class="card-action">
                        <a href="/" class="waves-effect waves-light btn grey lighten-1">Cancelar</a>
                        <button type="submit" class="waves-effect waves-light btn pink accent-3">Confirmar</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
</body>

</html>
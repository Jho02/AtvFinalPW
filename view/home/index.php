<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="../../css/bootstrap.css">
</head>

<body class="bg-secondary">
    <div class="container-fluid col-xl-12 bg-secondary">
        <div class=" px-1 py-0 mt-1 my-0  bg-light shadow rounded ">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse">
                    <li class="nav-item navbar navbar-brand bg-success px-1 py-0 rounded-sm  ">
                        <a href="#" class="font-weight nav-link lead text-dark">Home</a>
                    </li>
                    <ul class="navbar-nav nav nav-tabs">
                        <li class="nav-item dropdown mx-5">
                            <a class="nav-link lead dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="#">Estoque</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Produtos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Vendas</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown  mx-5 ">
                            <a class="nav-link lead dropdown-toggle" role="button" href="#"  id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Alteração </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <p><a class="dropdown-item" href="#">Estoque</a></p>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Produtos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Vendas</a>
                            </div>
                        </li>
                        <li class="nav-item dropdown mx-5 ">
                            <a class="nav-link lead dropdown-toggle" role="button" href="#" id="navbarDropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Exclusão </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown"> 
                                <a class="dropdown-item" href="#">Estoque</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Produtos</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <li class="nav-item navbar text-right">
                    <a href="#" class="nav-link navbar-brand text-danger">Sair</a>
                </li>
            </nav>


        </div>
        <div class="row bg-white mx-5 px-5  my-1 col-lg-11 rounded-sm " style="height: 570px; ">
            <div class="col-lg-5 row py-3  mx-2 ">
                <h4 class=" font-weight-light pt-3 pl-5 bd-title">Produtos Cadastrados</h4>
                <hr class="mt-3 mb-3" />
            </div>
            <div class="mx-auto pt-3 pb-2 row">
                <span class="border"></span>
            </div>
            <div class="col-lg-5 row py-3  mx-2">
                <h4 class=" font-weight-light pt-3  bd-title pl-5">Estoque de Produtos</h4>
            </div>
        </div>

    </div>
    

    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>
  



</body>

</html>
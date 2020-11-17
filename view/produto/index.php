<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/bootstrap.css">
    <link rel="stylesheet" href="../../css/style.css">

    <title> Cadastro produto </title>
</head>
<body class="bg-secondary">
    <div class="container-fluid col-xl-12 bg-secondary">
        <div class=" px-1 py-0 mt-1 my-0  bg-light shadow rounded ">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="collapse navbar-collapse">
                    <li class="nav-item navbar navbar-brand bg-success px-1 py-0 rounded-sm  ">
                        <a href="../home/index.php" class="font-weight nav-link lead text-dark">Home</a>
                    </li>
                    <ul class="navbar-nav nav nav-tabs">
                        <li class="nav-item dropdown mx-5">
                            <a class="nav-link lead dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cadastro </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                               <a class="dropdown-item" href="../estoque/index.php">Estoque</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="index.php">Produtos</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="../venda/index.php">Vendas</a>
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
                    <a href="../login/index.php" class="nav-link navbar-brand text-danger">Sair</a>
                </li>
            </nav>
        </div>
  

   
        <div class="row bg-white mx-5 px-5  my-1 col-lg-11 rounded-sm " style="height: 570px; ">
           
      
            <form class="my-3 mx-auto col-lg-6">

                <h1 class="py-lg-2 font-weight-light display-5 text-center">Bugigangas do Paraguai</h1>
                <h4 class=" font-weight-light py-3 pl-5 bd-title text-center ">Cadastro do produto</h4>

                <div class="form-group ">
                <label for="exampleInputText1">Nome do produto</label>
                <input type="text" class="form-control" id="exampleInputEmail1">
                </div>

                <div class="form-group">
                <label for="exampleInputNum1">Preço</label>
                <input type="number" class="form-control" id="exampleInputPassword1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Descrição</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>

                <div class="form-row ">
                    <div class="col-lg-5 my-3 mx-auto">
                        <button type="submit" class="btn btn-success btn-lg">Cadastrar</button>
                    </div>
                </div>
            </form>
    </div>

    <script src="../../node_modules/jquery/dist/jquery.js"></script>
    <script src="../../node_modules/popper.js/dist/umd/popper.js"></script>
    <script src="../../node_modules/bootstrap/dist/js/bootstrap.js"></script>
    <script src="../../node_modules/sweetalert2/dist/sweetalert2.all.js"></script>

</body>
</html>
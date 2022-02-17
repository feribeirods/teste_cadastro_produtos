<?php
	$acao = 'recuperar';

	require '../../application/controller.php';

    $url = 'http://localhost/cadastro_produtos_promobit'

    

	
//	echo '<pre>';
//	print_r($produtos);
//	echo '</pre>';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Pooduto</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


</head>
<body>

<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="<?= $url . '/public/view/index.php' ?>">Cadastro de Produtos</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item dropdown me-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Cadastrar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="<?= $url . '/public/view/cadastrar.php' ?>">Produtos</a></li>
                    <li><a class="dropdown-item" href="<?= $url . '/public/view/cadastrar_tags.php' ?>">Tags</a></li>
                </ul>
                </li>
                <li class="nav-item dropdown me-5">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Listar
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item" href="<?= $url . '/public/view/listar_produtos.php' ?>">Produtos</a></li>
                    <li><a class="dropdown-item" href="<?= $url . '/public/view/listar_tags.php' ?>">Tags</a></li>
                </ul>
                </li>       
            </ul>
        </div>
    </div>
    </nav>
</header>


<div class="container mb-5">

    <section class="row justify-content-center mt-5">
        <div class="col-8">
            <h1>Produtos Cadastrados</h1>
            <p class="text-secondary">Estes são os produtos cadastrados até o momento.</p>
        </div>    
    </section>

    <section class="row justify-content-center">
        <div  class="col-8">
           
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <?php foreach($produtos as $prod) { ?>
                    <div class="col">
                        <div class="card h-100">
                        <img src="../img/placeholder.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?= $prod['name'] ?></h5>
                            <div class="d-flex flex-wrap">
                                <?php foreach($tagsProdutos as $tags) {
                                    if($tags['product_id'] == $prod['id']) {
                                    ?>
                                    <span class="badge rounded-pill bg-secondary mb-1 me-1"><?=$tags['name']?></span>
                                <?php } } ?>
                            </div>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex justify-content-between">
                            <a style="text-decoration: none; color: #FFF;" href="editar_produtos.php/?id_produto=<?=$prod['id']?>"><button class="btn btn-success" type="button">Editar</button></a>
                                <a style="text-decoration: none; color: #FFF;" href="../../application/controller.php/?acao=excluir&id_produto=<?=$prod['id']?>"><button class="btn btn-danger" type="button">Excluir</button></a>
                            </div>
                        </div>
                        </div>
                    </div>   
                <?php } ?>
            </div>


        </div>    
    </section>
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
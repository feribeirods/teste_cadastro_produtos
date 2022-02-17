<?php
	$acao = 'editar';

	require '../../application/controller.php';

    $url = 'http://localhost/cadastro_produtos_promobit'
    

	
//	echo '<pre>';
//	print_r($produto);
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


<div class="container">

    <section class="row justify-content-center mt-5">
        <div class="col-lg-8 col-sm-12">
            <h1>Editar Produto</h1>
            <p class="text-secondary">Edite o produto cadastrado anteriormente.</p>
        </div>    
    </section>

    <section class="row justify-content-center">
        <div  class="col-lg-8 col-sm-12">
            <form action="../../../application/controller.php" method="post">
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nome do Produto:</span>
                    <input type="text" class="form-control" name="nome_produto" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="<?= $produto[0]['name']?>">
                    <input type="text" name="id_produto" value="<?= $_GET['id_produto'] ?>" hidden>

                    <button class="btn btn-primary" type="submit">Salvar</button>
                </div>
                <div class="input-grup">
                    <h6>Selecione as Tags a serem relacionadas a esse produto:</h6>
                    <?php foreach($tags as $key => $tag) { ?>
                    <div class="form-check form-switch">
                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault" name="<?=$tag['id']?>"
                        
                        <?php foreach($tagsProdutos as $tags) { 
                                if($tags['id'] == $tag['id']) {
                                    echo 'checked';
                                } else {
                                    echo "";
                                }
                            
                            
                        }?>
                        
                        >
                        <label class="form-check-label" for="flexSwitchCheckDefault"><span class="badge rounded-pill bg-secondary"><?=$tag['name']?></span></label>

                        
                    </div>
                    <?php } ?>
                </div>
            </form>
        </div>    
    </section>
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php
	$acao = 'cadastrar';

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
    </div>
    </nav>
</header>


<div class="container">

    <section class="row justify-content-center mt-5">
        <div class="col-12">
            <h1>Bem vindo ao Sistema de Cadastro de Produtos</h1>
            <p class="text-secondary">Selecione uma opção para prosseguir.</p>
        </div>    
    </section>

    <section class="row justify-content-center">
        <div  class="col-12">
            <a href="<?= $url . '/public/view/cadastrar.php' ?>"><button type="button" class="btn btn-primary rounded-pill">Cadastrar Produtos</button></a>
            <a href="<?= $url . '/public/view/listar_produtos.php' ?>"><button type="button" class="btn btn-success rounded-pill">Listar Todos os Produtos</button></a>
            <a href="<?= $url . '/public/view/cadastrar_tags.php' ?>"><button type="button" class="btn btn-warning rounded-pill">Cadastrar Tags</button></a>
            <a href="<?= $url . '/public/view/listar_tags.php' ?>"><button type="button" class="btn btn-info rounded-pill">Listar Todas as Tags</button></a>
        </div>    
    </section>
</div>

    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
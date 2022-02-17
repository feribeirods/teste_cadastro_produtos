<?php

require "model.php";

if(isset($_POST['nome_produto']) && $_POST['nome_produto'] != "" && isset($_POST['id_produto']) && $_POST['id_produto'] != "") {

    print_r($_POST);

    $produto = (new Model)->updateProduto($_POST['nome_produto'], $_POST['id_produto']);

    $tags = (new Model)->buscaTags();

    for ($i = 0; $i <= end($tags)['id']; $i++) {
        
        if(isset($_POST[$i]) && $_POST[$i] == 'on') {
            (new Model)->insereProdutoTag($_POST['id_produto'], $i);
        } else {
            (new Model)->deleteProdutoTag($_POST['id_produto'], $i);
        }
        
    }    

    header('Location: http://localhost/cadastro_produtos_promobit/public/view/listar_produtos.php');

} else if(isset($_POST['nome_tag']) && $_POST['nome_tag'] != "" && isset($_POST['id_tag']) && $_POST['id_tag'] != "") {
    $produto = (new Model)->updateTag($_POST['nome_tag'], $_POST['id_tag']);

    header('Location: http://localhost/cadastro_produtos_promobit/public/view/listar_tags.php');

} else if(isset($_POST['nome_produto']) && $_POST['nome_produto'] != "") {
    (new Model)->insereProduto($_POST['nome_produto']);

    header('Location: http://localhost/cadastro_produtos_promobit/public/view/listar_produtos.php');

} else if(isset($_POST['nome_tag']) && $_POST['nome_tag'] != "") {
    (new Model)->insereTag($_POST['nome_tag']);

    header('Location: http://localhost/cadastro_produtos_promobit/public/view/listar_tags.php');

} else if(isset($_GET['acao']) && $_GET['acao'] == 'excluir') {
    $produto = (new Model)->deleteProdutoById($_GET['id_produto']);

    header('Location: http://localhost/cadastro_produtos_promobit/public/view/listar_produtos.php');

} else if(isset($_GET['acao']) && $_GET['acao'] == 'excluir-tag') {
    $produto = (new Model)->deleteTagById($_GET['id_tag']);

    header('Location: http://localhost/cadastro_produtos_promobit/public/view/listar_tags.php');

} else if($acao == 'recuperar') {
    $produtos = (new Model)->buscaProdutos();

    $tagsProdutos = (new Model)->buscaTagsProdutos();

} else if($acao == 'recuperar-tags') {
    $tags = (new Model)->buscaTags();

} else if($acao == 'editar') {

    $produto = (new Model)->buscaProdutoById($_GET['id_produto']);
    $tags = (new Model)->buscaTags();

    $tagsProdutos = (new Model)->buscaTagsProdutosByIdProduto($_GET['id_produto']);

} else if($acao == 'editar-tag') {
    $tag = (new Model)->buscaTagById($_GET['id_tag']);

} 

?>
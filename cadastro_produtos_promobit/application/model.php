<?php

require "conexao.php";

class Model {

    public function insereProduto($nome_produto) {

        $parameters[':nome_produto'] = $nome_produto;
        
        $sql = "INSERT IGNORE INTO product (name) VALUES (:nome_produto)";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);
    }

    public function insereTag($nome_tag) {

        $parameters[':nome_tag'] = $nome_tag;
        
        $sql = "INSERT IGNORE INTO tag (name) VALUES (:nome_tag)";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);
    }

    public function insereProdutoTag($id_produto, $id_tag) {

        $parameters[':id_produto'] = $id_produto;
        $parameters[':id_tag'] = $id_tag;
        
        $sql = "INSERT IGNORE INTO product_tag (product_id, tag_id) VALUES (:id_produto, :id_tag)";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);
    }

    public function buscaProdutos() {       
        
        $sql = "SELECT * FROM product";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function buscaTags() {       
        
        $sql = "SELECT * FROM tag ORDER BY id";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function buscaProdutoById($id_produto) { 
        
        $parameters[':id_produto'] = $id_produto;
        
        $sql = "SELECT * FROM product WHERE id = :id_produto";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function buscaTagById($id_tag) { 
        
        $parameters[':id_tag'] = $id_tag;
        
        $sql = "SELECT * FROM tag WHERE id = :id_tag";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function updateProduto($nome_produto, $id_produto) {
            
        $parameters[':nome_produto'] = $nome_produto;
        $parameters[':id_produto'] = $id_produto;
        
        $sql = "UPDATE product SET name = :nome_produto WHERE id = :id_produto";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function updateTag($nome_tag, $id_tag) {
            
        $parameters[':nome_tag'] = $nome_tag;
        $parameters[':id_tag'] = $id_tag;
        
        $sql = "UPDATE tag SET name = :nome_tag WHERE id = :id_tag";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function deleteProdutoById($id_produto) { 

        $this->deleteTodosProdutosTags($id_produto);
        
        $parameters[':id_produto'] = $id_produto;
        
        $sql = "DELETE FROM product WHERE  id = :id_produto;";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function deleteTagById($id_tag) { 

        $this->deleteTodosTagsProdutos($id_tag);
        
        $parameters[':id_tag'] = $id_tag;
        
        $sql = "DELETE FROM tag WHERE  id = :id_tag;";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function deleteProdutoTag($id_produto, $id_tag) { 
        
        $parameters[':id_produto'] = $id_produto;
        $parameters[':id_tag'] = $id_tag;
        
        $sql = "DELETE FROM product_tag WHERE  tag_id = :id_tag AND product_id = :id_produto;";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function buscaTagsProdutos() {
        
        $sql = "SELECT * FROM product_tag pt LEFT JOIN tag t ON t.id = pt.tag_id";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute();

        return $query->fetchAll();
    }

    public function buscaTagsProdutosByIdProduto($id_produto) {

        $parameters[':id_produto'] = $id_produto;
        
        $sql = "SELECT * FROM product_tag pt LEFT JOIN tag t ON t.id = pt.tag_id WHERE pt.product_id = :id_produto";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function deleteTodosProdutosTags($id_produto) {

        $parameters[':id_produto'] = $id_produto;
        
        $sql = "DELETE FROM product_tag WHERE  product_id = :id_produto;";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }

    public function deleteTodosTagsProdutos($id_tag) {

        $parameters[':id_tag'] = $id_tag;
        
        $sql = "DELETE FROM product_tag WHERE tag_id = :id_tag;";

        $query = (new Conexao)->conectar()->prepare($sql);
        $query->execute($parameters);

        return $query->fetchAll();
    }
}

?>
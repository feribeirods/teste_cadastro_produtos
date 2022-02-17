# teste_cadastro_produtos
Criação de um CRUD de produtos e tags.

Basta clonar o repositório e abrir no localhost/cadastro_produtos_promobit/public/view.

O SQL de extração de relatório de relevancia de produtos é o seguinte: 

"SELECT *, COUNT(distinct p.id) as qtd_produtos FROM product_tag pt LEFT JOIN tag t ON t.id = pt.tag_id LEFT JOIN product p ON p.id = pt.product_id GROUP BY t.name;"


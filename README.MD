# CRUD BÁSICO COM PDO, POSTGRESQL E BOOTSTRAP 5.1


## PROJETO INDIVIDUAL BASEADO NO ACRÔNIMO CRUD(Create, Read, Update, Delete)

O projeto é intitulado 'Gestão de Produtos', mas o objetivo principal é cumprir as regras básicas de qualquer crud, sendo adaptável a outros exemplos básicos de bases de dados.

Seguindo a direção de um projeto Java desenvolvido em uma disciplina de POO, decidi aplicar os conceitos na prática também em PHP.
No princípio, a intenção era apenas praticar o desenvolvimento em back-end, mas após um excelente Workshop focado em BootStrap, os detalhes do front-end receberam a devida atenção.


### Observações

As requisições são enviadas diretamente para objetos instanciados da Classe Db, uma vez que seu método construtor está preparado para receber um número pré-determinado de valores. Portanto para o correto funcionamento dessa aplicação, recomendo criar um banco de dados em PostgreSQL com o nome 'produtos', suas tabelas com os nomes 'id_produto'(SERIAL), 'descricao', 'valor', 'disponivel'.
```sql
CREATE TABLE tbl_produtos (
 id_produto SERIAL PRIMARY KEY,
 descricao varchar(30) NOT NULL,
 valor integer NOT NULL,
 disponivel char(1) NOT NULL,
);
```

Ou, caso deseje utilizar algum banco em sua disposição, será necessário personalizar o método construct da Classe **Db**(Database), os inputs/outputs da pasta **view**, e as requisições $_POST da pasta **control**.
A pasta **model** contém apenas a Classe Produtos, que está a disposição para instanciar objetos, porém, neste projeto praticamente não foi preciso, visto que as requisições são tratadas diretamente nos objetos instanciados pela Classe Db().

### Agradecimento

Deixo aqui meu enorme agradecimento ao Prof. Dr. Fernando Mattioli, por compartilhar conhecimentos valiosos e sempre se dispor a esclarecer as minhas dúvidas.

​	



Mudei novamente para teste

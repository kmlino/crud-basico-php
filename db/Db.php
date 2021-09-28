<?php
class Db {
    private $_dbHostname = "localhost";
    private $_dbName = "produtos";
    private $_dbUsername = "postgres";
    private $_dbPassword = "123456";
    private $_con;

    public function Db(){
        try{
            $this->_con = new PDO("pgsql:host=$this->_dbHostname;port=5433;dbname=$this->_dbName",$this->_dbUsername,$this->_dbPassword);
            $this->_con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(Exception $e){
            echo "Falha na conexão: ". $e->getMessage();
            print_r($e);
        }
    }

    public function inserir($dbDesc, $dbVal, $dbDisp){
        try{
            $sql = "INSERT INTO tbl_produtos(descricao, valor, disponivel)
            VALUES(:descricao, :valor, :disponivel)";
            $stmt = $this->_con->prepare($sql);
            $stmt->bindParam(':descricao', $dbDesc);
            $stmt->bindParam(':valor', $dbVal);
            $stmt->bindParam(':disponivel', $dbDisp);
            $stmt->execute();
            echo "Cadastro inserido com sucesso!!";
        } catch(PDOException $e){
            echo "Não foi possível, tente novamente!\n";
            echo $e->getMessage();
        }

    }

    public function listar(){
        try{
            $sql = "SELECT * FROM tbl_produtos ORDER BY id_produto ASC";
            $list = $this->_con->prepare($sql);
            $list->execute();
            $list = $list->fetchAll();
            return $list;
        } catch(PDOException $e){
            echo($e->getMessage());
        }
    }

    public function remover($id){
        try{
            $sql = "DELETE FROM tbl_produtos WHERE id_produto = ?";
            $excluir = $this->_con->prepare($sql);
            $excluir->execute([$id]);
            header('Location: ../?i=remover');
        } catch(PDOException $e){
            echo($e->getMessage());
        }
        
    }

    public function atualizar($dbId, $dbDesc, $dbVal, $dbDisp){
        try{
            $sql = "UPDATE tbl_produtos
            SET descricao = :descricao,
            valor = :valor, 
            disponivel = :disponibilidade
            WHERE id_produto = :id";
            $stmt = $this->_con->prepare($sql);
            $stmt->bindParam(':descricao', $dbDesc, PDO::PARAM_STR);
            $stmt->bindParam(':valor', $dbVal, PDO::PARAM_INT);
            $stmt->bindParam(':disponibilidade', $dbDisp, PDO::PARAM_INT);
            $stmt->bindParam(':id', $dbId, PDO::PARAM_INT);
            $stmt->execute();
            // return $stmt->rowCount();
            echo "Cadastro atualizado com sucesso!";
        } catch(PDOException $e){
            echo ("Falha ao atualizar:". $e->getMessage());
        }
    }

    public function retornarConexao(){
        return $this->_con;
    }


}
?>


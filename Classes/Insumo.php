<?php

class Insumo {

    private $db;
    private $codigoIten;
    private $nomeItem1;
    private $nomeItem2;
    private $nomeItem3;
    private $nomeItem4;
    private $nomeItem5;
    private $nomeItem6;
    private $nomeItem7;
    private $nomeItem8;
    private $nomeItem9;
    private $nomeItem10;

    public function __construct($db, $codigoIten, $nomeItem1, $nomeItem2, $nomeItem3, $nomeItem4, $nomeItem5, $nomeItem6, $nomeItem7, $nomeItem8, $nomeItem9, $nomeItem10)
    {
        $this->db = $db;
        $this->codigoIten = $codigoIten;
        $this->nomeItem1 = $nomeItem1;
        $this->nomeItem2 = $nomeItem2;
        $this->nomeItem3 = $nomeItem3;
        $this->nomeItem4 = $nomeItem4;
        $this->nomeItem5 = $nomeItem5;
        $this->nomeItem6 = $nomeItem6;
        $this->nomeItem7 = $nomeItem7;
        $this->nomeItem8 = $nomeItem8;
        $this->nomeItem9 = $nomeItem9;
        $this->nomeItem10 = $nomeItem10;
    }

    // GET & SET
    public function getcodigoIten()
    { //codigoIten
        return $this->codigoIten;    // $this quer dizer que o campo codigoIten reside [ou est�] na mema classeem que o campo est� acessado.
    }

    public function setcodigoIten($codigoIten)
    { //codigoIten
        $this->codigoIten = $codigoIten;
    }

    // GET & SET
    public function getNomeItem1()
    { // pega o valor do atributo do objeto em que a fun��o est� inserida.
        return $this->nomeItem1;
    }

    public function setNomeItem1($nomeItem1)
    { // atribui o valor ao atributo da classe e n�o no banco - ou seja est� operqando apenas na camada l�gica.
        $this->nomeItem1 = $nomeItem1;
    }

    // GET & SET
    public function getNomeItem2()
    { //nomeItem2
        return $this->nomeItem2;
    }

    public function setNomeItem2($nomeItem2)
    { //nomeItem2
        $this->nomeItem2 = $nomeItem2;
    }

    // GET & SET
    public function getNomeItem3()
    { //nomeItem3
        return $this->nomeItem3;
    }

    public function setNomeItem3($nomeItem3)
    { //nomeItem3
        $this->nomeItem3 = $nomeItem3;
    }

    // GET & SET
    public function getNomeItem4()
    { //nomeItem4
        return $this->nomeItem4;
    }

    public function setNomeItem4($nomeItem4)
    { //nomeItem4
        $this->nomeItem4 = $nomeItem4;
    }

    // GET & SET
    public function getNomeItem5()
    { //nomeItem5
        return $this->nomeItem5;
    }

    public function setNomeItem5($nomeItem5)
    { //nomeItem5
        $this->nomeItem5 = $nomeItem5;
    }

    // GET & SET
    public function getNomeItem6()
    { //nomeItem6
        return $this->nomeItem6;
    }

    public function setNomeItem6($nomeItem6)
    { //nomeItem6
        $this->nomeItem6 = $nomeItem6;
    }

    // GET & SET
    public function getNomeItem7()
    { //nomeItem7
        return $this->nomeItem7;
    }

    public function setNomeItem7($nomeItem7)
    { //nomeItem7
        $this->nomeItem7 = $nomeItem7;
    }

    // GET & SET
    public function getNomeItem8()
    { //nomeItem8
        return $this->nomeItem8;
    }

    public function setNomeItem8($nomeItem8)
    { //nomeItem8
        $this->nomeItem8 = $nomeItem8;
    }

    // GET & SET
    public function getNomeItem9()
    { //nomeItem9
        return $this->nomeItem9;
    }

    public function setNomeItem9($nomeItem9)
    { //nomeItem9
        $this->nomeItem9 = $nomeItem9;
    }

    // GET & SET
    public function getNomeItem10()
    { //nomeItem10
        return $this->nomeItem10;
    }

    public function setNomeItem10($nomeItem10)
    { //nomeItem10
        $this->nomeItem10 = $nomeItem10;
    }

    public function __destruct()
    {
        
    }

    public function incluirInsumo()
    {
        //return "INSERT INTO produto(produto_desc, produto_cnpj, Cidade_idCidade, produto_data) VALUES('" . $this->getNomeItem1() . "', '" . $this->getNomeItem2() . "', " . $this->getNomeItem3() . ", '" . date("Y-m-d H:i:s") . "')";
        //return $this->db;
        try {
            $stmt = $this->db->prepare('INSERT INTO produto(produto_desc, unidade_de_medida_idunidade_de_medida) VALUES(?, ?)');
            $stmt->bindValue(1, $this->getNomeItem1());
            $stmt->bindValue(2, $this->getNomeItem2());
            #$stmt->bindValue(4, date("Y-m-d H:i:s"));
            $stmt->execute();
            //$stmt->debugDumpParams();
            $this->codigoIten = $this->db->lastInsertId();
        } catch (PDOException $e) {
            $stmt->rollBack();
            throw $e;
            echo 'exceção:' . $e;
        }
    }

    public function buscarInsumo()
    {
        //echo 'SELECT * FROM produto f, Cidade c, Estado e WHERE idproduto = ' . $this->getcodigoIten() . ' AND f.Cidade_idCidade = c.idCidade AND c.Estado_idEstado = e.idEstado';
        try {

            $stmt = $this->db->prepare('SELECT * FROM produto p, unidade_de_medida um  WHERE idproduto = ? AND p.unidade_de_medida_idunidade_de_medida = um.idunidade_de_medida');
            $stmt->bindValue(1, $this->getcodigoIten());
            $stmt->execute();
            $stmt->bindColumn('idproduto', $id);
            $stmt->bindColumn('produto_desc', $txt1);
            $stmt->bindColumn('unidade_de_medida_idunidade_de_medida', $txt2);
            $stmt->bindColumn('unidade_de_medida_desc', $txt3);
            $stmt->bindColumn('unidade_de_medida_cod', $txt4);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->fetch();
            session_start(valida . php);
            $_SESSION["iditem"] = $id;
            $_SESSION["txt1"] = $txt1;
            $_SESSION["txt2"] = $txt2;
            $_SESSION["txt3"] = $txt3;
            $_SESSION["txt4"] = $txt4;
        } catch (PDOException $e) {
            $stmt->rollBack();
            throw $e;
            echo 'exceção:' . $e;
        }
    }

    public function listarInsumos()
    {

        $stmt = $this->db->prepare('SELECT * FROM produto p, unidade_de_medida um  WHERE p.unidade_de_medida_idunidade_de_medida = um.idunidade_de_medida ORDER BY produto_desc');
        $stmt->execute();
        $stmt->bindColumn('idproduto', $iditem);
        $stmt->bindColumn('produto_desc', $txt1);
        $stmt->bindColumn('unidade_de_medida_idunidade_de_medida', $txt2);
        $stmt->bindColumn('unidade_de_medida_desc', $txt3);
        $stmt->bindColumn('unidade_de_medida_cod', $txt4);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $indice = 1;
        $counter = 0;
        session_start();
        #Criamos as sessões fora do escopo do laço
        $_SESSION['idproduto'] = array();
        $_SESSION['produto_desc'] = array();
        $_SESSION['unidade_de_medida_idunidade_de_medida'] = array();
        $_SESSION['unidade_de_medida_desc'] = array();
        $_SESSION['unidade_de_medida_cod'] = array();
        #fazemos um laço sobre o result set
        while ($row = $stmt->fetch())
        {           
            #injetamos os resultados na sessão
            $_SESSION['idproduto'][$counter] = $iditem;
            $_SESSION['produto_desc'][$counter] = $txt1;
            $_SESSION['unidade_de_medida_idunidade_de_medida'][$counter] = $txt2;
            $_SESSION['unidade_de_medida_desc'][$counter] = $txt3;
            $_SESSION['unidade_de_medida_cod'][$counter] = $txt4;
          
            $indice++;
            $counter++;
        }
        $_SESSION['ponteiro'] = $indice;
    }
}
?>


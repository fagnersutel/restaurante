<?php

class Fornecedor {

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

    public function incluirFornecedor()
    {
        //return "INSERT INTO fornecedor(fornecedor_desc, fornecedor_cnpj, Cidade_idCidade, fornecedor_data) VALUES('" . $this->getNomeItem1() . "', '" . $this->getNomeItem2() . "', " . $this->getNomeItem3() . ", '" . date("Y-m-d H:i:s") . "')";
        //return $this->db;
        try {
            $stmt = $this->db->prepare('INSERT INTO fornecedor(fornecedor_desc, fornecedor_cnpj, Cidade_idCidade, fornecedor_data) VALUES(?, ?, ?, ?)');
            $stmt->bindValue(1, $this->getNomeItem1());
            $stmt->bindValue(2, $this->getNomeItem2());
            $stmt->bindValue(3, $this->getNomeItem3());
            $stmt->bindValue(4, date("Y-m-d H:i:s"));
            $stmt->execute();
            //$stmt->debugDumpParams();
            $this->codigoIten = $this->db->lastInsertId();
        } catch (PDOException $e) {
            $stmt->rollBack();
            throw $e;
            echo 'exceção:' . $e;
        }
    }

    public function buscarFornecedor()
    {
        //echo 'SELECT * FROM fornecedor f, Cidade c, Estado e WHERE idfornecedor = ' . $this->getcodigoIten() . ' AND f.Cidade_idCidade = c.idCidade AND c.Estado_idEstado = e.idEstado';

        try {

            $stmt = $this->db->prepare('SELECT * FROM fornecedor f, Cidade c, Estado e WHERE idfornecedor = ? AND f.Cidade_idCidade = c.idCidade AND c.Estado_idEstado = e.idEstado');
            $stmt->bindValue(1, $this->getcodigoIten());
            $stmt->execute();
            $stmt->bindColumn('idfornecedor', $id);
            $stmt->bindColumn('fornecedor_desc', $txt1);
            $stmt->bindColumn('fornecedor_cnpj', $txt2);
            $stmt->bindColumn('idCidade', $txt3);
            $stmt->bindColumn('CidadeDesc', $txt4);
            $stmt->bindColumn('EstadoDesc', $txt5);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->fetch();
            session_start(valida . php);
            $_SESSION["iditem"] = $id;
            $_SESSION["txt1"] = $txt1;
            $_SESSION["txt2"] = $txt2;
            $_SESSION["txt3"] = $txt3;
            $_SESSION["txt4"] = $txt4;
            $_SESSION["txt5"] = $txt5;
        } catch (PDOException $e) {
            $stmt->rollBack();
            throw $e;
            echo 'exceção:' . $e;
        }
    }

    public function listarFornecedores()
    {

        $stmt = $this->db->prepare('SELECT * FROM fornecedor f, Cidade c, Estado e WHERE f.Cidade_idCidade = c.idCidade AND c.Estado_idEstado = e.idEstado');
        $stmt->execute();
        $stmt->bindColumn('idfornecedor', $iditem);
        $stmt->bindColumn('fornecedor_desc', $txt1);
        $stmt->bindColumn('fornecedor_cnpj', $txt2);
        $stmt->bindColumn('idCidade', $txt3);
        $stmt->bindColumn('CidadeDesc', $txt4);
        $stmt->bindColumn('EstadoDesc', $txt5);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);

        $indice = 1;
        $counter = 0;
        session_start();
        #Criamos as sessões fora do escopo do laço
        $_SESSION['idfornecedor'] = array();
        $_SESSION['fornecedor_desc'] = array();
        $_SESSION['fornecedor_cnpj'] = array();
        $_SESSION['idCidade'] = array();
        $_SESSION['CidadeDesc'] = array();
        $_SESSION['EstadoDesc'] = array();
        #fazemos um laço sobre o result set
        while ($row = $stmt->fetch())
        {
                                                                                    //echo $txt2 + '<br>';
                                                                                    /*$_SESSION[$indice] = array(
                                                                                        'iditem' => $iditem,
                                                                                        'razsocial' => $txt1,
                                                                                        'cnpj' => $txt2,
                                                                                        'cidade' => $txt3,
                                                                                        'cidadedesc' => $txt4,
                                                                                        'estado' => $txt5
                                                                                    );*/
            #injetamos os resultados na sessão
            $_SESSION['idfornecedor'][$counter] = $iditem;
            $_SESSION['fornecedor_desc'][$counter] = $txt1;
            $_SESSION['fornecedor_cnpj'][$counter] = $txt2;
            $_SESSION['idCidade'][$counter] = $txt3;
            $_SESSION['CidadeDesc'][$counter] = $txt4;
            $_SESSION['EstadoDesc'][$counter] = $txt5;
                                                                                    /*
                                                                                      $_SESSION['dados'] .= array(
                                                                                      1 => array(
                                                                                      'iditem' => $iditem,
                                                                                      'razsocial' => $txt1,
                                                                                      'cnpj' => $txt2,
                                                                                      'cidade' => $txt3,
                                                                                      'cidadedesc' => $txt4,
                                                                                      'estado' => $txt5)
                                                                                      );
                                                                                     */
            $indice++;
            $counter++;
        }
        $_SESSION['ponteiro'] = $indice;
                                                                                    /*$i = 1;
                                                                                    while ($i < $indice)
                                                                                    {

                                                                                        echo "<br>" . $_SESSION[$i]['iditem'];
                                                                                        echo "<br>" . $_SESSION[$i]['razsocial'];
                                                                                        echo "<br>" . $_SESSION[$i]['cnpj'];
                                                                                        echo "<br>" . $_SESSION[$i]['cidade'];
                                                                                        echo "<br>" . $_SESSION[$i]['cidadedesc'];
                                                                                        echo "<br>" . $_SESSION[$i]['estado'] . "<br>";
                                                                                        $i++;
                                                                                    }*/
                                                                                    //echo "<br>" . $_SESSION['ponteiro'] . "<br>";
                                                                                    //var_dump($_SESSION['dados'][2]);
                                                                                        /*
                                                                                         * $size = count($_SESSION['Bprodid']);
                                                                                        for ($i = 0; $i < $size; $i++)
                                                                                        {
                                                                                            echo $_SESSION['Bprodid'][$i] . "<br>\n";
                                                                                            echo $_SESSION['Bprodquantity'][$i] . "<br>\n";
                                                                                            echo $_SESSION['Bprodprice'][$i] . "<br><br>\n";
                                                                                        }
                                                                                        */
    }

}
?>


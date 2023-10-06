<?php
namespace ExemploCrudPoo;
use PDO, Exception;

final class Produto {
    private int $id;
    private string $nome;
    private string $descricao;
    private float $preco;
    private int $quantidade;
    private int $fabricanteId;
    private PDO $conexao;

    public function __construct() {
        $this->conexao = Banco::conecta();        
    }

    public function lerProdutos():array {
        $sql = "SELECT 
                    produtos.id,
                    produtos.nome AS produto,
                    produtos.preco,
                    produtos.quantidade,
                    fabricantes.nome AS fabricante
                FROM produtos INNER JOIN fabricantes
                ON produtos.fabricante_id = fabricantes.id
                ORDER BY produto";
    
        try {
            $consulta = $this->conexao->prepare($sql);
            $consulta->execute();
            $resultado = $consulta->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $erro) {
            die("Erro ao carregar produtos: ".$erro->getMessage());
        }
        
        return $resultado;
    }






















    /**
     * Get the value of id
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of nome
     *
     * @return string
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     *
     * @param string $nome
     *
     * @return self
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of descricao
     *
     * @return string
     */
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    /**
     * Set the value of descricao
     *
     * @param string $descricao
     *
     * @return self
     */
    public function setDescricao(string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get the value of preco
     *
     * @return float
     */
    public function getPreco(): float
    {
        return $this->preco;
    }

    /**
     * Set the value of preco
     *
     * @param float $preco
     *
     * @return self
     */
    public function setPreco(float $preco): self
    {
        $this->preco = $preco;

        return $this;
    }

    /**
     * Get the value of quantidade
     *
     * @return int
     */
    public function getQuantidade(): int
    {
        return $this->quantidade;
    }

    /**
     * Set the value of quantidade
     *
     * @param int $quantidade
     *
     * @return self
     */
    public function setQuantidade(int $quantidade): self
    {
        $this->quantidade = $quantidade;

        return $this;
    }

    /**
     * Get the value of fabricanteId
     *
     * @return int
     */
    public function getFabricanteId(): int
    {
        return $this->fabricanteId;
    }

    /**
     * Set the value of fabricanteId
     *
     * @param int $fabricanteId
     *
     * @return self
     */
    public function setFabricanteId(int $fabricanteId): self
    {
        $this->fabricanteId = $fabricanteId;

        return $this;
    }
}
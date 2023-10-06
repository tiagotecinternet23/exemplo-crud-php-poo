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

    
}
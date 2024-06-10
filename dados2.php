<?php

class Caracteristicas {
   
    public $corCabelo;
    public $altura;
    public $corOlho;
    private $peso;
    public $sexo;

       

        public function getPeso(){
            return $this->peso;
        }

        public function setPeso($peso): void
        {
            $this->peso = $peso;
        }



    //  // Construtor inicializando todas as propriedades
    //  public function __construct(string $nome, int $idade, string $emprego, string $dataNascimento) {
    //     $this->nome = $nome;
    //     $this->idade = $idade;
    //     $this->emprego = $emprego;
    //     $this->dataNascimento = $dataNascimento;
       
    // }
    
}

//  HERANÇA 
// Estender todos os atributos e valores da classe anterior, para está , como se fosse genetica pai para filho.

class Pessoa extends Caracteristicas{

    public string $nome;
    public int $idade;
    public string $emprego;
    public string $dataNascimento;
    private string $cpf;

    

    public function __construct(string $nome,int $idade, string $emprego, string $dataNascimento){
        $this->nome == $nome;
        $this->idade == $idade;
        $this->emprego == $emprego;
        $this->dataNascimento == $dataNascimento;
        
    }


   

    private function setCPF(string $cpf) {
        $this->cpf = $cpf;
    }

    public function getCPF()
    {
       return $this->cpf;
    }

    public function trocarCPF(string $nomeCompleto, string $dataNascimento, string $cpf) {
        // Garantir que as propriedades sejam inicializadas antes de acessá-las
        if ($this->nome == $nomeCompleto && $this->dataNascimento == $dataNascimento) {
            $this->setCPF($cpf);
        } else {
            throw new Exception('SEUS DADOS ESTÃO INCORRETOS');
        }
    }


}


$pessoa = new Pessoa('Matheus Reis', 27 , '', '01/07/98');
$pessoa->corCabelo = 'Preto';
$pessoa->sexo = 'M';
$pessoa->altura = 1.82;
$pessoa->setPeso(121);


?>

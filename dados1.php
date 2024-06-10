<?php

class Pessoa {
    public string $nome;
    public int $idade;
    public string $emprego;
    public string $dataNascimento;
    private string $cpf;

    public function __construct(string $nome, int $idade, string $emprego, string $dataNascimento){

        $this-> nome = $nome;
        $this-> idade = $idade;
        $this-> emprego = $emprego;
        $this-> dataNascimento = $dataNascimento;
        // $this -> $cpf = $cpf;
    }

   /*Principio do encapsulamento no POO, que promove o controle sobre como os dados de um objetos são acessados e modificados.

    Getter:  Um método público que retorna o valor de um atributo privado.
    Setter: Um método público que permite modificar o valor de um atributo privado.

    - são utilzados por possuirem:
    1 controle de acesso : Permitem controlar como os atributos são acessados e modificados.
    2 Validações: é possivel antecipar validação antes de faça parte de um novo atributos.
    3 Imutabilidade: Pode evitar a modificação diretas de atributos importante ou sensíveis. 
    4 Manutenção: Facilita a Manutençãoe modificação do código no futuro, pois as mudanças podem ser feitas nos métodos getters e setters sem alterar a interface pública da classe.
    


    */
    //Setters são usados para Definir o valor de um atributo
    private function setCPF(string $cpf)
    {
       $this->cpf = $cpf;

    }
     
    // Getters são usados para obter o valor de um atributo
    public function getCPF()
    {
       return $this->cpf;
    }

    public function trocarCPF(string $nomeCompleto, string $dataNascimento, string $cpf) {
        if ($this -> nome == $nomeCompleto && $this -> dataNascimento == $dataNascimento) {
            $this->setCPF($cpf);
        } else {
            throw new Exception('SEUS DADOS ESTÃO INCORRETOS');
        }
    }
}

    $pessoa = new Pessoa('Matheus', 27, 'Garoto de Programa', '01/02/97');

/*  "try e catch"  são blocos utilizados para lidar com exceções. Eles fazem parte de um mecanismo chamado de tratamento de exceções, que permite que você escreva código para lidar com situações excepcionais de forma controlada.

try =  é utilizado para envolver o código que pode lançar uma exceção (um erro).
catch = é usado para lidar com a exceções que foram lançadas por causa do bloco try.
 - catch (Exception $e){
    echo "Exceção capturada: " . $e->getMessage() . "/n";
 }


 Por que utilizar: 

 1 -  tratamento de Exceções: Permite que você escreva código para lidar com erros e exceções de maneiras estruturada e elegante. 
 
 2 -  prevenção de interrupções Inesperadas: Ajudaa a evitar que erros não tratados interrompam a execução do programa abruptamente.

 3 - Recuperação de Erros: Facilita a recuperação de erros e a exibição de mensagens de erro significativas para o usuários ou para dev. 

 4 - Controle de fluxo: Oferece um controle preciso sobre como seu código reage a diferentes condições excepcionais.

*/
    try{
    $pessoa->trocarCPF(nomeCompleto: 'Matheus Reis', dataNascimento: '01/02/98', cpf: '000.888.888-64');
    echo $pessoa->getCPF();
    }catch(Exception $exception){
        echo $exception ->getMessage();
    }

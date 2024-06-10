<?php

// INTERACES -

/* Interfaces de objetos permitem a criação de códigos que especificam quais métodos uma classe deve implementar, sem definir como esses métodos serão tratados.


Mas então, o que isso significa?

Significa que interfaces são nada mais, nada menos do que modelos de métodos que podemos implementar em uma classe (ou até mesmo estende-lá em outra interface como veremos mais a seguir), e que ao fazer essa implementação a classe passa a ser obrigada à conter os métodos declarados na interface, resultando em um erro caso não seja feito; 


1- Definição de Contratos: interface definem métodos que as classes devem implementar, garantido que as classes que implementam a interface têm um conjunto específico de métodos.
2- Sem implementação: Interface não podem conter implementações de métodos, elas apenas declaram os métodos.
3- Implementação múltipla: Uma classe pode implementar várias interfaces.
4- Consistências: Garante que classes diferentes que implementam a mesma interface tenhm métodos consistentes.


*/

interface PagamentoInterface{

    public function pagar(string $valor): bool;
    public function retornarDadosPagamento(): array;
}



// class abstract são classe que não permite que sejam criadas valores diretos, ela cria-se valor dentro da suas extensões. Ela apenas pode ser extendida não pode ser iniciada.
// caso seja definido implements na class pai , os filhos dessas classe (extends) tambem devem obdecer a interface;
 abstract class MetododePagamento implements PagamentoInterface
{
    public $nome;
    public $endpoint;
    private $chavedeapi;
}

class PaypalService extends MetododePagamento implements PagamentoInterface
{

    public $name = "Paypal";
    public $endpoint = "http://paypal.com";

    public function pagar(string $valor): bool
    {
        // requisição baseada na endpoint;
        // Usando chave da Api

        return true;
    }


    public function retornarDadosPagamento(): array
    {
        return [
            "transaction_id" => 123,
            "amount" => 55,52,

        ];

    }

}

class PagSeguro extends MetododePagamento implements PagamentoInterface
{

    public $name = "PagSeguro";
    public $endpoint = "http://PagSeguro.com";

    public function pagar(string $valor): bool
    {
        // requisição baseada na endpoint;
        // Usando chave da Api
    }


    public function retornarDadosPagamento(): array
    {
        return [
            "transaction_id" => 123,
            "amount" => 55,52,
        ];

    }

}
<?php declare(strict_types=1);

// const SRC_DIR = __DIR__ . 'src\tests\EmailTest.php';

require 'src/Email.php';

use PHPUnit\Framework\TestCase; // precisa disso para reconhecer como teste de unidade
// quando vai fazer esses teste usa o método dos 3A
// Arrange : preparação inical, o codigo do teste
//Act : execulta o código que quer testar
//Assert : verifica o resultado da execulção

final class EmailTest extends TestCase
{

    public function enderecosValidosProvider(): array
    {
        return [
            ['alice@exemplo.com'],
            ['bruno@exemplo.net'],
            ['clara@seila.org']
        ];
    }

    /** 
    * @dataProvider enderecosValidosProvider
    */
    public function testCriarComEnderecoValido(String $endereco): void
    {
        //Arranjo
        //$endereco = 'teste@exemplo.com';
       

        //Ação
        $email = new Email($endereco);
        
        //Asserção
        $this->assertSame($endereco, $email->getEndereco());
    }

    public function testNaoCriarComEnderecoInvalido(): void //para ser reconhecido como teste tem que iniciar com teste no nome
{
    //arranjo
    $endereco = 'endereço.inválido';

    //expectativa (asseção)
    $this->expectException(InvalidArgumentException::class);

    // ação
    $email = new Email($endereco);
}
}
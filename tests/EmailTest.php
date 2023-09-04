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
    public function testCriarComEnderecoValido(): void
    {
        //Arranjo
        $endereco = 'teste@exemplo.com';

        //Ação
        $email = new Email($endereco);
        
        //Asserção
        $this->assertSame($endereco, $email->getEndereco());
    }
}
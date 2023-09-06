<?php declare(strict_types=1); //força o php a chegar aos tipos (tipagem)
// phpinut é a biblioteca de testes e integração do php
final class Email // Se a própria classe estiver definida como final, ela não pode ser estendida.
{
    private string $endereco;

    public function __construct(string $endereco) // O método contrutor é iniciado junto com a classe
    {
        $this->endereco = $endereco;
    }

    public function getUsuario(): string 
    {
        return explode('@', $this->endereco)[0];
    }



    public function getEndereco(): string
    {
        self::validar($endereco); //self se refere a classe em que está
        $this->endereco = $endereco;
    }

    private static function validar(string $endereco)
{
    // Validação burra, apenas verifica se a srting contém um @
    if (!str_contains($endereco, '@')) {
        throw new InvalidArgumentException(
            "Endereço de e-mail inválido: '$endereco'."
        );
    }
}

public function testGetUsuario(): string
    {
      $usuario = 'eri';
      $email = new Email($usuario . '@exemplo.com');  
      $this->assertSame($email->getUsuario(), $usario);
    }
}
<?php
/**
 * This file is part of Matheust45\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Matheust45\JWT\Signer;

/**
 * @author Matheus Andrade Tavares <matheus.tavares45@gmail.com>
 * @since 2.1.0
 */
class KeychainTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * @uses Matheust45\JWT\Signer\Key
     *
     * @covers Matheust45\JWT\Signer\Keychain::getPrivateKey
     */
    public function getPrivateKeyShouldReturnAKey()
    {
        $keychain = new Keychain();
        $key = $keychain->getPrivateKey('testing', 'test');

        $this->assertInstanceOf(Key::class, $key);
        $this->assertAttributeEquals('testing', 'content', $key);
        $this->assertAttributeEquals('test', 'passphrase', $key);
    }

    /**
     * @test
     *
     * @uses Matheust45\JWT\Signer\Key
     *
     * @covers Matheust45\JWT\Signer\Keychain::getPublicKey
     */
    public function getPublicKeyShouldReturnAValidResource()
    {
        $keychain = new Keychain();
        $key = $keychain->getPublicKey('testing');

        $this->assertInstanceOf(Key::class, $key);
        $this->assertAttributeEquals('testing', 'content', $key);
        $this->assertAttributeEquals(null, 'passphrase', $key);
    }
}

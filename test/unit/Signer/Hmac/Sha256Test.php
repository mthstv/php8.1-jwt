<?php
/**
 * This file is part of Matheust45\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Matheust45\JWT\Signer\Hmac;

/**
 * @author Matheus Andrade Tavares <matheus.tavares45@gmail.com>
 * @since 0.1.0
 */
class Sha256Test extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * @covers Matheust45\JWT\Signer\Hmac\Sha256::getAlgorithmId
     */
    public function getAlgorithmIdMustBeCorrect()
    {
        $signer = new Sha256();

        $this->assertEquals('HS256', $signer->getAlgorithmId());
    }

    /**
     * @test
     *
     * @covers Matheust45\JWT\Signer\Hmac\Sha256::getAlgorithm
     */
    public function getAlgorithmMustBeCorrect()
    {
        $signer = new Sha256();

        $this->assertEquals('sha256', $signer->getAlgorithm());
    }
}

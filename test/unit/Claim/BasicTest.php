<?php
/**
 * This file is part of Matheust45\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Matheust45\JWT\Claim;

/**
 * @author Matheus Andrade Tavares <matheus.tavares45@gmail.com>
 * @since 2.0.0
 */
class BasicTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     *
     * @covers Matheust45\JWT\Claim\Basic::__construct
     */
    public function constructorShouldConfigureTheAttributes()
    {
        $claim = new Basic('test', 1);

        $this->assertAttributeEquals('test', 'name', $claim);
        $this->assertAttributeEquals(1, 'value', $claim);
    }

    /**
     * @test
     *
     * @uses Matheust45\JWT\Claim\Basic::__construct
     *
     * @covers Matheust45\JWT\Claim\Basic::getName
     */
    public function getNameShouldReturnTheClaimName()
    {
        $claim = new Basic('test', 1);

        $this->assertEquals('test', $claim->getName());
    }

    /**
     * @test
     *
     * @uses Matheust45\JWT\Claim\Basic::__construct
     *
     * @covers Matheust45\JWT\Claim\Basic::getValue
     */
    public function getValueShouldReturnTheClaimValue()
    {
        $claim = new Basic('test', 1);

        $this->assertEquals(1, $claim->getValue());
    }

    /**
     * @test
     *
     * @uses Matheust45\JWT\Claim\Basic::__construct
     *
     * @covers Matheust45\JWT\Claim\Basic::jsonSerialize
     */
    public function jsonSerializeShouldReturnTheClaimValue()
    {
        $claim = new Basic('test', 1);

        $this->assertEquals(1, $claim->jsonSerialize());
    }

    /**
     * @test
     *
     * @uses Matheust45\JWT\Claim\Basic::__construct
     *
     * @covers Matheust45\JWT\Claim\Basic::__toString
     */
    public function toStringShouldReturnTheClaimValue()
    {
        $claim = new Basic('test', 1);

        $this->assertEquals('1', (string) $claim);
    }
}

<?php
/**
 * This file is part of Matheust45\JWT, a simple library to handle JWT and JWS
 *
 * @license http://opensource.org/licenses/BSD-3-Clause BSD-3-Clause
 */

namespace Matheust45\JWT\Signer\Rsa;

use Matheust45\JWT\Signer\Rsa;

/**
 * Signer for RSA SHA-384
 *
 * @author Matheus Andrade Tavares <matheus.tavares45@gmail.com>
 * @since 2.1.0
 */
class Sha384 extends Rsa
{
    /**
     * {@inheritdoc}
     */
    public function getAlgorithmId()
    {
        return 'RS384';
    }

    /**
     * {@inheritdoc}
     */
    public function getAlgorithm()
    {
        return OPENSSL_ALGO_SHA384;
    }
}

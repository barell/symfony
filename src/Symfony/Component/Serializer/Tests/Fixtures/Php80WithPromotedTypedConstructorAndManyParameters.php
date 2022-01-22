<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\Serializer\Tests\Fixtures;

final class Php80WithPromotedTypedConstructorAndManyParameters
{
    public function __construct(private string $foo, private int $bar, private string|int $union)
    {
    }
}

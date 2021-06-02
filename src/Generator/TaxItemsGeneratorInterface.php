<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\RefundPlugin\Generator;

use Sylius\RefundPlugin\Entity\LineItemInterface;
use Sylius\RefundPlugin\Entity\TaxItemInterface;

interface TaxItemsGeneratorInterface
{
    /**
     * @param LineItemInterface[] $lineItems
     *
     * @return array<TaxItemInterface>
     */
    public function generate(array $lineItems): array;
}

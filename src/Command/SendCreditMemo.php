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

namespace Sylius\RefundPlugin\Command;

final class SendCreditMemo
{
    private $id;

    public function __construct($id)
    {
        $this->id = $id;
    }

    public function Id(): string
    {
        return $this->id;
    }
}

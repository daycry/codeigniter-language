<?php

declare(strict_types=1);

/**
 * This file is part of Codeigniter Language.
 *
 * (c) Daycry <daycry9@gmail.com>
 *
 * For the full copyright and license information, please view
 * the LICENSE file that was distributed with this source code.
 */

namespace Tests\Support;

use CodeIgniter\Test\CIUnitTestCase;

abstract class TestCase extends CIUnitTestCase
{
    protected function setUp(): void
    {
        $this->resetServices();

        parent::setUp();
    }
}

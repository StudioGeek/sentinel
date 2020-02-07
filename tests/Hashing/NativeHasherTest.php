<?php

/*
 * Part of the Sentinel package.
 *
 * NOTICE OF LICENSE
 *
 * Licensed under the 3-clause BSD License.
 *
 * This source file is subject to the 3-clause BSD License that is
 * bundled with this package in the LICENSE file.
 *
 * @package    Sentinel
 * @version    3.0.3
 * @author     Cartalyst LLC
 * @license    BSD License (3-clause)
 * @copyright  (c) 2011-2020, Cartalyst LLC
 * @link       https://cartalyst.com
 */

namespace Cartalyst\Sentinel\Tests\Hashing;

use Cartalyst\Sentinel\Hashing\NativeHasher;

class NativeHasherTest extends BaseHashingTest
{
    /**
     * {@inheritdoc}
     */
    protected function setUp(): void
    {
        $this->hasher = new NativeHasher();

        parent::setUp();
    }
}

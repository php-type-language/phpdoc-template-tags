<?php

declare(strict_types=1);

namespace TypeLang\PHPDoc\Template\Tests\Unit;

use PHPUnit\Framework\Attributes\Group;
use TypeLang\PHPDoc\Template\Tests\TestCase as BaseTestCase;

#[Group('unit'), Group('type-lang/phpdoc-template-tags')]
abstract class TestCase extends BaseTestCase {}

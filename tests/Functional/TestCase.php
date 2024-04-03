<?php

declare(strict_types=1);

namespace TypeLang\PHPDoc\Template\Tests\Functional;

use PHPUnit\Framework\Attributes\Group;
use TypeLang\PHPDoc\Template\Tests\TestCase as BaseTestCase;

#[Group('functional'), Group('type-lang/phpdoc-template-tags')]
abstract class TestCase extends BaseTestCase {}

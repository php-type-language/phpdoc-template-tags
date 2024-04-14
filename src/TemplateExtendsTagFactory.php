<?php

declare(strict_types=1);

namespace TypeLang\PHPDoc\Template;

use TypeLang\Parser\Parser as TypesParser;
use TypeLang\Parser\ParserInterface as TypesParserInterface;
use TypeLang\PHPDoc\Parser\Description\DescriptionParserInterface;
use TypeLang\PHPDoc\Tag\Factory\FactoryInterface;
use TypeLang\PHPDoc\Tag\Content;

/**
 * This class is responsible for creating "`@extends`"
 * or "`@template-extends`" tags.
 *
 * See {@see TemplateExtendsTag} for details about this tag.
 */
final class TemplateExtendsTagFactory implements FactoryInterface
{
    public function __construct(
        private readonly TypesParserInterface $parser = new TypesParser(tolerant: true),
    ) {}

    public function create(string $name, Content $content, DescriptionParserInterface $descriptions): TemplateExtendsTag
    {
        $type = $content->nextType($name, $this->parser);

        return new TemplateExtendsTag(
            name: $name,
            type: $type,
            description: $content->toOptionalDescription($descriptions),
        );
    }
}

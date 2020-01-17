<?php
namespace PoP\GraphQL\TypeResolvers;

use PoP\GraphQL\TypeDataLoaders\SchemaDefinitionReferenceTypeDataLoader;
use PoP\Translation\Facades\TranslationAPIFacade;
use PoP\ComponentModel\TypeResolvers\AbstractTypeResolver;

class DirectiveTypeResolver extends AbstractTypeResolver
{
    public const NAME = '__Directive';

    public function getTypeName(): string
    {
        return self::NAME;
    }

    public function getSchemaTypeDescription(): ?string
    {
        $translationAPI = TranslationAPIFacade::getInstance();
        return $translationAPI->__('A GraphQL directive in the data graph', 'graphql');
    }

    public function getID($resultItem)
    {
        $directive = $resultItem;
        return $directive->getID();
    }

    public function getTypeDataLoaderClass(): string
    {
        return SchemaDefinitionReferenceTypeDataLoader::class;
    }
}


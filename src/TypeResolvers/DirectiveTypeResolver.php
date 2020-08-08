<?php

declare(strict_types=1);

namespace PoP\GraphQLServer\TypeResolvers;

use PoP\GraphQLServer\TypeDataLoaders\SchemaDefinitionReferenceTypeDataLoader;
use PoP\Translation\Facades\TranslationAPIFacade;
use PoP\GraphQLServer\TypeResolvers\AbstractIntrospectionTypeResolver;

class DirectiveTypeResolver extends AbstractIntrospectionTypeResolver
{
    public const NAME = '__Directive';

    public function getTypeName(): string
    {
        return self::NAME;
    }

    public function getSchemaTypeDescription(): ?string
    {
        $translationAPI = TranslationAPIFacade::getInstance();
        return $translationAPI->__('A GraphQL directive in the data graph', 'graphql-server');
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

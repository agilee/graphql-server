<?php
namespace PoP\GraphQL\ObjectModels;

use PoP\GraphQL\ObjectModels\AbstractType;
use PoP\ComponentModel\Schema\SchemaDefinition;
use PoP\GraphQL\ObjectModels\AbstractSchemaDefinitionReferenceObject;
use PoP\GraphQL\ObjectModels\HasLazyTypeSchemaDefinitionReferenceTrait;

class InputValue extends AbstractSchemaDefinitionReferenceObject
{
    use HasLazyTypeSchemaDefinitionReferenceTrait;

    public function getName(): string
    {
        return $this->schemaDefinition[SchemaDefinition::ARGNAME_NAME];
    }
    public function getDescription(): ?string
    {
        return $this->schemaDefinition[SchemaDefinition::ARGNAME_DESCRIPTION];
    }
    public function getDefaultValue(): ?string
    {
        return $this->schemaDefinition[SchemaDefinition::ARGNAME_DEFAULT_VALUE];
    }
}

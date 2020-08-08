<?php

declare(strict_types=1);

namespace PoP\GraphQLServer\ObjectModels;

use PoP\ComponentModel\Schema\SchemaDefinition;
use PoP\GraphQLServer\ObjectModels\AbstractSchemaDefinitionReferenceObject;

class EnumValue extends AbstractSchemaDefinitionReferenceObject
{

    public function getName(): string
    {
        return (string)$this->getValue();
    }
    public function getValue()
    {
        return $this->schemaDefinition[SchemaDefinition::ARGNAME_NAME];
    }
    public function getDescription(): ?string
    {
        return $this->schemaDefinition[SchemaDefinition::ARGNAME_DESCRIPTION];
    }
    public function isDeprecated(): bool
    {
        return $this->schemaDefinition[SchemaDefinition::ARGNAME_DEPRECATED] ?? false;
    }
    public function getDeprecatedReason(): ?string
    {
        return $this->schemaDefinition[SchemaDefinition::ARGNAME_DEPRECATIONDESCRIPTION];
    }
}

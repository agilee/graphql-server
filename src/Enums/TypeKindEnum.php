<?php

declare(strict_types=1);

namespace PoP\GraphQLServer\Enums;

use PoP\ComponentModel\Enums\AbstractEnum;
use PoP\GraphQLServer\ObjectModels\TypeKinds;

class TypeKindEnum extends AbstractEnum
{
    public const NAME = 'TypeKind';

    protected function getEnumName(): string
    {
        return self::NAME;
    }
    public function getValues(): array
    {
        return [
            TypeKinds::SCALAR,
            TypeKinds::OBJECT,
            TypeKinds::INTERFACE,
            TypeKinds::UNION,
            TypeKinds::ENUM,
            TypeKinds::INPUT_OBJECT,
            TypeKinds::LIST,
            TypeKinds::NON_NULL,
        ];
    }
}

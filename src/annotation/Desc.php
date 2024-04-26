<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use Doctrine\Common\Annotations\Annotation;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 描述
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"METHOD","CLASS"})
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Desc extends AbstractAnnotation
{
    /**
     * @param string $value 描述
     */
    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

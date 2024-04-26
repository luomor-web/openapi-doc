<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 分组
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"CLASS"})
 */
#[Attribute(Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class Group extends AbstractAnnotation
{
    /**
     * @param string $name 分组
     */
    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

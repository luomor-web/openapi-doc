<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use Doctrine\Common\Annotations\Annotation;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 指定Ref的字段
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
#[Attribute(Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Field extends AbstractAnnotation
{
    /**
     * @param string|array $value 指定Ref的字段，逗号分割
     */
    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

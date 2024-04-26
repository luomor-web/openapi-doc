<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use Doctrine\Common\Annotations\Annotation;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 参数类型
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
#[Attribute(Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class ParamType extends AbstractAnnotation
{
    /**
     * @param string $value 参数类型，formdata
     */
    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

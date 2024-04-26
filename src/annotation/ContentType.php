<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use Doctrine\Common\Annotations\Annotation;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 调试时请求类型
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
#[Attribute(Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class ContentType extends AbstractAnnotation
{
    /**
     * @param string $value 调试时请求类型
     */
    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

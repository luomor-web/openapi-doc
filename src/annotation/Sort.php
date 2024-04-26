<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use Doctrine\Common\Annotations\Annotation;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 排序
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"CLASS"})
 */
#[Attribute(Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class Sort extends AbstractAnnotation
{
    /**
     * @param string|int $value 排序
     */
    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

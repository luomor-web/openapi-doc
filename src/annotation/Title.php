<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use Doctrine\Common\Annotations\Annotation;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 标题
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"METHOD","CLASS"})
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class Title extends AbstractAnnotation
{
    /**
     * @param string $name 控制器/接口名称
     */
    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

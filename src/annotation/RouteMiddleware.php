<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use Doctrine\Common\Annotations\Annotation;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 路由中间件，自动注册路由时有效
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"METHOD","CLASS"})
 */
#[Attribute(Attribute::TARGET_CLASS | Attribute::TARGET_METHOD | \Attribute::IS_REPEATABLE)]
class RouteMiddleware extends AbstractAnnotation
{
    /**
     * 路由中间件，自动注册路由时有效
     * @param array $value
     */
    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

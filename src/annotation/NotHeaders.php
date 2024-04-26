<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 不使用配置中的全局请求Headers参数
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
#[Attribute(Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class NotHeaders extends AbstractAnnotation
{

    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

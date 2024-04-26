<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 不使用成功响应体返回数据
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
#[Attribute(Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class NotResponseSuccess extends AbstractAnnotation
{

    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

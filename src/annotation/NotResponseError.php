<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 不使用异常响应体返回数据
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
#[Attribute(Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class NotResponseError extends AbstractAnnotation
{

    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

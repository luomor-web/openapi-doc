<?php

namespace luomor\openapidoc\annotation;

use Attribute;
use luomor\openapidoc\utils\AbstractAnnotation;

/**
 * 不使用统一响应体返回数据
 * @package luomor\openapidoc\annotation
 * @Annotation
 * @Target({"METHOD"})
 */
#[Attribute(Attribute::TARGET_CLASS | \Attribute::IS_REPEATABLE)]
class NotResponses extends AbstractAnnotation
{

    public function __construct(...$value)
    {
        parent::__construct(...$value);
    }
}

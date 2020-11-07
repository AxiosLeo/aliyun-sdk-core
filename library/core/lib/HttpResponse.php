<?php

declare(strict_types=1);

namespace aliyun\sdk\core\lib;

use Psr\Http\Message\StreamInterface;

class HttpResponse
{
    public $guzzle_response;

    /**
     * @var resource|StreamInterface|string
     */
    public $body;

    public $data;

    public $content = '';

    public $headers = [];

    public $status;

    public $content_type;

    public function getData($key = null)
    {
        return null === $this->data ? null : $this->data->get($key);
    }
}

<?php


class Url
{
    private $urls;
    public $all_urls;
    public $host;
    public $array;
    public $array1;
    public $keys;
    public $value;

    /**
     * Url constructor.
     * @param string $urls
     */
    function __construct(string $urls)
    {
        $this->urls = $urls;
    }

    public function getScheme()
    {
        $this->all_urls = parse_url($this->urls, PHP_URL_SCHEME);
        return $this->all_urls;
    }

    public function getHost()
    {
        $this->host = parse_url($this->urls, PHP_URL_HOST);
        return $this->host;
    }

    public function getQueryParams()
    {
        $this->array = parse_url($this->urls, PHP_URL_QUERY);
        parse_str($this->array, $this->array1);
        return $this->array1;
    }

    public function getQueryParam($keys, $value = 'value2')
    {
        if (!($this->array1[$keys])) {
            $this->array1[$keys] = $value;
        }
        return $this->array1[$keys];
    }

}


$url = new Url('http://yandex.ru?key=value&key2=value2');
$url->getScheme(); // http
$url->getHost(); // yandex.ru
$url->getQueryParams();
// [
//     'key' => 'value',
//     'key2' => 'value2'
// ];
$url->getQueryParam('key'); // value
// второй параметр - значение по умолчанию
$url->getQueryParam('key2', 'lala'); // value2
$url->getQueryParam('new', 'ehu'); // ehu




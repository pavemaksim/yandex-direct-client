<?php
/**
 * @author Dmitry Gladyshev <deel@email.ru>
 * @date 26/08/20120 21:16
 */

namespace Yandex\Direct\Service;

use Yandex\Direct\Service;
use function Yandex\Direct\get_param_names;

/**
 * Class Businesses
 *
 * @author Dmitry Gladyshev <gladyshevd@icloud.com>
 *
 * @see https://yandex.ru/dev/direct/doc/ref-v5/businesses/businesses-docpage/
 */
final class Businesses extends Service
{
    /**
     * @param array $SelectionCriteria
     * @param array $FieldNames
     * @param array $Page
     *
     * @return array|\DOMDocument
     *
     * @throws \ReflectionException
     * @throws \Yandex\Direct\Exception\ErrorResponseException
     * @throws \Yandex\Direct\Exception\Exception
     *
     * @see https://yandex.ru/dev/direct/doc/ref-v5/businesses/get-docpage/
     */
    public function get(
        $SelectionCriteria,
        $FieldNames,
        $Page = null
    ) {
        $params = compact(get_param_names(__METHOD__));

        return $this->request([
            'method' => 'get',
            'params' => $params
        ]);
    }
}
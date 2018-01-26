<?php

declare(strict_types=1);

/*
 * Studio 107 (c) 2018 Maxim Falaleev
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Mindy\Bundle\SeoBundle\Provider;

use Mindy\Bundle\SeoBundle\Model\Seo;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class MetaProvider.
 */
class SeoProvider
{
    /**
     * @param Request $request
     *
     * @return \Mindy\Orm\ModelInterface|null
     */
    public function getMeta(Request $request)
    {
        return $this->fetchMeta($request->getPathInfo());
    }

    /**
     * @param $url
     *
     * @return \Mindy\Orm\ModelInterface|null
     */
    public function fetchMeta($url)
    {
        return Seo::objects()->get(['url' => $url]);
    }
}

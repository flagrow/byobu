<?php

/*
 * This file is part of Flarum.
 *
 * For detailed copyright and license information, please view the
 * LICENSE file that was distributed with this source code.
 */

namespace FoF\Byobu\Provider;

use Flarum\Foundation\AbstractServiceProvider;
use FoF\Byobu\Discussion\Screener;

class ByobuProvider extends AbstractServiceProvider
{
    public function register()
    {
        $this->app->bind('byobu.screener', Screener::class);
    }
}
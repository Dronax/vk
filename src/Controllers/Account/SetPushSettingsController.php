<?php

namespace Helldar\Vk\Controllers\Account;

use Helldar\Vk\Controllers\Controller;

/**
 * Change push settings.
 *
 * @see     https://vk.com/dev/account.setPushSettings
 *
 * @author  Andrey Helldar <helldar@ai-rus.com>
 */
class SetPushSettingsController extends Controller
{
    /**
     * Available method parameters.
     *
     * @var array
     */
    protected $parameters = array('device_id', 'settings', 'key', 'value');
}

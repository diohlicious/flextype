<?php

declare(strict_types=1);

/**
 * Flextype Admin Plugin
 *
 * @link http://digital.flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Flextype\Plugin\FormAdmin;

use function is_file;

/**
 * Set base admin route
 */
$admin_route = flextype('registry')->get('plugins.admin.settings.route');

/**
 * Ensure vendor libraries exist
 */
! is_file($form_admin_autoload = __DIR__ . '/vendor/autoload.php') and exit('Please run: <i>composer install</i> form admin plugin');

/**
 * Register The Auto Loader
 *
 * Composer provides a convenient, automatically generated class loader for
 * our application. We just need to utilize it! We'll simply require it
 * into the script here so that we don't have to worry about manual
 * loading any of our classes later on. It feels nice to relax.
 * Register The Auto Loader
 */
$form_admin_loader = require_once $form_admin_autoload;

/**
 * Include web routes
 */
include_once 'routes/web.php';

/**
 * Include dependencies
 */
include_once 'dependencies.php';

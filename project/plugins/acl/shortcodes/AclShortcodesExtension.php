<?php

declare(strict_types=1);

/**
 * Flextype (http://flextype.org)
 * Founded by Sergey Romanenko and maintained by Flextype Community.
 */

namespace Flextype\Plugin\Acl\Shortcodes;

use Thunder\Shortcode\Shortcode\ShortcodeInterface;

// Shortcode: [userLoggedInEmail]
flextype('shortcode')->addHandler('userLoggedInEmail', static function (ShortcodeInterface $s) {
    if (flextype('acl')->getUserLoggedInEmail()) {
        return flextype('acl')->getUserLoggedInEmail();
    }

    return '';
});

// Shortcode: [userLoggedInUuid]
flextype('shortcode')->addHandler('userLoggedInUuid', static function (ShortcodeInterface $s) {
    if (flextype('acl')->getUserLoggedInUuid()) {
        return flextype('acl')->getUserLoggedInUuid();
    }

    return '';
});

// Shortcode: [userLoggedInRoles]
flextype('shortcode')->addHandler('userLoggedInRoles', static function (ShortcodeInterface $s) {
    if (flextype('acl')->getUserLoggedInRoles()) {
        return flextype('acl')->getUserLoggedInRoles();
    }

    return '';
});

// Shortcode: [userLoggedIn]Private content here..[/userLoggedIn]
flextype('shortcode')->addHandler('userLoggedIn', static function (ShortcodeInterface $s) {
    if (flextype('acl')->isUserLoggedIn()) {
        return $s->getContent();
    }

    return '';
});

// Shortcode: [userLoggedInRolesIn roles="admin, student"]Private content here..[/userLoggedInRolesIn]
flextype('shortcode')->addHandler('userLoggedInRolesIn', static function (ShortcodeInterface $s) {
    if (flextype('acl')->isUserLoggedInRolesIn($s->getParameter('roles'))) {
        return $s->getContent();
    }

    return '';
});

// Shortcode: [userLoggedInUuidIn uuids="ea7432a3-b2d5-4b04-b31d-1c5acc7a55e2, d549af27-79a0-44f2-b9b1-e82b47bf87e2"]Private content here..[/userLoggedInUuidOneOf]
flextype('shortcode')->addHandler('userLoggedInUuidIn', static function (ShortcodeInterface $s) {
    if (flextype('acl')->isUserLoggedInUuidIn($s->getParameter('uuids'))) {
        return $s->getContent();
    }

    return '';
});

// Shortcode: [userLoggedInEmailIn emails="jack@flexype.org, sam@flextype.org"]Private content here..[/userLoggedInUsernameOneOf]
flextype('shortcode')->addHandler('userLoggedInEmailIn', static function (ShortcodeInterface $s) {
    if (flextype('acl')->isUserLoggedInEmailIn($s->getParameter('emails'))) {
        return $s->getContent();
    }

    return '';
});

// Shortcode: [userNotLoggedIn]Content for not logged in user here..[/userNotLoggedIn]
flextype('shortcode')->addHandler('userNotLoggedIn', static function (ShortcodeInterface $s) {
    if (! flextype('acl')->isUserLoggedIn()) {
        return $s->getContent();
    }

    return '';
});

// Shortcode: [userLoggedInRolesNotIn roles="admin, student"]Private content here..[/userLoggedInRolesNotIn]
flextype('shortcode')->addHandler('userLoggedInRolesNotIn', static function (ShortcodeInterface $s) {
    if (! flextype('acl')->isUserLoggedInRolesNotIn($s->getParameter('roles'))) {
        return $s->getContent();
    }

    return '';
});

// Shortcode: [userLoggedInUuidNotIn uuids="ea7432a3-b2d5-4b04-b31d-1c5acc7a55e2, d549af27-79a0-44f2-b9b1-e82b47bf87e2"]Private content here..[/userLoggedInUuidNotIn]
flextype('shortcode')->addHandler('userLoggedInUuidNotIn', static function (ShortcodeInterface $s) {
    if (! flextype('acl')->isUserLoggedInUuidNotIn($s->getParameter('uuids'))) {
        return $s->getContent();
    }

    return '';
});

// Shortcode: [userLoggedInEmailNotIn emails="jack@flexype.org, sam@flextype.org"]Private content here..[/userLoggedInEmailNotIn]
flextype('shortcode')->addHandler('userLoggedInEmailNotIn', static function (ShortcodeInterface $s) {
    if (! flextype('acl')->isUserLoggedInEmailsNotIn($s->getParameter('emails'))) {
        return $s->getContent();
    }

    return '';
});

<?php

namespace App\Helpers;

class IconHelper
{

    public static function icon($type) {
        switch ($type) {
            case 'checkout':
                return 'fa-solid fa-rotate-left';
            case 'checkin':
                return 'fa-solid fa-rotate-right';
            case 'edit':
                return 'fas fa-pencil-alt';
            case 'clone':
                return 'far fa-clone';
            case 'delete':
                return 'fas fa-trash';
            case 'create':
                return 'fa-solid fa-plus';
            case 'audit':
                return 'fa-solid fa-clipboard-check';
            case '2fa reset':
                return 'fa-solid fa-mobile-screen';
            case 'new-user':
                return 'fa-solid fa-user-plus';
            case 'merged-user':
                return 'fa-solid fa-people-arrows';
            case 'delete-user':
                return 'fa-solid fa-user-minus';
            case 'update-user':
                return 'fa-solid fa-user-pen';
            case 'user':
                return 'fa-solid fa-user';
            case 'users':
                return 'fas fa-users';
            case 'restore':
                return 'fa-solid fa-trash-arrow-up';
            case 'external-link':
                return 'fa fa-external-link';
            case 'email':
                return 'fa-regular fa-envelope';
            case 'phone':
                return 'fa-solid fa-phone';
            case 'long-arrow':
                return 'fas fa-long-arrow-alt-right';
            case 'download':
                return 'fas fa-download';
            case 'checkmark':
                return 'fas fa-check icon-white';
            case 'x':
                return 'fas fa-times';
            case 'logout':
                return 'fa fa-sign-out';
            case 'admin-settings':
                return 'fa fa-cogs';
            case 'settings':
                return 'fa fa-sign-out';
            case 'angle-left':
                return 'fa fa-angle-left';
            case 'warning':
                return 'fas fa-exclamation-triangle';
            case 'kits':
                return 'fa fa-object-group';
            case 'assets':
                return 'fas fa-barcode';
            case 'accessories':
                return 'far fa-keyboard';
            case 'components':
                return 'far fa-hdd';
            case 'consumables':
                return 'fas fa-tint';
            case 'licenses':
                return 'far fa-save';
            case 'requestable':
                return 'fa fa-laptop';
            case 'reports':
                return 'fas fa-chart-bar';
            case 'heart':
                return 'fas fa-heart';
            case 'circle':
                return 'far fa-circle';
            case 'due':
                return 'fas fa-history';
            case 'import':
                return 'fas fa-cloud-upload-alt fa-fw';
            case 'search':
                return 'fas fa-search';
            case 'alerts':
                return 'far fa-flag';
            case 'password':
                return 'fa fa-key';
            case 'api-key':
                return 'fa-solid fa-user-secret';
            case 'nav-toggle':
                return 'fas fa-bars';
            case 'dashboard':
                return 'fas fa-tachometer-alt';
            case 'info-circle':
                    return 'fas fa-info-circle';
            case 'carat-right':
                return 'fa fa-caret-right';
            case 'carat-up':
                return 'fa fa-caret-up';
            case 'arrow-circle-right':
                return 'fa fa-arrow-circle-right';
            case 'minus':
                return 'fas fa-minus';
        }
    }
}

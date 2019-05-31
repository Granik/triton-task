<?php
/*Константы веб-приложения*/
include_once __DIR__ . '/debug.php';
//папка с загруженными на сервер файлами
define('UPLOADS_DIR', realpath(dirname(__FILE__)).'/../web/uploads/');
//название сайта
define('SITE_TITLE', "Система управления событиями ООО \"Тритон\"");
//почта админа
define('ADMIN_EMAIL', 'plazahotel@ya.ru');
//Правила маршрутизации
define('ROUTE_RULES', serialize(
         [
                'admin/users' => 'admin/user/list',
                'admin/users/create' => 'admin/user/create',
                'admin/city' => 'admin/city/list',
                'admin/category' => 'admin/category/list',
                'admin/event-type' => 'admin/event-type/list',
                'admin/fields/info' => 'admin/info-fields/index',
                'admin/fields/finance' => 'admin/finance-fields/index',
                'admin/sponsor-type' => 'admin/sponsor-type/index',
                'admin/fields/logistics' => 'admin/logistic-fields/index',
                'admin/fields/webinars' => 'admin/webinar-fields/index',
                'admin/fields/mossem' => 'admin/mossem-fields/index',
                '' => 'events',
                'event/<id:\d+>' => 'events/event',
                'event/add' => 'events/add',
                'event/<event_id:\d+>/edit' => 'events/change-data',
                'event/<event_id:\d+>/add-sponsor' => 'events/add-sponsor',
                'event/<event_id:\d+>/remove-sponsor/<id:\d+>' => 'events/remove-sponsor',
                'event/<event_id:\d+>/add-logistics' => 'events/add-logistics',
                'event/<event_id:\d+>/edit-logistics/<item_id:\d+>' => 'events/edit-logistics',
                'event/<event_id:\d+>/edit/<field_id:\d+>' => 'events/edit-field',
                'event/<event_id:\d+>/add-finance' => 'events/add-finance',
                'event/<event_id:\d+>/edit-finance/<item_id:\d+>' => 'events/edit-finance',
                'event/<event_id:\d+>/cancel' => 'events/cancel',
                'event/<event_id:\d+>/abort-cancel' => 'events/abort-cancel',
                'event/<event_id:\d+>/add-ticket' => 'events/add-ticket',
                'event/<event_id:\d+>/delete-ticket/<id:\d+>' => 'events/delete-ticket',
                'event/<event_id:\d+>/add-service' => 'events/add-service',
                'event/<event_id:\d+>/edit-service/<id:\d+>' => 'events/edit-service',
                'event/<event_id:\d+>/delete-service/<id:\d+>' => 'events/delete-service',
                'events/set-presence/<event_id:\d+>' => 'events/set-presence',
                'webinar/<id:\d+>' => 'webinars/webinar',
                'profile' => 'profile/index',
                'webinar/<webinar_id:\d+>/add-sponsor' => 'webinars/add-sponsor',
                'webinar/<webinar_id:\d+>/remove-sponsor/<id:\d+>' => 'webinars/remove-sponsor',
                'webinar/<webinar_id:\d+>/edit/<field_id:\d+>' => 'webinars/edit-field',
                'mossem/<mossem_id:\d+>/edit/<field_id:\d+>' => 'events/edit-mossemfield',
            ]
        ) 
);



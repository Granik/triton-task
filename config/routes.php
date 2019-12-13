<?php
/*
 **********************************
 ****** Правила маршрутизации *****
 **********************************
 */
/*Метод Маршрут => Папка(модуль)/контроллер/экшн*/
return [
    /*Маршруты админки*/
    //пользователи
    'GET admin/users'               => 'admin/user/list',
    'GET admin/user/create'         => 'admin/user/create',
    'POST admin/user/create'        => 'admin/user/store',
    'GET admin/user/edit'           => 'admin/user/edit',
    'PUT,PATCH admin/user/edit'     => 'admin/user/update',
    'DELETE admin/user/delete'      => 'admin/user/delete',
    //города
    'GET admin/city'                => 'admin/source/city/list',
    'GET admin/city/create'         => 'admin/source/city/create',
    'POST admin/city/create'        => 'admin/source/city/store',
    'GET admin/city/edit'           => 'admin/source/city/update',
    'PUT,PATCH admin/city/edit'     => 'admin/source/city/update',
    //категории событий
    'GET admin/category'            => 'admin/source/category/list',
    'GET admin/category/create'     => 'admin/source/category/create',
    'POST admin/category/create'    => 'admin/source/category/store',
    'GET  admin/category/edit'      => 'admin/source/category/edit',
    'PUT,PATCH admin/category/edit' => 'admin/source/category/update',
    //типы событий
    'GET admin/event-type'                => 'admin/source/event-type/list',
    'GET admin/event-type/create'         => 'admin/source/event-type/create',
    'POST admin/event-type/create'        => 'admin/source/event-type/store',
    'GET admin/event-type/edit'           => 'admin/source/event-type/edit',
    'PUT,PATCH admin/event-type/edit'     => 'admin/source/event-type/update',
    //поля основного инфо
    'GET admin/fields/main'             => 'admin/fields/event/index',
    'GET admin/fields/main/create'      => 'admin/fields/event/create',
    'POST admin/fields/main/create'     => 'admin/fields/event/store',
    'GET admin/fields/main/edit'        => 'admin/fields/event/edit',
    'GET admin/fields/main/view'        => 'admin/fields/event/view',
    'PUT,PATCH admin/fields/main/edit'  => 'admin/fields/event/update',
    //поля финансового инфо
    'GET admin/fields/lfinance'             => 'admin/fields/finance/index',
    'GET admin/fields/lfinance/create'      => 'admin/fields/finance/create',
    'POST admin/fields/lfinance/create'     => 'admin/fields/finance/store',
    'GET admin/fields/lfinance/edit'        => 'admin/fields/finance/edit',
    'PUT,PATCH admin/fields/lfinance/edit'  => 'admin/fields/finance/update',
    //поля логистического инфо
    'GET admin/fields/logistics'             => 'admin/fields/logistic/index',
    'GET admin/fields/logistics/create'      => 'admin/fields/logistic/create',
    'POST admin/fields/logistics/create'     => 'admin/fields/logistic/store',
    'GET admin/fields/logistics/edit'        => 'admin/fields/logistic/edit',
    'PUT,PATCH admin/fields/logistics/edit'  => 'admin/fields/logistic/update',
    //поля инфо для вебинаров
    'GET admin/fields/webinar'         => 'admin/fields/webinar/index',
    'GET admin/fields/webinar/create'  => 'admin/fields/webinar/create',
    'POST admin/fields/webinar/create' => 'admin/fields/webinar/store',
    'GET admin/fields/webinar/edit'    => 'admin/fields/webinar/edit',
    'PUT,PATCH admin/fields/webinar/edit'  => 'admin/fields/webinar/update',
    'GET admin/fields/webinar/view'    => 'admin/fields/webinar/view',
    //поля инфо московских семинаров
    'GET admin/fields/mossem'         => 'admin/fields/mossem/index',
    'GET admin/fields/mossem/create'  => 'admin/fields/mossem/create',
    'POST admin/fields/mossem/create' => 'admin/fields/mossem/store',
    'GET admin/fields/mossem/edit'    => 'admin/fields/mossem/edit',
    'PUT,PATCH admin/fields/mossem/edit'  => 'admin/fields/mossem/update',
    'GET admin/fields/mossem/view'    => 'admin/fields/mossem/view',
    //типы спонсоров
    'GET admin/sponsor-type'              => 'admin/source/sponsor-type/index',
    'GET admin/sponsor-type/create'       => 'admin/source/sponsor-type/create',
    'POST admin/sponsor-type/create'      => 'admin/source/sponsor-type/store',
    'GET admin/sponsor-type/edit'         => 'admin/source/sponsor-type/edit',
    'PUT,PATCH admin/sponsor-type/edit'   => 'admin/source/sponsor-type/update',
    /*Маршруты основной части сайта*/
    ''                                 => 'event/main',
    'events'                           => 'event/main',
    'GET events/archive'               => 'event/main/archive',
    'GET event/<eventId:\d+>'          => 'event/main/show',
    'GET event/create'                   => 'event/main/create',
    'POST event/create'                  => 'event/main/store',
    'GET event/<eventId:\d+>/edit'     => 'event/main/edit',
    'PUT,PATCH event/<eventId:\d+>/edit'     => 'event/main/update',
    'GET event/<eventId:\d+>/add-sponsor'    => 'event/sponsor/create',
    'POST event/<eventId:\d+>/add-sponsor'   => 'event/sponsor/store',
    'DELETE event/<eventId:\d+>/remove-sponsor/<sponsorId:\d+>'   => 'event/sponsor/delete',
    'GET event/<eventId:\d+>/add-logistics'                       => 'event/logistics/create',
    'POST event/<eventId:\d+>/add-logistics'                      => 'event/logistics/store',
    'GET event/<eventId:\d+>/edit-logistics/<itemId:\d+>'         => 'event/logistics/edit',
    'PUT,PATCH event/<eventId:\d+>/edit-logistics/<itemId:\d+>'   => 'event/logistics/update',
    'GET event/<eventId:\d+>/edit/<fieldId:\d+>'                  => 'event/field/edit',
    'PUT,PATCH event/<eventId:\d+>/edit/<fieldId:\d+>'            => 'event/field/update',
    'GET event/<eventId:\d+>/add-finance'                         => 'event/finance/create',
    'POST event/<eventId:\d+>/add-finance'                        => 'event/finance/store',
    'GET event/<eventId:\d+>/edit-finance/<itemId:\d+>'           => 'event/finance/edit',
    'PUT,PATCH event/<eventId:\d+>/edit-finance/<itemId:\d+>'     => 'event/finance/update',
    'event/<eventId:\d+>/cancel'                                  => 'event/main/cancel',
    'event/<eventId:\d+>/abort-cancel'                            => 'event/main/abort-cancel',
    'DELETE event/<eventId:\d+>/delete'                           => 'event/main/delete',
    'event/<eventId:\d+>/field/<fieldId:\d+>/clear'               => 'event/field/clear',
    'event/<eventId:\d+>/edit/<fieldId:\d+>/unlink-file'          => 'event/field/unlink-file',
    'GET event/<eventId:\d+>/add-ticket'                          => 'event/ticket/create',
    'POST event/<eventId:\d+>/add-ticket'                         => 'event/ticket/store',
    'event/<eventId:\d+>/ticket/<ticketId:\d+>/delete'            => 'event/ticket/delete',
    'GET event/<eventId:\d+>/service/add'                         => 'event/service/create',
    'POST event/<eventId:\d+>/service/add'                        => 'event/service/store',
    'GET event/<eventId:\d+>/service/<serviceId:\d+>/edit'        => 'event/service/edit',
    'PUT,PATCH event/<eventId:\d+>/service/<serviceId:\d+>/edit'  => 'event/service/update',
    'event/<eventId:\d+>/delete-service/<serviceId:\d+>'          => 'event/service/delete',
    'GET events/presence'                                         => 'event/presence/index',
    'GET events/<eventId:\d+>/presence/set'                       => 'event/presence/create',
    'POST events/<eventId:\d+>/presence/set'                      => 'event/presence/store',
    'GET profile'                                                 => 'profile/index',
    'GET profile/edit'                                            => 'profile/edit',
    'PUT,PATCH profile/edit'                                      => 'profile/update',
    'GET profile/password'                                        => 'profile/change-password',
    'PUT,PATCH profile/password'                                  => 'profile/update-password',
    'GET webinar/<webinarId:\d+>'                                 => 'webinar/main/show',
    'GET webinar/<webinarId:\d+>/sponsor/add'                     => 'webinar/sponsor/create',
    'POST webinar/<webinarId:\d+>/sponsor/add'                    => 'webinar/sponsor/store',
    'webinar/<webinarId:\d+>/sponsor/<sponsorId:\d+>/delete'      => 'webinar/sponsor/delete',
    'GET webinar/<webinarId:\d+>/edit/<fieldId:\d+>'              => 'webinar/field/edit',
    'PUT,PATCH webinar/<webinarId:\d+>/edit/<fieldId:\d+>'        => 'webinar/field/update',
    'webinar/<webinarId:\d+>/clear/<fieldId:\d+>'                 => 'webinar/field/clear',
    'GET mossem/<mossemId:\d+>/edit/<fieldId:\d+>'                => 'event/field/edit-mossem',
    'PUT,PATCH mossem/<mossemId:\d+>/edit/<fieldId:\d+>'          => 'event/field/update-mossem',
];
<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/schneebauerwebsite/grav-skeleton-twenty-site/system/blueprints/pages/new_folder.yaml',
    'modified' => 1461740880,
    'data' => [
        'rules' => [
            'slug' => [
                'pattern' => '[a-z][a-z0-9_\\-]+',
                'min' => 2,
                'max' => 80
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'section' => [
                    'type' => 'section',
                    'title' => 'PLUGIN_ADMIN.ADD_PAGE'
                ],
                'folder' => [
                    'type' => 'text',
                    'label' => 'PLUGIN_ADMIN.FOLDER_NAME',
                    'help' => 'PLUGIN_ADMIN.FOLDER_NAME_HELP',
                    'validate' => [
                        'type' => 'slug',
                        'required' => true
                    ]
                ],
                'route' => [
                    'type' => 'select',
                    'label' => 'PLUGIN_ADMIN.PARENT_PAGE',
                    'classes' => 'fancy',
                    '@data-options' => '\\Grav\\Common\\Page\\Pages::parents',
                    '@data-default' => '\\Grav\\Plugin\\admin::getLastPageRoute',
                    'options' => [
                        '/' => 'PLUGIN_ADMIN.DEFAULT_OPTION_ROOT'
                    ],
                    'validate' => [
                        'required' => true
                    ]
                ],
                'blueprint' => [
                    'type' => 'blueprint'
                ]
            ]
        ]
    ]
];

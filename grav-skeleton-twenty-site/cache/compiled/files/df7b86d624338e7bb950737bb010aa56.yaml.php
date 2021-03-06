<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/opt/lampp/htdocs/schneebauerwebsite/grav-skeleton-twenty-site/user/themes/twenty/blueprints.yaml',
    'modified' => 1461740886,
    'data' => [
        'name' => 'Twenty',
        'version' => '1.4.0',
        'description' => 'Twenty is a free and responsive theme for **Grav**. It\'s a port of **Twenty** template by HTML5 UP.',
        'icon' => 'group',
        'author' => [
            'name' => 'Team Grav',
            'email' => 'devs@getgrav.org',
            'url' => 'http://getgrav.org'
        ],
        'homepage' => 'https://github.com/getgrav/grav-theme-twenty',
        'demo' => 'http://demo.getgrav.org/twenty-skeleton',
        'keywords' => 'twenty, theme, onepage, modern, fast, responsive, html5, css3',
        'bugs' => 'https://github.com/getgrav/grav-theme-twenty/issues',
        'license' => 'MIT',
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 0,
                    'options' => [
                        1 => 'Enabled',
                        0 => 'Disabled'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ],
                'color' => [
                    'type' => 'text',
                    'size' => 'medium',
                    'label' => 'Color',
                    'default' => 'blue',
                    'validate' => [
                        'type' => 'text'
                    ]
                ]
            ]
        ]
    ]
];

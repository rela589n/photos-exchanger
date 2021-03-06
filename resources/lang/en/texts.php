<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Static Texts Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines are the default lines which match all
    | static texts found on website.
    |
    */

    'auth'      => [
        'sign-in-page-title' => 'Sign in',
        'sign-up-page-title' => 'Sign up',

        'sign-in' => 'Sign in',
        'sign-up' => 'Sign up',

        'login'             => 'Login (email)',
        'login-placeholder' => 'Login',

        'name' => 'Name',

        'password'              => 'Password',
        'password-confirmation' => 'Password Confirmation',

        'remember' => 'Remember',
        'submit'   => 'Go',

        'have-no-account'      => 'Have no account?',
        'already-have-account' => 'Already have account?',
    ],
    'dashboard' => [
        'index'        => [
            'page-title' => 'Dashboard',
            'header'     => 'You are in dashboard!',
        ],
        'sidebar'      => [
            'menu'      => 'Menu',
            'dashboard' => 'Dashboard',

            'files'        => 'Files',
            'all-files'    => 'All files',
            'add-new-file' => 'Add new',
            'file-reports' => 'File Reports',

            'logout' => 'Logout',
        ],
        'files'        => [
            'select-file'           => 'Select File',
            'enter-name'            => 'File Name',
            'enter-description'     => 'Enter description',
            'select-date-to-delete' => 'Date to be deleted at',

            'table' => [
                'name'        => 'File Name',
                'description' => 'Short Description',
                'actions'     => 'Actions',

                'buttons' => [
                    'view' => 'View',
                    'edit' => 'Edit'
                ],

                'empty' => 'You have not uploaded a single file.'
            ],

            'index'  => [
                'page-title' => 'Your files',
                'title'      => 'List of files',
                'add-new'    => 'Add new',
            ],
            'create' => [
                'page-title' => 'Upload file',

                'title'  => 'Create new file',
                'submit' => 'Create'
            ],
            'show'   => [
                'page-title' => 'File info',

                'title'    => 'File information',
                'edit-btn' => 'Edit',

                'name'        => 'Name',
                'description' => 'Description',
                'contents'    => 'Contents',

                'will-be-deleted-at' => 'Will be deleted at',
                'no-day-was-set'     => 'No day was set',
                'delete-now'         => 'Delete now',

                'manage-links' => 'Manage file links',

            ],
            'edit'   => [
                'page-title' => 'Edit file',

                'current-content' => 'File contents',
                'title'           => 'Edit file information',
                'submit'          => 'Save',
            ],
            'delete' => [
                'button' => 'Delete',
            ],

            'errors' => [
                'update' => 'Could not update file information',
            ]
        ],
        'file-links'   => [
            'of-file'       => [
                'page-title' => 'Links',
            ],
            'create' => [
                'page-title' => 'Add new',
            ],

            'form-elements' => [
                'select-type'    => 'Select link type',
                'select-default' => 'Select one of'
            ],

            'create-form' => [
                'title'  => 'Create new link',
                'submit' => 'Go',
            ],

            'title'          => 'Links',
            'table'          => [
                'link-url' => 'Link URL',
                'type'     => 'Type',
                'status'   => 'Status',
                'actions'  => 'Actions',
            ],
            'list-empty'     => 'List of links is empty. You can create new link using the button below.',
            'create-new-btn' => 'Create new link',

            'buttons' => [
                'delete' => 'Delete'
            ],

            'errors' => [
                'create' => 'Could not create link'
            ]
        ],
        'file-reports' => [
            'index' => [
                'page-title' => 'Statistics',

                'title'               => 'File Statistics',
                'files-count'         => 'Files now',
                'deleted-files-count' => 'Deleted files',
            ],
            'table' => [
                'name'                  => 'Name',
                'disposable-links-used' => 'Disposable links used',
                'unlimited-links-views' => 'Unlimited links views',
                'views-count'           => 'Total views count',
                'summary'               => 'Summary',

                'empty' => 'There are no files'
            ]
        ],
    ],

    'guest' => [
        'view' => [
            'files' => [
                'title' => 'File contents'
            ]
        ]
    ],

    'datepicker' => [
        'date' => 'Date'
    ],

    'entities' => [
        'link-token' => [
            'types'  => [
                'disposable' => 'Disposable',
                'unlimited'  => 'Unlimited',
            ],
            'status' => [
                'not-used'     => 'Not used',
                'used-n-times' => 'Used %d times',
                'expired'      => 'Expired',
            ]
        ]
    ],
];

<?php
return [
    'bootstrap' => ['gii'],
    'modules' => [
        'gii' => [
            'class' => 'yii\gii\Module',
            'generators' => [
                'giiant-model' => [
                    'class' => 'schmunk42\giiant\generators\model\Generator',
                    'useTablePrefix' => true,
                    'templates' => [
                        'default' => '@console/modules/gii/templates/model'
                    ]
                ]
            ]
        ]
    ],
    'controllerMap' => [
        'batch' => [
            'class' => 'schmunk42\giiant\commands\BatchController',
            'overwrite' => true,
            'skipTables' => ['system_db_migration'],
            'modelNamespace' => 'common\db',
            'crudTidyOutput' => false,
            'useTranslatableBehavior' => false,
            'useTimestampBehavior' => false,
            'useBlameableBehavior' => false,
            'enableI18N' => false,
            'modelQueryNamespace' => 'common\db',
            'modelBaseClass' => 'common\db\base\ActiveRecord',
            'modelQueryBaseClass' => 'common\db\base\ActiveQuery'
        ]
    ]
];

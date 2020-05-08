# yii2-radiostation

To access the module, you need to add this to your application configuration:

```php
<?php
    ......
    'modules' => [
        'radiostation' => [
            'class' => 'shahimian\radiostation\Module',
        ],
    ],
    ......
?>
```

This widget is formally below:

```php
<?= RadioGadget::Widget([
    'source_id' => $sid
]) ?>
```

that must to indicate `$sid` variable in `Controller` and usaully as `null`. For uploading source file please create `uploads` folder in `@root/web`

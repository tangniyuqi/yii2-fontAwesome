## Install

add `tangniyuqi/yii2-fontawesome` to composer.json

```sh
$ composer install
```

```
$ php composer.phar require tangniyuqi/yii2-fontawesome "*"
```

or add

```
"tangniyuqi/yii2-fontawesome": "*"
```

to the ```require``` section of your `composer.json` file.

## Usage

in AppAsset:

```
public $depends = [
    'yii\web\YiiAsset',
    .......code.........
    'tangnjyuqi\fontawesome\FontAwesomeAsset',
];
```
# php-simple-autoloader

## 概要

- 簡易的なクラスをロードするためのオートローダクラスです。
- 同じクラス名が被ってもエラーにならないようにNamespaceをつけられるようにしてます。

## AutoLoaderとは

- 複数ファイルやディレクトリ指定でrequireクラスをしてくれるクラスです。

## 使い方

### AutoLoaderクラスのロード

```php
<?php

require_once ROOT_DIR . "/AutoLoader.php";
$autoLoader = (new AutoLoader())->register();
```

### ロードしたクラスの呼び出し

```php
<?php

namespace Hoge\Controller;

use Hoge\Model\FooModel;

class FooController
{
    $fooModel = FooModel();
```

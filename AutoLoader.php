<?php

/**
 * オートローダの基底クラスです
 */
class AutoLoader
{

    /**
     * @var array $classMap クラスマップ
     *
     * key: {プロジェクト名称}\\{namespace}\\
     * value: {ディレクトリパス}
     */
    protected $classMap = array(
        "{Hoge}\\Controller\\" => "app/controller/",
        "{Hoge}\\Model\\" => "app/model/",
    );

    /**
     * 指定した関数を __autoload() の実装として登録する
     */
    public function register()
    {
        spl_autoload_register(array($this, 'loadClass'));
    }

    /**
     * 対象となるクラスファイルをロードする
     *
     * @param string $className クラス名称
     * @return なにもしない
     */
    public function loadClass($className)
    {
        $file = str_replace(array_keys($this->classMap), array_values($this->classMap), $className);

        if (is_readable(__DIR__ . '/../' . $file . '.php')) {
            require __DIR__ . '/../'. $file . '.php';
            return;
        }
    }
}

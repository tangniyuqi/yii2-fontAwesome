<?php
/**
 * FontAwesomeAsset
 *
 *@package vendor.tangniyuqi.fontAwesome
 *@author tangming <tangniyuqi@163.com>
 *@copyright DNA <http://www.Noooya.com/>
 *@version 1.0.0
 *@since 2017-05-18 Create
 *@todo N/A
 */
namespace tangniyuqi\fontAwesome;

class FontAwesomeAsset extends \yii\web\AssetBundle
{
    /**
     * @inheritdoc
     */
    public $css = [
        'css/font-awesome.min.css',
    ];

    /*
     * @inheritdoc
     */
    public function init()
    {
        parent::init();

        $this->sourcePath = dirname(__FILE__).DIRECTORY_SEPARATOR.'assets';
    }
}
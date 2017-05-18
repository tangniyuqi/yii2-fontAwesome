<?php
/**
 * IconModalAction
 *
 *@package vendor.tangniyuqi.fontAwesome
 *@author tangming <tangniyuqi@163.com>
 *@copyright DNA <http://www.Noooya.com/>
 *@version 1.0.0
 *@since 2017-05-18 Create
 *@todo N/A
 */
namespace tangniyuqi\fontAwesome;

use Yii;
//use yii\fontAwesome\FontIcon;

class IconModalAction extends \yii\base\Action
{
	/**
     * @inheritdoc
     */
	public function run($fun = 'FontAwesome', $group = 'fontAwesome')
	{
		$models = FontIcon::$fun();

		$models = [
			'models' => $models,
			'group' => $group,
		];

		return $this->controller->renderFile('@vendor/tangniyuqi/fontAwesome/views/icon.php', $models);
	}
}
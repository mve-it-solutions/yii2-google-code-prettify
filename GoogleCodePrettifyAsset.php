<?php

namespace mveitsolutions\googlecodeprettify;

use yii\web\AssetBundle;

class GoogleCodePrettifyAsset extends AssetBundle 
{
    public static $options = [];
    
    public $sourcePath = '@vendor/mve-it-solutions/yii2-google-code-prettify/assets';
    public $js = ['js/prettify.js'];
    public $css = ['css/prettify.css'];
    public $depends = ['yii\web\JqueryAsset'];

    /**
     * set style css file of assetbundle 
     */
    public function init()
    {
		if (is_array(self::$options)) {
			$this->css = ['css/'.self::$options['style'].'.css'];
		}
        parent::init();
    }

    /**
     * @param \yii\web\View $view
     * @param object oView (The view to be registered with)
     * @param array aOptions (style, lineNums and autoAddPreClasses)
     * @return static
     */
    public static function register($oView, $aOptions=[])
    {
		$js = "";
		if (is_array($aOptions)) {
			self::$options['style'] = (isset($aOptions['style'])) ? $aOptions['style'] : 'prettify';
			self::$options['lineNums'] = (isset($aOptions['lineNums'])) ? $aOptions['lineNums'] : false;
			self::$options['autoAddPreClasses'] = (isset($aOptions['autoAddPreClasses'])) ? $aOptions['autoAddPreClasses'] : false;

			if (self::$options['lineNums'] === true) {
				$oView->registerCss('li.L0, li.L1, li.L2, li.L3, li.L5, li.L6, li.L7, li.L8 { list-style-type: decimal !important }');
			}
			if (self::$options['autoAddPreClasses'] === true) {
				$js .= "
					$('pre').each(function () {
					    var langClass = $(this).attr('class') || '';
					    $('pre').addClass('prettyprint ". (self::$options['lineNums'] ? linenums : '') ."' + langClass);
					});
				";
			}
			$js .= "
				prettyPrint();
			";
		}

        $oView->registerJs($js);

        return parent::register($oView);
    }
}
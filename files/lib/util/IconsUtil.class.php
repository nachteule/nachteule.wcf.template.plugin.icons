<?php

/**
 * @author	Nachteule`
 * @license	GNU Lesser General Public License
 * @package nachteule.wcf.template.plugin.icons
 */
class IconsUtil {
	protected static $iconCache;
	
	public static function getIconPath($icons) {
		if (self::$iconCache === null)
			self::$iconCache = WCF::getCache()->get('icon-'.PACKAGE_ID.'-'.StyleManager::getStyle()->styleID);
		
		$icon = '';
		
		$icons = ArrayUtil::trim(explode(',', $icons));
		foreach ($icons as $icon) {
			if (isset(self::$iconCache[$icon]))
				return self::$iconCache[$icon];
		}
		
		return RELATIVE_WCF_DIR.'icon/'.$icon;
	}
}

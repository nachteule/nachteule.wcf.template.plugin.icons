<?php
require_once(WCF_DIR.'lib/system/template/TemplatePluginCompiler.class.php');
require_once(WCF_DIR.'lib/system/template/TemplateScriptingCompiler.class.php');

/**
 * @author	Nachteule`
 * @license	GNU Lesser General Public License
 * @package nachteule.wcf.icons
 */
class TemplatePluginCompilerIcons implements TemplatePluginCompiler {
	/**
	 * @see TemplatePluginCompiler::executeStart()
	 */
	public function executeStart($tagArgs, TemplateScriptingCompiler $compiler) {
		$compiler->pushTag('icons');
		return '<?php ob_start(); ?>';
	}
	
	/**
	 * @see TemplatePluginCompiler::executeEnd()
	 */
	public function executeEnd(TemplateScriptingCompiler $compiler) {
		$compiler->popTag('icons');
		$hash = StringUtil::getRandomID();
		return '<?php $_icons'.$hash.' = ob_get_contents(); ob_end_clean(); echo IconsUtil::getIconPath($_icons'.$hash.'); ?>';
	}
}

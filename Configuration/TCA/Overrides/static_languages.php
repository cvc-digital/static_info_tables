<?php
defined('TYPO3_MODE') or die();
// Compatibility with 6.2
if (\TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(\TYPO3\CMS\Core\Utility\VersionNumberUtility::getNumericTypo3Version()) < 7000000) {
	$GLOBALS['TCA']['static_languages']['ctrl']['label_userFunc'] = 'SJBR\\StaticInfoTables\\Hook\\Backend\\Form\\ElementRenderingHelper->addIsoCodeToLabel';
}
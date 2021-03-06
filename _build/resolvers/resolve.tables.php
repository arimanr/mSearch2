<?php
/**
 * Resolve creating db tables
 */
if ($object->xpdo) {
	switch ($options[xPDOTransport::PACKAGE_ACTION]) {
		case xPDOTransport::ACTION_INSTALL:
		case xPDOTransport::ACTION_UPGRADE:
			/* @var modX $modx */
			$modx =& $object->xpdo;
			$modelPath = $modx->getOption('msearch2.core_path',null,$modx->getOption('core_path').'components/msearch2/').'model/';
			$modx->addPackage('msearch2', $modelPath);

			$manager = $modx->getManager();
			$manager->createObjectContainer('mseWord');
			$manager->createObjectContainer('mseIntro');
			$manager->createObjectContainer('mseQuery');
			$manager->createObjectContainer('mseAlias');
		break;
	}
}
return true;
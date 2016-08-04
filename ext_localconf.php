<?php
defined('TYPO3_MODE') or die();

// Register a DataHandler hook to always set the crop value for all children when updating a parent
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['t3lib/class.t3lib_tcemain.php']['processDatamapClass']['unlocalizedcrop'] = \CMSExperts\Unlocalizedcrop\Hooks\DataHandlerCropModifier::class;

// Register a command controller to migrate existing data
$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['extbase']['commandControllers'][] = \CMSExperts\Unlocalizedcrop\Command\MigrationCommandController::class;

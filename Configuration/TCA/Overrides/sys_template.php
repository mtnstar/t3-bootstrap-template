<?php
defined('TYPO3') or die('Access denied.');
call_user_func(function()
{
    /**
     * Temporary variables
     */
    $extensionKey = 'mountain_star_bootstrap_template';

    /**
     * Default TypoScript for MountainStarBootstrapTemplate
     */
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile(
        $extensionKey,
        'Configuration/TypoScript',
        'Mountain Star Bootstrap Template'
    );
});

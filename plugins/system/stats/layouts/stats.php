<?php
/**
 * @package     Joomla.Plugin
 * @subpackage  System.stats
 *
 * @copyright   (C) 2016 Open Source Matters, Inc. <https://www.joomla.org>
 * @license     GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

extract($displayData);

/**
 * Layout variables
 * -----------------
 * @var  array  $statsData  Array containing the data that will be sent to the stats server
 */

$versionFields = array('php_version', 'db_version', 'cms_version');
?>
<dl class="dl-horizontal js-pstats-data-details"  style="display:none;">
	<?php foreach ($statsData as $key => $value) : ?>
		<dt><?php echo JText::_('PLG_SYSTEM_STATS_LABEL_' . strtoupper($key)); ?></dt>
		<dd><?php echo in_array($key, $versionFields) ? (preg_match('/\d+(?:\.\d+)+/', $value, $matches) ? $matches[0] : $value) : $value; ?></dd>
	<?php endforeach; ?>
</dl>

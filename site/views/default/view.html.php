<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

class TestViewDefault extends JViewLegacy
{
	function display($tpl = null)
	{
		// Check for errors.
		if (count($errors = $this->get('Errors')))
		{
			JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');

			return false;
		}

		// Display the view
		parent::display($tpl);
	}
}

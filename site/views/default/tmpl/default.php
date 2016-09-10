<?php

// No direct access
defined('_JEXEC') or die('Restricted access');

// Add CSS for making accordion-toggle.collapsed visible
JFactory::getDocument()->addStyleDeclaration('#accordions .accordion-toggle {background: red;} #accordions .accordion-toggle.collapsed {background: green;} #accordions2 .accordion-toggle {background: red;} #accordions2 .accordion-toggle.collapsed {background: green;}');
// Add accordion with five slides
echo JHtml::_('bootstrap.startAccordion','accordions',array('active' => 'slide-1', 'parent' => 'accordions'));
for ($i = 1; $i < 6; $i++)
{
	echo JHtml::_('bootstrap.addSlide','accordions','Slide ' . $i,'slide-' . $i); ?>
	Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
	<?php echo JHtml::_('bootstrap.endSlide');
}
echo JHtml::_('bootstrap.endAccordion');
// Add second accordion with five slides
echo JHtml::_('bootstrap.startAccordion','accordions2',array('active' => 'slide2-1', 'parent' => 'accordions2'));
for ($i = 1; $i < 6; $i++)
{
	echo JHtml::_('bootstrap.addSlide','accordions2','Slide ' . $i,'slide2-' . $i); ?>
	Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
	<?php echo JHtml::_('bootstrap.endSlide');
}
echo JHtml::_('bootstrap.endAccordion');

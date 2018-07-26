<?php
namespace TestExtensions\AutoRelatedUpCrossSells\Block\Adminhtml\Form\Renderer\Config;

use Magento\Config\Block\System\Config\Form\Field;
use Magento\Framework\Data\Form\Element\AbstractElement;

class PriceRange extends Field
{
    protected function _getElementHtml(AbstractElement $element)
    {
        $element->setStyle('width:50px;')->setName($element->getName() . '[]');

        if ($element->getValue()) {
            $values = explode(',', $element->getValue());
        } else {
            $values = [];
        }

        $from = $element->setValue(isset($values[0]) ? $values[0] : null)->getElementHtml();
        $to = $element->setValue(isset($values[1]) ? $values[1] : null)->getElementHtml();

        return __(
                '<label class="label"><span>from&nbsp;</span></label>'
            ) . $from . __(
                '<label class="label"><span>% to&nbsp;</span></label>'
            ) . $to . __(
                '<label class="label"><span>% Higher</span></label>'
            );

    }
}

<?php
namespace TestExtensions\AutoRelatedUpCrossSells\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class YesNoEmpty implements ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {
        return [
            ['value' => 0, 'label' => __('Yes')],
            ['value' => 1, 'label' => __('No')],
            ['value' => 2, 'label' => __('Yes, if list is empty')],
        ];
    }
}

<?php

namespace BiffBangPow\Extension;

use SilverStripe\Core\Extension;
use SilverStripe\Forms\GridField\GridFieldConfig;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;

class SortableAdminExtension extends Extension
{
    public function updateGridFieldConfig(GridFieldConfig $config)
    {
        $config->addComponent(new GridFieldOrderableRows('Sort'));
    }
}
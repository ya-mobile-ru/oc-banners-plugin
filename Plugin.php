<?php namespace Yamobile\Banners;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{

    public function registerComponents()
    {
        return [
            \Yamobile\Banners\Components\SliderComponent::class => 'Slider',
        ];
    }
}

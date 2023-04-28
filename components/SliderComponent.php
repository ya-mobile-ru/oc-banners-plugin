<?php

namespace Yamobile\Banners\Components;

use Cms\Classes\ComponentBase;
use Yamobile\Banners\Models\Slider;


class SliderComponent extends ComponentBase
{

    public $slides;


    public function componentDetails()
    {
        return [
            'name' => 'Слайдер',
            'description' => 'Описание',
        ];
    }



    public function onRun()
    {

        $this->slides = $this->loadSlides();

    }


    private function loadSlides()
    {

        $slides = Slider::where('is_enabled', true);
        return $slides->get();
    }

}

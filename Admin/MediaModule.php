<?php

namespace Creonit\MediaBundle\Admin;

use Creonit\AdminBundle\Module;

class MediaModule extends Module
{

    protected $visible = false;

    public function initialize()
    {
        $this->addComponent(new GalleryTable);
        $this->addComponent(new GalleryImageEditor());
        $this->addComponent(new GalleryVideoEditor());
    }


}
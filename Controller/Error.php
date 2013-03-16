<?php
namespace PPI\FrameworkModule\Controller;

use PPI\Module\Controller as BaseController;

class Error extends BaseController
{
    public function show404Action()
    {
        if ($this->getEnv() !== 'production') {
            return $this->render('PPIFrameworkModule:error:404_dev.html.php');
        } else {
            return $this->render('PPIFrameworkModule:error:404.html.php');
        }
    }

}

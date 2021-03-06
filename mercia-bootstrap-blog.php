<?php
namespace Grav\Theme;

use Grav\Common\Theme;

class MerciaBootstrapBlog extends BootstrapBlog
{

    /**
     * Initialize configuration
     */
    public function onThemeInitialized()
    {
        if ($this->isAdmin()) {
            return;
        }

        if ($this->config->get('themes.mercia-bootstrap-blog.enabled')) { //27/01/20 DCN: the inherited name
            $this->enable([
                'onAssetsInitialized' => ['onAssetsInitialized', 0]
            ]);
        }

    }

    /**
     * Creates collection Bootstrap Blog for CSS and JS files
     */
    public function onAssetsInitialized()
    {
        $config = $this->config->get('themes.mercia-bootstrap-blog');  //27/01/20 DCN: the inherited name

        $collection = [];

        if ($config['cdn_enabled']) {
            // CSS
            $collection[] = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css';
            $collection[] = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap-reboot.min.css';
            $collection[] = 'https://use.fontawesome.com/releases/v5.8.2/css/all.css';
            $collection[] = 'https://use.fontawesome.com/releases/v5.8.2/css/brands.css';
            // JS
            // 26/01/20 DCN: This is coming in anyway via system.yaml assets-->$collection[] = 'https://code.jquery.com/jquery-3.3.1.min.js';
            $collection[] = 'https://unpkg.com/popper.js@1.15.0/dist/umd/popper.min.js';
            $collection[] = 'https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js';

        } else {
            // CSS
            $collection[] = 'theme://assets/css-compiled/bootstrap/bootstrap.css';
            $collection[] = 'theme://assets/css-compiled/bootstrap/bootstrap-reboot.css';
            $collection[] = 'theme://assets/css/fontawesome.css';
            $collection[] = 'theme://assets/css/solid.css';
            $collection[] = 'theme://assets/css/regular.css';
            $collection[] = 'theme://assets/css/brands.css';
            $collection[] = 'theme://assets/css/normalize.css';
            // JS
            // 26/01/20 DCN: This is coming in anyway via system.yaml assets-->$collection[] = 'theme://assets/js/jquery-3.3.1.min.js';
            $collection[] = 'theme://assets/js/popper.min.js';
            $collection[] = 'theme://assets/js/bootstrap.min.js';
        }

        $collection[] = 'theme://assets/css-compiled/bootstrap-blog.css';
        $collection[] = 'theme://assets/js/bootstrap_blog.js';

        $assets = $this->grav['assets'];
        $assets->registerCollection('bootstrap-blog', $collection);
        $assets->add('bootstrap-blog', 100);
    }
}

<?php

namespace Chuckbe\ChuckcmsTemplateKyoto\migrations\seeds;

use Chuckbe\Chuckcms\Models\Template;
use Illuminate\Database\Seeder;

class ChuckcmsTemplateKyotoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	// php artisan db:seed --class=Chuckbe\\ChuckcmsTemplateKyoto\\migrations\\seeds\\ChuckcmsTemplateKyotoTableSeeder
        $fonts = [];
        $fonts['raw'] = 'Poppins:300,400,400i,500,600,700';
        
        $css = [];
        $css['bootstrap']['href'] = 'chuckbe/chuckcms-template-kyoto/css/bootstrap.css';
        $css['bootstrap']['asset'] = 'true';

        $css['style']['href'] = 'chuckbe/chuckcms-template-kyoto/css/style.css';
        $css['style']['asset'] = 'true';

        $css['dark']['href'] = 'chuckbe/chuckcms-template-kyoto/css/dark.css';
        $css['dark']['asset'] = 'true';

        // $css['kyoto']['href'] = 'chuckbe/chuckcms-template-kyoto/css/kyoto.css';
        // $css['kyoto']['asset'] = 'true';

        $css['fonticons']['href'] = 'chuckbe/chuckcms-template-kyoto/css/font-icons.css';
        $css['fonticons']['asset'] = 'true';

        $css['animate']['href'] = 'chuckbe/chuckcms-template-kyoto/css/one-page/et-line.css';
        $css['animate']['asset'] = 'true';
        
        $css['animate']['href'] = 'chuckbe/chuckcms-template-kyoto/css/animate.css';
        $css['animate']['asset'] = 'true';

        $css['magnificpopup']['href'] = 'chuckbe/chuckcms-template-kyoto/css/magnific-popup.css';
        $css['magnificpopup']['asset'] = 'true';

        $css['kyotomenu']['href'] = 'chuckbe/chuckcms-template-kyoto/css/kyoto/css/menu.css';
        $css['kyotomenu']['asset'] = 'true';

        $css['responsive']['href'] = 'chuckbe/chuckcms-template-kyoto/css/responsive.css';
        $css['responsive']['asset'] = 'true';

        $css['kyoto']['href'] = 'chuckbe/chuckcms-template-kyoto/css/kyoto/kyoto.css';
        $css['kyoto']['asset'] = 'true';

        $css['fonts']['href'] = 'chuckbe/chuckcms-template-kyoto/css/kyoto/css/fonts.css';
        $css['fonts']['asset'] = 'true';

        $css['colors']['href'] = 'chuckbe/chuckcms-template-kyoto/css/colors.php?color=e41c34';
        $css['colors']['asset'] = 'true';
        
        $js = []; 
        $js['jquery']['href'] = 'chuckbe/chuckcms-template-kyoto/js/jquery.js';
        $js['jquery']['asset'] = 'true';

        $js['plugins']['href'] = 'chuckbe/chuckcms-template-kyoto/js/plugins.js';
        $js['plugins']['asset'] = 'true';

        $js['hover3d']['href'] = 'chuckbe/chuckcms-template-kyoto/js/hover3d.js';
        $js['hover3d']['asset'] = 'true';

        $js['menu-easing']['href'] = 'chuckbe/chuckcms-template-kyoto/js/menu-easing.js';
        $js['menu-easing']['asset'] = 'true';

        $js['functions']['href'] = 'chuckbe/chuckcms-template-kyoto/js/functions.js';
        $js['functions']['asset'] = 'true';

        $json = [];

        // create template
        Template::updateOrCreate(
            ['slug' => 'chuckcms-template-kyoto'],
            ['name' => 'ChuckCMS Template Kyoto',
            'hintpath' => 'chuckcms-template-kyoto',
            'path' => 'chuckbe/chuckcms-template-kyoto',
            'type' => 'default',
            'version' => '0.1',
            'author' => 'Karel Brijs (karel@chuck.be)',
            'fonts' => $fonts,
            'css' => $css,
            'js' => $js,
            'json' => $json,
            'active' => 1
        ]);
    }
}

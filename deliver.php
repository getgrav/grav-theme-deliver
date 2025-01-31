<?php
namespace Grav\Theme;

use Grav\Common\Theme;
use RocketTheme\Toolbox\Event\Event;

class Deliver extends Theme
{
    public static function getSubscribedEvents(): array
    {
        return [
            'onAdminTwigTemplatePaths' => ['onAdminTwigTemplatePaths', 0],
            'onThemeInitialized'    => ['onThemeInitialized', 0],
            'onTwigSiteVariables' => ['onTwigSiteVariables', 0]
        ];
    }

    public function onThemeInitialized() {
        if ($this->isAdmin()) {
            $this->enable([
                'onAdminTwigTemplatePaths'  => ['onAdminTwigTemplatePaths', 0],
            ]);
        }
    }

    public function onAdminTwigTemplatePaths(Event $event): void {

        $paths = $event['paths'];
        $paths[] = __DIR__ . '/admin/themes/grav/templates';
        $event['paths'] = $paths;

        $this->grav['assets']->addCss('theme://admin/themes/grav/assets/css/admin-custom.css');
    }
    
    public function onTwigSiteVariables()
    {
        $themeConfig = $this->config->get('themes.deliver');

        if (isset($themeConfig['custom_css']) && $themeConfig['custom_css'] && file_exists(__DIR__ . '/assets/css/custom.css')) {
            $this->grav['assets']->addCss('theme://assets/css/custom.css', ['priority' => 5]);
        }

        if (isset($themeConfig['custom_js']) && $themeConfig['custom_js'] && file_exists(__DIR__ . '/assets/js/custom.js')) {
            $this->grav['assets']->addJs('theme://assets/js/custom.js', ['group' => 'bottom', 'priority' => 15]);
        }
    }
}

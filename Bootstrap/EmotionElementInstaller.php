<?php

namespace Bay20BannerTextFieldShoppingWorldBanner\Bootstrap;

use Shopware\Components\Emotion\ComponentInstaller;

class EmotionElementInstaller
{
    /**
     * @var ComponentInstaller
     */
    private $emotionComponentInstaller;

    /**
     * @var string
     */
    private $pluginName;

    /**
     * @param string $pluginName
     * @param ComponentInstaller $emotionComponentInstaller
     */
    public function __construct($pluginName, ComponentInstaller $emotionComponentInstaller)
    {
        $this->emotionComponentInstaller = $emotionComponentInstaller;
        $this->pluginName = $pluginName;
    }

    public function install()
    {
        $bay20Banner = $this->emotionComponentInstaller->createOrUpdate(
            $this->pluginName,
            'Bay20BannerTextFieldShoppingWorldBanner',
            [
                'name' => 'Custom Element',
                'xtype' => 'emotion-components-custom',
                'template' => 'emotion_custom',
                'cls' => 'emotion-custom-element'
            ]
        );

        $bay20Banner->createMediaField([
            'name' => 'preview_image',
            'fieldLabel' => 'Banner Image',
            'valueField' => 'virtualPath'
        ]);

        $bay20Banner->createTextField([
            'name' => 'title_text',
            'fieldLabel' => 'Title',
            'supportText' => 'Text Field.',
            'allowBlank' => false
        ]);

        $bay20Banner->createtinymcefield([
            'name' => 'description_text',
            'fieldLabel' => 'Description',
        ]);

        $bay20Banner->createTextField([
            'name' => 'button_text',
            'fieldLabel' => 'Button Text',
            'supportText' => 'Enter button text.',
            'allowBlank' => false
        ]);

        $bay20Banner->createTextField([
            'name' => 'button_link',
            'fieldLabel' => 'Button Link',
            'supportText' => 'example: https://your-domain.com/'
        ]);

    }
}
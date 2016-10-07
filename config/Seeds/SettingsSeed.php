<?php

use Phinx\Seed\AbstractSeed;

class SettingsSeed extends AbstractSeed
{

    public $records = [
        [
            'id' => '6',
            'key' => 'Site.title',
            'value' => 'Croogo',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '1',
            'weight' => '1',
            'params' => ''
        ],
        [
            'id' => '7',
            'key' => 'Site.tagline',
            'value' => 'A CakePHP powered Content Management System.',
            'title' => '',
            'description' => '',
            'input_type' => 'textarea',
            'editable' => '1',
            'weight' => '2',
            'params' => ''
        ],
        [
            'id' => '8',
            'key' => 'Site.email',
            'value' => 'you@your-site.com',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '1',
            'weight' => '3',
            'params' => ''
        ],
        [
            'id' => '9',
            'key' => 'Site.status',
            'value' => '1',
            'title' => '',
            'description' => '',
            'input_type' => 'checkbox',
            'editable' => '1',
            'weight' => '6',
            'params' => ''
        ],
        [
            'id' => '12',
            'key' => 'Meta.robots',
            'value' => 'index, follow',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '1',
            'weight' => '6',
            'params' => ''
        ],
        [
            'id' => '13',
            'key' => 'Meta.keywords',
            'value' => 'croogo, Croogo',
            'title' => '',
            'description' => '',
            'input_type' => 'textarea',
            'editable' => '1',
            'weight' => '7',
            'params' => ''
        ],
        [
            'id' => '14',
            'key' => 'Meta.description',
            'value' => 'Croogo - A CakePHP powered Content Management System',
            'title' => '',
            'description' => '',
            'input_type' => 'textarea',
            'editable' => '1',
            'weight' => '8',
            'params' => ''
        ],
        [
            'id' => '15',
            'key' => 'Meta.generator',
            'value' => 'Croogo - Content Management System',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '0',
            'weight' => '9',
            'params' => ''
        ],
        [
            'id' => '16',
            'key' => 'Service.akismet_key',
            'value' => 'your-key',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '1',
            'weight' => '11',
            'params' => ''
        ],
        [
            'id' => '17',
            'key' => 'Service.recaptcha_public_key',
            'value' => 'your-public-key',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '1',
            'weight' => '12',
            'params' => ''
        ],
        [
            'id' => '18',
            'key' => 'Service.recaptcha_private_key',
            'value' => 'your-private-key',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '1',
            'weight' => '13',
            'params' => ''
        ],
        [
            'id' => '19',
            'key' => 'Service.akismet_url',
            'value' => 'http://your-blog.com',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '1',
            'weight' => '10',
            'params' => ''
        ],
        [
            'id' => '20',
            'key' => 'Site.theme',
            'value' => 'Croogo/Core',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '0',
            'weight' => '14',
            'params' => ''
        ],
        [
            'id' => '21',
            'key' => 'Site.feed_url',
            'value' => '',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '0',
            'weight' => '15',
            'params' => ''
        ],
        [
            'id' => '22',
            'key' => 'Reading.nodes_per_page',
            'value' => '5',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '1',
            'weight' => '16',
            'params' => ''
        ],
        [
            'id' => '23',
            'key' => 'Writing.wysiwyg',
            'value' => '1',
            'title' => 'Enable WYSIWYG editor',
            'description' => '',
            'input_type' => 'checkbox',
            'editable' => '1',
            'weight' => '17',
            'params' => ''
        ],
        [
            'id' => '24',
            'key' => 'Comment.level',
            'value' => '1',
            'title' => '',
            'description' => 'levels deep (threaded comments)',
            'input_type' => '',
            'editable' => '1',
            'weight' => '18',
            'params' => ''
        ],
        [
            'id' => '25',
            'key' => 'Comment.feed_limit',
            'value' => '10',
            'title' => '',
            'description' => 'number of comments to show in feed',
            'input_type' => '',
            'editable' => '1',
            'weight' => '19',
            'params' => ''
        ],
        [
            'id' => '26',
            'key' => 'Site.locale',
            'value' => 'eng',
            'title' => '',
            'description' => '',
            'input_type' => 'text',
            'editable' => '1',
            'weight' => '20',
            'params' => ''
        ],
        [
            'id' => '27',
            'key' => 'Reading.date_time_format',
            'value' => 'D, M d Y H:i:s',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '1',
            'weight' => '21',
            'params' => ''
        ],
        [
            'id' => '28',
            'key' => 'Comment.date_time_format',
            'value' => 'M d, Y',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '1',
            'weight' => '22',
            'params' => ''
        ],
        [
            'id' => '29',
            'key' => 'Site.timezone',
            'value' => 'UTC',
            'title' => '',
            'description' => 'Provide a valid timezone identifier as specified in https://php.net/manual/en/timezones.php',
            'input_type' => 'select',
            'editable' => '1',
            'weight' => '4',
            'params' => 'optionClass=Croogo/Settings.Timezones'
        ],
        [
            'id' => '32',
            'key' => 'Hook.bootstraps',
            'value' => 'Croogo/Settings,Croogo/Contacts,Croogo/Nodes,Croogo/Meta,Croogo/Menus,Croogo/Users,Croogo/Blocks,Croogo/Taxonomy,Croogo/FileManager,Croogo/Wysiwyg,Croogo/Dashboards',
            'title' => '',
            'description' => '',
            'input_type' => '',
            'editable' => '0',
            'weight' => '23',
            'params' => ''
        ],
        [
            'id' => '33',
            'key' => 'Comment.email_notification',
            'value' => '1',
            'title' => 'Enable email notification',
            'description' => '',
            'input_type' => 'checkbox',
            'editable' => '1',
            'weight' => '24',
            'params' => ''
        ],
        [
            'id' => '34',
            'key' => 'Access Control.multiRole',
            'value' => '0',
            'title' => 'Enable Multiple Roles',
            'description' => '',
            'input_type' => 'checkbox',
            'editable' => '1',
            'weight' => '25',
            'params' => ''
        ],
        [
            'id' => '35',
            'key' => 'Access Control.rowLevel',
            'value' => '0',
            'title' => 'Row Level Access Control',
            'description' => '',
            'input_type' => 'checkbox',
            'editable' => '1',
            'weight' => '26',
            'params' => ''
        ],
        [
            'id' => '36',
            'key' => 'Access Control.autoLoginDuration',
            'value' => '+1 week',
            'title' => '"Remember Me" Duration',
            'description' => 'Eg: +1 day, +1 week. Leave empty to disable.',
            'input_type' => 'text',
            'editable' => '1',
            'weight' => '27',
            'params' => ''
        ],
        [
            'id' => '37',
            'key' => 'Access Control.models',
            'value' => '',
            'title' => 'Models with Row Level Acl',
            'description' => 'Select models to activate Row Level Access Control on',
            'input_type' => 'multiple',
            'editable' => '1',
            'weight' => '26',
            'params' => 'multiple=checkbox
options={"Nodes.Node": "Node", "Blocks.Block": "Block", "Menus.Menu": "Menu", "Menus.Link": "Link"}'
        ],
        [
            'id' => '38',
            'key' => 'Site.ipWhitelist',
            'value' => '127.0.0.1',
            'title' => 'Whitelisted IP Addresses',
            'description' => 'Separate multiple IP addresses with comma',
            'input_type' => 'text',
            'editable' => '1',
            'weight' => '27',
            'params' => ''
        ],
        [
            'key' => 'Site.asset_timestamp',
            'value' => 'force',
            'title' => 'Asset timestamp',
            'description' => 'Appends a timestamp which is last modified time of the particular file at the end of asset files URLs (CSS, JavaScript, Image). Useful to prevent visitors to visit the site with an outdated version of these files in their browser cache.',
            'editable' => 1,
            'input_type' => 'radio',
            'weight' => 28,
            'params' => 'options={"0": "Disabled", "1": "Enabled in debug mode only", "force": "Always enabled"}',
        ],
        [
            'key' => 'Site.admin_theme',
            'value' => 'Croogo/Core',
            'title' => 'Administration Theme',
            'description' => '',
            'input_type' => 'text',
            'editable' => '1',
            'weight' => '29',
            'params' => ''
        ],
        [
            'key' => 'Site.home_url',
            'value' => '',
            'title' => 'Home Url',
            'description' => 'Default action for home page in link string format.',
            'input_type' => 'text',
            'editable' => '1',
            'weight' => '30',
            'params' => ''
        ],
    ];

    public function run()
    {
        $Table = $this->table('settings');
        $Table->insert($this->records)->save();
    }

}

<?php
namespace soerpaule\sppostreaction\ucp;

class main_info
{
    public function module()
    {
        return [
            'filename' => '\\soerpaule\\sppostreaction\\ucp\\main_module',
            'title' => 'UCP_TFPR_TITLE',
            'modes' => [
                'settings' => [
                    'title' => 'UCP_TFPR_SETTINGS',
                    'auth' => 'ext_soerpaule/sppostreaction',
                    'cat' => ['UCP_PREFS'],
                ],
            ],
        ];
    }
}

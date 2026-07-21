<?php
namespace soerpaule\sppostreaction\acp;

class main_info
{
    public function module()
    {
        return [
            'filename' => '\\soerpaule\\sppostreaction\\acp\\main_module',
            'title' => 'ACP_TFPR_TITLE',
            'modes' => [
                'settings' => [
                    'title' => 'ACP_TFPR_SYMBOLSETS',
                    'auth' => 'ext_soerpaule/sppostreaction && acl_a_board',
                    'cat' => ['ACP_TFPR_TITLE'],
                ],
            ],
        ];
    }
}

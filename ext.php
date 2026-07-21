<?php
namespace soerpaule\sppostreaction;

class ext extends \phpbb\extension\base
{
    const NOTIFICATION_TYPE = 'soerpaule.sppostreaction.notification.type.reaction';

    public function enable_step($old_state)
    {
        if ($old_state === false)
        {
            $this->container->get('notification_manager')->enable_notifications(self::NOTIFICATION_TYPE);
            return 'notifications';
        }

        return parent::enable_step($old_state);
    }

    public function disable_step($old_state)
    {
        if ($old_state === false)
        {
            $this->container->get('notification_manager')->disable_notifications(self::NOTIFICATION_TYPE);
            return 'notifications';
        }

        return parent::disable_step($old_state);
    }

    public function purge_step($old_state)
    {
        if ($old_state === false)
        {
            $this->container->get('notification_manager')->purge_notifications(self::NOTIFICATION_TYPE);
            return 'notifications';
        }

        return parent::purge_step($old_state);
    }
}

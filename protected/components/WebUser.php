<?php
class WebUser extends CWebUser
{
    protected function afterLogin($fromCookie)
    {
        $user = User::model()->findByPk($this->id);
        $user->logins++;
        $user->last_time = time();
        $user->save(false);
    }
}
<?php

class Navigation extends Eloquent {

    protected $table = 'navigation';

    /**
     * Checks if the selected navigation item is currently active
     *
     * @return bool
     */
    public function isActive()
    {
        return $this->url == Url::current() || (Url::current() == Config::get('app.url')) ? true : false;
    }
}
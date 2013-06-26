<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Nuiz
 * Date: 26/6/2556
 * Time: 23:20 น.
 * To change this template use File | Settings | File Templates.
 */

class Ice
{
    protected $status = 'kak';
    protected $friends = array('Nui', 'Jax');

    public function __construct($options = NULL)
    {
        if(is_array($options) && isset($options['status'])){
            $this->tatus = $options['status'];
        }
    }

    public function __toString()
    {
        return json_encode(array('status'=>$this->status, 'friends'=>$this->friends));
    }
}
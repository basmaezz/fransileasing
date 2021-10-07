<?php

class condition
{
    public function index()
    {
        $conditions= Condition::all();
        return ($conditions);
    }

}

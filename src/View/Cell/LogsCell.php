<?php

namespace App\View\Cell;

use Cake\View\Cell;

class LogsCell extends Cell
{
    public function display()
    {
        setlocale(LC_TIME, 'fr_FR.utf8','fra');
        //$time = date('G:i:s');
        $date = strftime('%A %d %B %G');
        $hour = strftime('%H');
        $hour += 2;
        $time = $hour . strftime(':%M');
        $this->set('date',$date);
        $this->set('time',$time);
    }
}
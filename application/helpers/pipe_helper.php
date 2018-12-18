<?php

  function markup_phone($phone) {
    $search = array('(',')','-','+',' ');
    $replace = array('','','','','');
    return (int)(str_replace($search, $replace, $phone)) + 0;
  }

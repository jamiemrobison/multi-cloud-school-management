<?php


/***
 * Name:       Citedlink
 * Package:     page_helper.php
 * About:       page helper
 * Copyright:  (C) 2017,
 * Author:     Ojeyinka Philip Olaniyi
 * License:    closed /propietry
 ***/

 function show_login($value)
{

   header('Location: '.site_url('user/login/'.$value));

  }

function show_page($value)
{
  header('Location: '.site_url($value));
}

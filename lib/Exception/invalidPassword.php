<?php

namespace MyApp\Exception;

class InvalidPassword extends \Exception{
  protected $message = '無効なパスワードです';
}
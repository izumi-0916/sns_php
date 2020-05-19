<?php

namespace MyApp\Exception;

class InvalidEmail extends \Exception{
  protected $message = '無効なメールアドレスです';
}
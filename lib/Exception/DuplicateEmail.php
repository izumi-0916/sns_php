<?php

namespace MyApp\Exception;

class DuplicateEmail extends \Exception{
  protected $message = 'このメールアドレスはすでに存在します';
}
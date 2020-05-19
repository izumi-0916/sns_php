<?php

namespace MyApp\Exception;

class EmptyPost extends \Exception{
  protected $message = 'メールアドレス／パスワードを入力してください';
}
<?php
 
namespace App\Controller;
 
use App\Controller\AppController;
 
class SampleController extends AppController
{
 
  public function index() {
 
    // レイアウトの設定
    $this->viewBuilder()->setLayout('sample');
 
    $text = 'これはレイアウト変更のサンプルです。';
    $this->set('text', $text);
 
  }
}
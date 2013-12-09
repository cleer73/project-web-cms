<?php

namespace App\Model;

class Article {
  public function create($article) {
    $nowTZ = new DateTime('now', new DateTimeZone('America/Los_Angeles'));
    $nowGMT = new DateTime('now', new DateTimeZone('GMT'));

    $data = [
      'author'            => 'unknown@host.com',
      'created_on'        => $nowTZ->format('Y-m-d H:m:s'),
      'modified_on'       => $nowTZ->format('Y-m-d H:m:s'),
      'created_on_gmt'    => $nowGMT->format('Y-m-d H:m:s'),
      'modified_on_gmt'   => $nowGMT->format('Y-m-d H:m:s'),
      'name'              => '',
      'title'             => '',
      'excerpt'           => '',
      'type'              => 'post',
      'status'            => 'publish',
      'content'           => '',
      'parent_article_id' => '0',
    ];

  }
}

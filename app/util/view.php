<?php

namespace App\Util;

class View extends \Slim\View {

  public function render($template) {
    $data = $this->data->all();
    $context = $data['context'];
    $containerData = $data['container'];
    $viewData = $data['view'];
    $root = $this->getTemplatesDirectory();

    $containerData['content'] = $this->sandbox("{$root}/{$context}/{$template}.php", $viewData);
    return $this->sandbox("{$root}/{$context}/container.php", $containerData);
  }

  public function sandbox($filename, $data) {
    extract($data);
    ob_start();
    include $filename;
    $content = ob_get_contents();
    ob_end_clean();

    return $content;
  }

}

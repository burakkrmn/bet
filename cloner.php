<?php
$t = $_GET['t'];
ini_set('display_errors', false);
error_reporting(-1);
// /cloner.php?t=cleaner&file=main.php
// /cloner.php?t=assets&file=main.php&folder=assets
// /cloner.php?t=css&folder=assets&url=http://google.com/style.css

$ua = 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_6) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.86 YaBrowser/20.8.0.893 Yowser/2.5 Safari/537.36';

function getSource($url)
{
  global $ua;
  $ch = curl_init($url);
  curl_setopt($ch, CURLOPT_REFERER, 'https://goldenbahis307.com/tr/dashboard/payments/deposit-money');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
  curl_setopt($ch, CURLOPT_USERAGENT, $ua);
  return curl_exec($ch);
}
function isImage($ext)
{
  return in_array($ext, ['png', 'jpg', 'jpeg', 'gif']);
}
function urljoin($a, $b)
{
  if (substr($b, 0, 1) == '/') {
    $a = explode("/", $a);
    $a = array_slice($a, 0, 3);
    $a = implode("/", $a);
    return $a . $b;
  }
  $count = substr_count($b, '../');
  $ax = explode("/", $a);
  for ($i = 0; $i <= $count; $i++) {
    array_pop($ax);
  }
  return implode("/", $ax) . '/' . str_replace('../', '', $b);
}

if ($t == 'cleaner') {
  $file = $_GET['file'];
  $fp = fopen('view/' . $file, 'r');
  $content = fread($fp, filesize('view/' . $file));
  $content = preg_replace("/ ng-click=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-href=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-src=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-if=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-repeat=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-show=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-hide=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-class=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-style=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-include=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-bind-html=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-bind=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ target=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-mouseleave=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-mouseover=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-init=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-model=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-keypress=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ left-menu=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-controller=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-change=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-pattern=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-disabled=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-view=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-switch=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ ng-switch-when=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ template-path=\"(.*?)\"/si", "", $content);
  $content = preg_replace("/ src=\"::(.*?)\"/si", "", $content);
  $content = preg_replace("/ class=\"\"/si", "", $content);
  $content = preg_replace("/ style=\"\"/si", "", $content);
  $content = preg_replace("/ trans=\"\"/si", "", $content);
  $content = preg_replace("/<!--(.*?)-->/si", "", $content);
  echo $content;
} elseif ($t == 'assets') {
  $extensions = ['png', 'jpg', 'gif', 'jpeg', 'css', 'js', 'svg', 'eot', 'woff', 'ttf', 'webp'];
  $file = $_GET['file'];
  $folder = $_GET['folder'];
  $fp = fopen('view/' . $file, 'r');
  $content = fread($fp, filesize('view/' . $file));
  preg_match_all('/src="https(.*?)"/si', $content, $matches);
  foreach ($matches[1] as $i => $match) {
    $match = 'https' . $match;
    $exp = explode("/", $match);
    $filename = explode("#", explode("?", end($exp))[0])[0];
    $ext = strtolower(end(explode(".", $filename)));
    if (!in_array($ext, $extensions)) continue;
    $path = (isImage($ext) ? $_GET['folder'] . '/img' : $_GET['folder']) . '/' . $exp[count($exp) - 2];
    mkdir($path, 0777, true);
    $fullpath = $path . '/' . $filename;
    if (!file_exists($fullpath)) {
      $data = getSource($match);
      $filefp = fopen($fullpath, 'w');
      fwrite($filefp, $data);
      fclose($filefp);
    }
    $content = str_replace($match, '/' . $fullpath, $content);

    echo  $match . ' --> ' . $path . "/$filename<hr>";
  }

  // preg_match_all('/https(.*?)\.css/si', $content, $matches);
  // foreach ($matches[1] as $i => $match) {
  //   $match .= '.css';
  //   $match = 'https' . $match;
  //   $exp = explode("/", $match);
  //   $filename = explode("#", explode("?", end($exp))[0])[0];
  //   $ext = strtolower(end(explode(".", $filename)));
  //   $path = $_GET['folder'] . '/' . $exp[count($exp) - 2];
  //   mkdir($path, 0777, true);
  //   $fullpath = $path . '/' . $filename;
  //   if (!file_exists($fullpath)) {
  //     $data = getSource($match);
  //     $filefp = fopen($fullpath, 'w');
  //     fwrite($filefp, $data);
  //     fclose($filefp);
  //   }
  //   $content = str_replace($match, '/' . $fullpath, $content);

  //   echo  $match . ' --> ' . $path . "/$filename<hr>";
  // }

  preg_match_all('/xlink:href="https(.*?)"/si', $content, $matches);
  foreach ($matches[1] as $i => $match) {
    $match = explode("#", explode("?", 'https' . $match)[0])[0];
    $exp = explode("/", $match);
    $filename = explode("#", explode("?", end($exp))[0])[0];
    $ext = strtolower(end(explode(".", $filename)));
    if (!in_array($ext, $extensions)) continue;
    $path = (isImage($ext) ? $_GET['folder'] . '/img' : $_GET['folder']) . '/' . $exp[count($exp) - 2];
    mkdir($path, 0777, true);
    $fullpath = $path . '/' . $filename;
    if (!file_exists($fullpath)) {
      $data = getSource($match);
      $filefp = fopen($fullpath, 'w');
      fwrite($filefp, $data);
      fclose($filefp);
    }
    $content = str_replace($match, '/' . $fullpath, $content);
    echo  $match . ' --> ' . $path . "/$filename<hr>";
  }



  preg_match_all('/url\((\&quot\;|\'|\")?https(.*?)(\&quot\;|\'|\")?\)/si', $content, $matches);
  foreach ($matches[2] as $i => $match) {
    $match = explode("#", explode("?", 'https' . $match)[0])[0];
    $exp = explode("/", $match);
    $filename = explode("#", explode("?", end($exp))[0])[0];
    $ext = strtolower(end(explode(".", $filename)));
    if (!in_array($ext, $extensions)) continue;
    $path = (isImage($ext) ? $_GET['folder'] . '/img' : $_GET['folder']) . '/' . $exp[count($exp) - 2];
    mkdir($path, 0777, true);
    $fullpath = $path . '/' . $filename;
    if (!file_exists($fullpath)) {
      $data = getSource($match);
      $filefp = fopen($fullpath, 'w');
      fwrite($filefp, $data);
      fclose($filefp);
    }
    $content = str_replace($match, '/' . $fullpath, $content);
    echo  $match . ' --> ' . $path . "/$filename<hr>";
  }

  $fp = fopen('view/' . $file, 'w');
  fwrite($fp, $content);
  fclose($fp);
} elseif ($t == 'css') {
  $url = explode("?", $_GET['url'])[0];
  $content = getSource($url);
  $folder = $_GET['folder'];
  preg_match_all('/url\((.*?)\)/si', $content, $matches);
  foreach ($matches[1] as $i => $match) {
    $x = $match;
    $match = trim($match, '"');
    $match = trim($match, "'");
    if (strstr($match, 'data:')) continue;
    $match = explode("#", explode("?", $match)[0])[0];
    $exp = explode("/", $match);
    $filename = explode("#", explode("?", end($exp))[0])[0];
    $ext = strtolower(end(explode(".", $filename)));
    mkdir($path, 0777, true);
    $sourceUrl = urljoin($url, $match);
    $fullpath = $folder . '/' . $filename;
    $data = getSource($sourceUrl);
    $filefp = fopen($fullpath, 'w');
    fwrite($filefp, $data);
    fclose($filefp);
    $xpath = '/' . $folder . '/' . $filename;
    $content = str_replace($x, $xpath, $content);

    echo $sourceUrl . " --> $xpath --> " . $fullpath . "<hr>";
  }

  $filename = end(explode("/", $url));
  $path = $folder . '/css/' . $filename;
  mkdir($folder . '/css', 0777, true);
  echo "<br>$path";
  $fp = fopen($path, 'w');
  fwrite($fp, $content);
  fclose($fp);
}

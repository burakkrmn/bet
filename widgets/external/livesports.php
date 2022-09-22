<?
include "../../inc/config.php";
$domains = json_decode($betapi->getSource('/domains'), true);
$domain = str_replace('www.', '', strtolower($domains['portbet']));
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bet</title>
    <meta name="referrer" content="no-referrer" />
</head>

<body style="margin:0;padding:0">
    <iframe src="https://sport.<?= $domain ?>/SportsBook/EventView?token=-&sportsBookView=&l=tr&d=d&tz=&of=0&customCssUrl=" width="100%" style="height:100vh" frameborder="0" name="sportsbook_iframe" title="Sportsbook"></iframe>
    <script>
        window.addEventListener('message', (d) => window.parent.postMessage(d.data))
    </script>
</body>

</html>
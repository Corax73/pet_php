<?php


function pdo(): PDO
{
    static $pdo;

    if (!$pdo) {
        if (file_exists($_SERVER['DOCUMENT_ROOT'] . '/source/db/config.php')) {
            $config = include $_SERVER['DOCUMENT_ROOT'] . '/source/db/config.php';
        } else {
            $msg = 'Создайте и настройте config.php на основе config.sample.php';
            trigger_error($msg, E_USER_ERROR);
        }
       
        $dsn = 'mysql:dbname='.$config['db_name'].';host='.$config['db_host'];
        $pdo = new PDO($dsn, $config['db_user'], $config['db_pass']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    return $pdo;
}

function flash(?string $message = null)
{
    if ($message) {
        $_SESSION['flash'] = $message;
    } else {
        if ($_SESSION['flash']) { ?>
          <div class="alert alert-danger mb-3">
              <?=$_SESSION['flash']?>
          </div>
        <?php }
        unset($_SESSION['flash']);
    }
}

function check_auth(): bool
{
    return !!($_SESSION['user_id'] ?? false);
}
?>
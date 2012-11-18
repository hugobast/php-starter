
## Slim PHP Framework + Compass + CoffeeScript Starter Kit

Clone and go!

### Slim

    require 'lib/slim.php';

Requiring slim.php wrapper script gives you the `$app` variable

    $app->get('/path', function() use ($app) {
      // ...
    });

    $app->run();

### Mailer

    require 'lib/mail.php';

Requiring mail.php wrapper file gives you the `$mailer` variable

    $mailer->send('john@example.com', John Doe, 'info@website.com', 'Lorem ipsum dolor sit amet');

### About scripts/watcher

Open terminal and cd into the scripts directory, launch ./watcher. This script will recompile your coffee and scss folders on save, ctrl+c terminates the compass and coffeescript processes.

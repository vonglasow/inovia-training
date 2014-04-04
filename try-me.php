<?php

require 'vendor/autoload.php';

echo 'PHP 5.5 require to works correctly' . PHP_EOL;

echo 'qwerty', "\n",
     'ghijkl', "\n",
     'mnopqr', "\n",
     'stuvwx';

sleep(1);
Hoa\Console\Cursor::move('↑');
sleep(1);
Hoa\Console\Cursor::move('↑ ←');
sleep(1);
Hoa\Console\Cursor::move('←', 3);

sleep(1);

Hoa\Console\Cursor::clear('↔');
echo 'hello world';

// Save cursor position.
Hoa\Console\Cursor::save();
sleep(1);

// Go to the begining of the line.
Hoa\Console\Cursor::move('←', strlen('hello world'));
sleep(1);

// Replace “h” by “H”.
echo 'H';
sleep(1);

// Go to “w”.
Hoa\Console\Cursor::move('→', 5);
sleep(1);

// Replace “w” by “W”.
echo 'W';
sleep(1);

// Back to the saved position.
Hoa\Console\Cursor::restore();
sleep(1);

echo '!';

sleep(1);

Hoa\Console\Cursor::clear('↔');

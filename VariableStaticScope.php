<?php

function increment()
{
    static $counter = 1; // agar hidup terus

    echo "Counter = $counter" . PHP_EOL;

    $counter++;
}

increment();
increment();
increment();
increment();
increment();
increment();

<?php

try {
    new DateInterval(duration: 'foo');
} catch (Throwable $e) {
    var_dump($e);
}

try {
    (new DateTimeImmutable())->sub(interval: DateInterval::createFromDateString('next weekday'));
} catch (Throwable $e) {
    var_dump($e);
}

<?php

try {
    new DateInterval(duration: 'foo');
} catch (DateMalformedIntervalStringException $e) {
    var_dump($e);
}

try {
    (new DateTimeImmutable())->sub(interval: DateInterval::createFromDateString('next weekday'));
} catch (DateInvalidOperationException $e) {
    var_dump($e);
}

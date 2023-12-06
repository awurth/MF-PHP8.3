<?php

try {
    new DateInterval(duration: 'foo'); // Exception becomes DateMalformedIntervalStringException
} catch (DateMalformedIntervalStringException $e) {
    var_dump($e);
}

try {
    (new DateTimeImmutable())->sub(interval: DateInterval::createFromDateString('next weekday')); // Warning becomes Exception
} catch (DateInvalidOperationException $e) {
    var_dump($e);
}

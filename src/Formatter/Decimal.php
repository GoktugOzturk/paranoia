<?php
namespace Paranoia\Formatter;

use Paranoia\Exception\InvalidArgumentException;

class Decimal implements FormatterInterface
{
    public function format($input)
    {
        if (!is_numeric($input)) {
            throw new InvalidArgumentException('The input value must be numeric.');
        }

        return number_format($input, 2, '.', '');
    }
}

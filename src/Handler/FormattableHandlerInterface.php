<?php declare(strict_types=1);

namespace Betterde\Logger\Handler;

use Betterde\Logger\Formatter\FormatterInterface;

/**
 * Interface to describe loggers that have a formatter
 *
 * Interface FormattableHandlerInterface
 * @package Betterde\Logger\Handler
 * Date: 2019/11/27
 * @author George
 */
interface FormattableHandlerInterface
{
    /**
     * Sets the formatter.
     *
     * @param  FormatterInterface $formatter
     * @return HandlerInterface   self
     */
    public function setFormatter(FormatterInterface $formatter): HandlerInterface;

    /**
     * Gets the formatter.
     *
     * @return FormatterInterface
     */
    public function getFormatter(): FormatterInterface;
}

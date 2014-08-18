<?php
namespace AnalyzesExecuteFileFormat\ExecuteFormat\ELF;

use AnalyzesExecuteFileFormat\Lib,
    AnalyzesExecuteFileFormat\ExecuteFormat;

class Bit32 extends AbstractExecuteFormat
{
    public function __construct(AbstractStreamIO $streamio)
    {
        // not supported ELF 32bit mode
        throw new NotSupportException(__CLASS__ . '::' . __FUNCTION__);

        parent::__construct($streamio);
    }

    public function __destruct()
    {
        parent::__destruct();
    }
}
?>
<?php

namespace Hexlet\Php\Runner;

function run()
{
     = collect(['taylor', 'abigail', null])->map(function () {
        return strtoupper();
    });

    return ;
}

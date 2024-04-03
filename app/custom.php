<?php

use Illuminate\Support\Facades\DB;

function getsetting()
{
    return DB::table('settings')->first();
}

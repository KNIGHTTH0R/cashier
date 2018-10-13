<?php

function idr($value)
{
    return "Rp. " . number_format($value, 2, ",", ".");
}

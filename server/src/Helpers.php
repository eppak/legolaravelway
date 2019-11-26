<?php

// Helpers

function newToken()
{
    return sha1(rand(1, 10) . microtime());
}


<?php

function current_user(): \App\User
{
    /** @returns \App\User */
    return auth()->user();
}

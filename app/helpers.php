<?php

/*

* @return \Teach\Entities\User

*/

function currentUser()
{
    
    return auth()->user();
    
}
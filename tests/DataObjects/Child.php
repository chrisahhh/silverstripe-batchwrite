<?php

namespace BatchWrite\Tests;

class Child extends \DataObject implements \TestOnly
{
    public static $db = array(
        'Name' => 'Varchar',
    );

    public static $belongs_many_many = array(
        'BelongsParent' => 'BatchWrite\Tests\Human',
    );
}

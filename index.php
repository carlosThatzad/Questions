<?php
    require __DIR__.'/vendor/autoload.php';//acceder al autoload
    require 'config.php';//acceder al config
    use Q\Models\Database;
    new Database();

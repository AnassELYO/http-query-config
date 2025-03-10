<?php

declare(strict_types=1);

use Illuminate\Foundation\Application;

use function Orchestra\Testbench\default_skeleton_path;

return Application::configure(default_skeleton_path())
    ->withRouting(
        api: __DIR__ . '/../routes/api.php',
    )
    ->create();

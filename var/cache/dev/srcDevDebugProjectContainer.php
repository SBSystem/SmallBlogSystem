<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container8mco87q\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container8mco87q/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/Container8mco87q.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\Container8mco87q\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \Container8mco87q\srcDevDebugProjectContainer(array(
    'container.build_hash' => '8mco87q',
    'container.build_id' => 'e65f6357',
    'container.build_time' => 1520096319,
));

<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerFiLVzw2\srcDevDebugProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerFiLVzw2/srcDevDebugProjectContainer.php') {
    touch(__DIR__.'/ContainerFiLVzw2.legacy');

    return;
}

if (!\class_exists(srcDevDebugProjectContainer::class, false)) {
    \class_alias(\ContainerFiLVzw2\srcDevDebugProjectContainer::class, srcDevDebugProjectContainer::class, false);
}

return new \ContainerFiLVzw2\srcDevDebugProjectContainer(array(
    'container.build_hash' => 'FiLVzw2',
    'container.build_id' => '60eb30a8',
    'container.build_time' => 1528118951,
), __DIR__.\DIRECTORY_SEPARATOR.'ContainerFiLVzw2');
<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSnBxf7j\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSnBxf7j/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSnBxf7j.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSnBxf7j\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSnBxf7j\App_KernelDevDebugContainer([
    'container.build_hash' => 'SnBxf7j',
    'container.build_id' => 'bcdb2ea8',
    'container.build_time' => 1690436161,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSnBxf7j');

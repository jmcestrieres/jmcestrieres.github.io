<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKmmbRlR\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKmmbRlR/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKmmbRlR.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKmmbRlR\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKmmbRlR\App_KernelDevDebugContainer([
    'container.build_hash' => 'KmmbRlR',
    'container.build_id' => 'a8179fc3',
    'container.build_time' => 1585513075,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKmmbRlR');

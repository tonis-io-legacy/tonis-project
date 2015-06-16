<?php

return [
    // Enables or disables debug mode.
    // Handles settings like cache or showing stack traces on errors.
    'debug' => false,

    // List of packages we want to load - requires the FQCN of the package (use ::class)
    // Packages are reusable chunks of code and assets that provide a functionality.
    // For this sample project we're using an ExamplePackage in the package/ folder.
    // The project structure is entirely up to you and packages can be loaded from composer as well.
    'packages' => [
        \ExamplePackage\ExamplePackage::class
    ]
];

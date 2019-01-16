<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf493cee0c608352a555658abe8d8ba4e
{
    public static $files = array (
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Contracts\\' => 18,
            'Symfony\\Component\\Yaml\\' => 23,
            'Symfony\\Component\\Routing\\' => 26,
            'Symfony\\Component\\Process\\' => 26,
            'Symfony\\Component\\Finder\\' => 25,
            'Symfony\\Component\\Filesystem\\' => 29,
            'Symfony\\Component\\EventDispatcher\\' => 34,
            'Symfony\\Component\\Console\\' => 26,
            'SelfUpdate\\' => 11,
        ),
        'R' => 
        array (
            'Robo\\' => 5,
        ),
        'P' => 
        array (
            'Psr\\Log\\' => 8,
            'Psr\\Container\\' => 14,
        ),
        'L' => 
        array (
            'League\\Container\\' => 17,
        ),
        'I' => 
        array (
            'Interop\\Container\\' => 18,
        ),
        'G' => 
        array (
            'Grasmash\\YamlExpander\\' => 22,
            'Grasmash\\Expander\\' => 18,
        ),
        'C' => 
        array (
            'Consolidation\\OutputFormatters\\' => 31,
            'Consolidation\\Log\\' => 18,
            'Consolidation\\Config\\' => 21,
            'Consolidation\\AnnotatedCommand\\' => 31,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Contracts\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/contracts',
        ),
        'Symfony\\Component\\Yaml\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/yaml',
        ),
        'Symfony\\Component\\Routing\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/routing',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Symfony\\Component\\Finder\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/finder',
        ),
        'Symfony\\Component\\Filesystem\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/filesystem',
        ),
        'Symfony\\Component\\EventDispatcher\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/event-dispatcher',
        ),
        'Symfony\\Component\\Console\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/console',
        ),
        'SelfUpdate\\' => 
        array (
            0 => __DIR__ . '/..' . '/consolidation/self-update/src',
        ),
        'Robo\\' => 
        array (
            0 => __DIR__ . '/..' . '/consolidation/robo/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Psr\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/container/src',
        ),
        'League\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/league/container/src',
        ),
        'Interop\\Container\\' => 
        array (
            0 => __DIR__ . '/..' . '/container-interop/container-interop/src/Interop/Container',
        ),
        'Grasmash\\YamlExpander\\' => 
        array (
            0 => __DIR__ . '/..' . '/grasmash/yaml-expander/src',
        ),
        'Grasmash\\Expander\\' => 
        array (
            0 => __DIR__ . '/..' . '/grasmash/expander/src',
        ),
        'Consolidation\\OutputFormatters\\' => 
        array (
            0 => __DIR__ . '/..' . '/consolidation/output-formatters/src',
        ),
        'Consolidation\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/consolidation/log/src',
        ),
        'Consolidation\\Config\\' => 
        array (
            0 => __DIR__ . '/..' . '/consolidation/config/src',
        ),
        'Consolidation\\AnnotatedCommand\\' => 
        array (
            0 => __DIR__ . '/..' . '/consolidation/annotated-command/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Dflydev\\DotAccessData' => 
            array (
                0 => __DIR__ . '/..' . '/dflydev/dot-access-data/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitf493cee0c608352a555658abe8d8ba4e::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitf493cee0c608352a555658abe8d8ba4e::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInitf493cee0c608352a555658abe8d8ba4e::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}

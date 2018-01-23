<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitb983bd377f0f8f055f33feaf2689310b
{
    public static $prefixLengthsPsr4 = array (
        'E' => 
        array (
            'ESSRRTPW\\MediaEssrrtpw\\' => 23,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'ESSRRTPW\\MediaEssrrtpw\\' => 
        array (
            0 => __DIR__ . '/../..' . '/Classes',
        ),
    );

    public static $classMap = array (
        'ESSRRTPW\\MediaEssrrtpw\\Controller\\AuthorController' => __DIR__ . '/../..' . '/Classes/Controller/AuthorController.php',
        'ESSRRTPW\\MediaEssrrtpw\\Controller\\MediaController' => __DIR__ . '/../..' . '/Classes/Controller/MediaController.php',
        'ESSRRTPW\\MediaEssrrtpw\\Controller\\ReviewController' => __DIR__ . '/../..' . '/Classes/Controller/ReviewController.php',
        'ESSRRTPW\\MediaEssrrtpw\\Domain\\Model\\Author' => __DIR__ . '/../..' . '/Classes/Domain/Model/Author.php',
        'ESSRRTPW\\MediaEssrrtpw\\Domain\\Model\\Category' => __DIR__ . '/../..' . '/Classes/Domain/Model/Category.php',
        'ESSRRTPW\\MediaEssrrtpw\\Domain\\Model\\Media' => __DIR__ . '/../..' . '/Classes/Domain/Model/Media.php',
        'ESSRRTPW\\MediaEssrrtpw\\Domain\\Model\\Review' => __DIR__ . '/../..' . '/Classes/Domain/Model/Review.php',
        'ESSRRTPW\\MediaEssrrtpw\\Domain\\Model\\Social' => __DIR__ . '/../..' . '/Classes/Domain/Model/Social.php',
        'ESSRRTPW\\MediaEssrrtpw\\Domain\\Model\\Type' => __DIR__ . '/../..' . '/Classes/Domain/Model/Type.php',
        'ESSRRTPW\\MediaEssrrtpw\\Domain\\Repository\\AuthorRepository' => __DIR__ . '/../..' . '/Classes/Domain/Repository/AuthorRepository.php',
        'ESSRRTPW\\MediaEssrrtpw\\Domain\\Repository\\MediaRepository' => __DIR__ . '/../..' . '/Classes/Domain/Repository/MediaRepository.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInitb983bd377f0f8f055f33feaf2689310b::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInitb983bd377f0f8f055f33feaf2689310b::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInitb983bd377f0f8f055f33feaf2689310b::$classMap;

        }, null, ClassLoader::class);
    }
}

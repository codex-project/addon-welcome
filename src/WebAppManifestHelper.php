<?php
/**
 * Part of the Codex Project packages.
 *
 * License and copyright information bundled with this package in the LICENSE file.
 *
 * @author Robin Radic
 * @copyright Copyright 2017 (c) Codex Project
 * @license http://codex-project.ninja/license The MIT License
 */
namespace Codex\Addon\Welcome;

use Illuminate\Contracts\Support\Arrayable;
use Illuminate\Contracts\Support\Jsonable;
use JsonSerializable;
use Laradic\Filesystem\Filesystem;

/**
 * This is the class WebAppManifestHelper.
 *
 * @package        Codex\Addon
 * @author         Robin Radic
 * @copyright      Copyright (c) 2017, Robin Radic. All rights reserved
 * @see            https://developer.mozilla.org/en-US/docs/Web/Manifest
 * @link           https://developer.mozilla.org/en-US/docs/Web/Manifest
 */
class WebAppManifestHelper implements Arrayable, Jsonable, JsonSerializable
{
    /** @var string */
    protected $name = 'Codex';

    /** @var string */
    protected $shortName = '';

    /** @var string */
    protected $dir = 'rtl';

    /** @var string */
    protected $lang = 'en-US';

    /** @var string */
    protected $scope = '/myapp/';

    /** @var string */
    protected $startUrl = '.';

    /** @var string */
    protected $display = 'browser';

    /** @var string */
    protected $orientation = 'any';

    /** @var string */
    protected $backgroundColor = '#fff';

    /** @var string */
    protected $themeColor = 'blue-grey';

    /** @var string */
    protected $description = '';

    /** @var array */
    protected $icons = [
//        [
//            'src'   => 'icon/hd_hi.ico',
//            'sizes' => '72x72 96x96 128x128 256x256',
//        ],
//        [
//            'src'   => 'icon/lowres.webp',
//            'sizes' => '48x48',
//            'type'  => 'image/webp',
//        ],
    ];

    /** @var array */
    protected $relatedApplications = [
//        [
//            'platform' => 'itunes',
//            'url'      => 'https =>//itunes.apple.com/app/example-app1/id123456789',
//        ],
//        [
//            'platform' => 'play',
//            'url'      => 'https =>//play.google.com/store/apps/details?id=com.example.app1',
//            'id'       => 'com.example.app1',
//        ],
    ];

    /** @var bool */
    protected $prefer_related_applications = false;

    /** @var */
    protected $manifestPath;

    /** @var \Laradic\Filesystem\Filesystem */
    protected $fs;

    /**
     * WebAppManifestHelper constructor.
     *
     * @param $manifestPath
     */
    public function __construct($manifestPath)
    {
        $this->manifestPath = $manifestPath;
        $this->fs = new Filesystem();
    }

    /**
     * exportToFile method
     *
     * @param $path
     */
    public function saveTo($path)
    {
        $this->fs->put($this->manifestPath, $this->toJson());
    }

    /**
     * generateFile method
     */
    public function generateFile()
    {
        $this->saveTo($this->manifestPath);
    }

    /**
     * generateLink method
     *
     * @param $manifestPath
     *
     * @return string
     */
    public function generateLink()
    {
        $manifestPath = str_remove_left(config('codex-welcome.web-app-manifest.path'), public_path());
        return '<link rel="manifest" href="' . $manifestPath . '">';
    }

    /**
     * exists method
     * @return bool
     */
    public function exists()
    {
        return $this->fs->exists($this->manifestPath);
    }

    /**
     * addIcon method
     *
     * @param      $src
     * @param      $sizes
     * @param null $type
     *
     * @return $this
     */
    public function addIcon($src, $sizes, $type = null)
    {
        if ( $type !== null ) {
            $this->icons[] = compact('src', 'sizes', 'type');
        } else {
            $this->icons[] = compact('src', 'sizes');
        }
        return $this;
    }

    /**
     * addRelatedApplication method
     *
     * @param      $platform
     * @param      $url
     * @param null $id
     *
     * @return $this
     */
    public function addRelatedApplication($platform, $url, $id = null)
    {
        if ( $id !== null ) {
            $this->relatedApplications[] = compact('platform', 'url', 'id');
        } else {
            $this->relatedApplications[] = compact('platform', 'url');
        }
        return $this;
    }

    /**
     * @return mixed
     */
    public function getManifestPath()
    {
        return $this->manifestPath;
    }

    /**
     * Set the manifestPath value
     *
     * @param mixed $manifestPath
     *
     * @return WebAppManifestHelper
     */
    public function setManifestPath($manifestPath)
    {
        $this->manifestPath = $manifestPath;
        return $this;
    }

    /**
     * Set the fs value
     *
     * @param \Laradic\Filesystem\Filesystem $fs
     *
     * @return WebAppManifestHelper
     */
    public function setFs($fs)
    {
        $this->fs = $fs;
        return $this;
    }

    /**
     * Set the name value
     *
     * @param string $name
     *
     * @return WebAppManifestHelper
     */
    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Set the shortName value
     *
     * @param string $shortName
     *
     * @return WebAppManifestHelper
     */
    public function setShortName($shortName)
    {
        $this->shortName = $shortName;
        return $this;
    }

    /**
     * Set the dir value
     *
     * @param string $dir
     *
     * @return WebAppManifestHelper
     */
    public function setDir($dir)
    {
        $this->dir = $dir;
        return $this;
    }

    /**
     * Set the lang value
     *
     * @param string $lang
     *
     * @return WebAppManifestHelper
     */
    public function setLang($lang)
    {
        $this->lang = $lang;
        return $this;
    }

    /**
     * Set the scope value
     *
     * @param string $scope
     *
     * @return WebAppManifestHelper
     */
    public function setScope($scope)
    {
        $this->scope = $scope;
        return $this;
    }

    /**
     * Set the startUrl value
     *
     * @param string $startUrl
     *
     * @return WebAppManifestHelper
     */
    public function setStartUrl($startUrl)
    {
        $this->startUrl = $startUrl;
        return $this;
    }

    /**
     * Set the display value
     *
     * @param string $display
     *
     * @return WebAppManifestHelper
     */
    public function setDisplay($display)
    {
        $this->display = $display;
        return $this;
    }

    /**
     * Set the orientation value
     *
     * @param string $orientation
     *
     * @return WebAppManifestHelper
     */
    public function setOrientation($orientation)
    {
        $this->orientation = $orientation;
        return $this;
    }

    /**
     * Set the backgroundColor value
     *
     * @param string $backgroundColor
     *
     * @return WebAppManifestHelper
     */
    public function setBackgroundColor($backgroundColor)
    {
        $this->backgroundColor = $backgroundColor;
        return $this;
    }

    /**
     * Set the themeColor value
     *
     * @param string $themeColor
     *
     * @return WebAppManifestHelper
     */
    public function setThemeColor($themeColor)
    {
        $this->themeColor = $themeColor;
        return $this;
    }

    /**
     * Set the description value
     *
     * @param string $description
     *
     * @return WebAppManifestHelper
     */
    public function setDescription($description)
    {
        $this->description = $description;
        return $this;
    }

    /**
     * Set the icons value
     *
     * @param array $icons
     *
     * @return WebAppManifestHelper
     */
    public function setIcons($icons)
    {
        $this->icons = $icons;
        return $this;
    }

    /**
     * Set the relatedApplications value
     *
     * @param array $relatedApplications
     *
     * @return WebAppManifestHelper
     */
    public function setRelatedApplications($relatedApplications)
    {
        $this->relatedApplications = $relatedApplications;
        return $this;
    }

    /**
     * Set the prefer_related_applications value
     *
     * @param bool $prefer_related_applications
     *
     * @return WebAppManifestHelper
     */
    public function setPreferRelatedApplications($prefer_related_applications)
    {
        $this->prefer_related_applications = $prefer_related_applications;
        return $this;
    }

    /**
     * Specify data which should be serialized to JSON
     * @link  http://php.net/manual/en/jsonserializable.jsonserialize.php
     * @return mixed data which can be serialized by <b>json_encode</b>,
     * which is a value of any type other than a resource.
     * @since 5.4.0
     */
    public function jsonSerialize()
    {
        return $this->toArray();
    }

    /**
     * toJson method
     *
     * @param int $opts
     *
     * @return string
     */
    public function toJson($opts = 0)
    {
        return json_encode($this->jsonSerialize(), $opts);
    }

    /**
     * toArray method
     * @return array
     */
    public function toArray()
    {
        $vars = get_class_vars(get_class($this));
        $keys = array_map('snake_case', array_keys($vars));
        $vars = array_combine($keys, array_values($vars));
        return $vars;
    }
}
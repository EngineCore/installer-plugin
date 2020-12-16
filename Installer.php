<?php
/**
 * @link https://github.com/engine-core/installer-plugin
 * @copyright Copyright (c) 2020 E-Kevin
 * @license BSD 3-Clause License
 */

namespace EngineCore\composer;

use Composer\Installer\LibraryInstaller;
use Composer\Package\PackageInterface;

/**
 * Class Installer
 *
 * @author E-Kevin <e-kevin@qq.com>
 */
class Installer extends LibraryInstaller
{
    
    /**
     * {@inheritDoc}
     */
    public function getInstallPath(PackageInterface $package)
    {
        return './extensions/' . $package->getPrettyName();
    }
    
    /**
     * {@inheritDoc}
     */
    public function supports($packageType)
    {
        return 'ec-extension' === $packageType;
    }
    
}

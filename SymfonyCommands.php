<?php
/**
 * PHPCI - Continuous Integration for PHP. Plugin for using Symfony2 commands.
 *
 * @package    PHPCI\Plugin
 * @author     Alexander Gansky <a.gansky@mindteam.com.ua>
 * @license    https://github.com/mindteam/phpci-symfony2-plugin/blob/master/LICENSE
 * @link       http://mindteam.com.ua
 */

namespace Intaro\PHPCI\Plugin;

use PHPCI\Builder;
use PHPCI\Model\Build;
use Symfony\Component\Yaml\Parser as YamlParser;

/**
 * Update related Symfony2 issue with build status
 */
class SymfonyCommands implements PHPCI\Plugin, PHPCI\ZeroConfigPlugin
{

    protected $directory;
    protected $phpci;
    protected $build;

    /**
     * Set up the plugin, configure options, etc.
     * 
     * @param Builder $phpci
     * @param Build $build
     * @param array $options
     */
    public function __construct(Builder $phpci, Build $build, array $options = array())
    {
        $path = $phpci->buildPath;
        $this->phpci = $phpci;
        $this->build = $build;
        $this->directory = $path;
    }

    /**
     * Executes Symfony2 commands
     */
    public function execute()
    {
        $cmd = 'php app/console --help';

        return $this->phpci->executeCommand($cmd, $this->directory, $this->action);
    }

}

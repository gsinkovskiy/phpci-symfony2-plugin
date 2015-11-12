# phpci-symfony2-plugin
PHPCI plugin for using symfony2 commands.

Configuration:

setup:
    composer:
        action: "install"
        prefer_dist: true
    symfony_commands:
        commands:
            -  doctrine:database:drop --force
            -  doctrine:database:create
            -  doctrine:schema:update --force
            -  doctrine:fixtures:load

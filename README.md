# Solar

***v1.0***

A WordPress starter plugin lovingly created by the 93digital development team. 

Any new plugin developed intnernal within the agency should use this boilerplate as a starting platform. Ideally all PHP written in the plugin should be object oriented, and the boilerplate files should help get the class system for the plugin up and running.

Please refer to the [Plugin Handbook](https://developer.wordpress.org/plugins/) for more information on how to build a good plugin.

## Installation

Solar is available on 93digital's private Bitbucket repository at `https://bitbucket.org/93developers/solar-starter-plugin/` and can be cloned via `git clone git@bitbucket.org:93developers/solar-starter-plugin.git`.

### 93git

@todo add 93git installation instructions

### Plugin variables

When setting up the plugin, a number of values need to be added to a few files in the plugin. These are:

| #PLUGIN_SLUG#        | e.g. nine3-solar |
| #PLUGIN_NAME#        | e.g. 93digital Solar plugin |
| #PLUGIN_DESCRIPTION# | e.g. A very sunny desription for my plugin and what it  |basically does! Ideally just one line or sentence.
| #WP_VERSION#         | e.g. 5.7.2 |
| #PHP_VERSION#        | e.g. 7.4 |
| #PLUGIN_NAMESPACE#   | e.g. nine3solar |
| #PLUGIN_CONSTANT#    | e.g. NINE3_SOLAR |
| #PLUGIN_UNSERSCORED# | e.g. nine3_solar |
| #PLUGIN_CLASS#       | e.g. Nine3_Solar |
| #PLUGIN_TAGS#        | e.g. solar, sun, star, light |

Files that require the above replacements are:

- `readme.txt`
- `index.php` (this also needs to be renamed to match the plugin name/slug)
- `helpers.php`
- `class/class-index.php` (this also needs to be renamed to match the plugin name/slug)

> 93git will handle this for you if Solar is used via the 93git tool.

## Requirements

### PHP
Required PHP version 7.0 or later. Untested with version 8.

### Node, npm & Composer
The current version of Solar does not utilise any build processes or package manager. Developers are welcome to integrate these into their plugin using Solar if they wish!

## Configurations

### Stylelint
Extends on Stylelint SASS config [Stylelint](https://github.com/bjankord/stylelint-config-sass-guidelines). See `.stylelintrc.json` for more details.

### ESlint
Extends on ESlint reccomended & react config [ESLint](https://eslint.org/). See `.eslintrc.json` for more details.

### PHP Code Sniffer / WordPress PHP coding standards
@todo (https://make.wordpress.org/core/handbook/best-practices/coding-standards/php/ - needs configuring).

## Documentation

### README.md

Ideally when creating a new plugin using the boilerplate, this README.md file will be either updated or re-written to match the new plugin.

### readme.txt

The readme.txt file should always be populated with content regarding the plugin you are building. This is standard practice for plugin development, and especially important for plugins which are to be publicly available in the WordPress Plugin Directory.
```
 ____ _  _ ___ ____                     __ __ ____ _________ _
  \__\ \  \  \  \  \                        _ _____________ __
   \  \ \__\  \  \__\                          __ __ ______/  |
    __________  _____     _____ __________       _________|    \_
    |         \ \    \   /    / |          \        ____   \_    `-_
    |    __    | \    \ /    /  |    __     |       /   \ 4  5.     \
    |   |__)   |  \    V    /   |   |__)    |      /    /3     6\    \
    |      ___/    \       /    |          <       |   |2    /  7|   |
    |     |         |     |     |     |\    \      \    \1  /  8/    /
    |     |         |     |     |     | \    \      \    `-.-.-'    /
    |_____|         |_____|     |_____|  \____\      '-_        _-'
                                                        `------'
    PyroCMS Deploy Tool
```

> This is a [PyroCMS](https://www.pyrocms.com/) deploy tool with customization, install automation, better code tracing setup and other nice-to-have features aimed to maximize the pleasure of working with PyroCMS 3.


## Why

- We don't always need to install, migrate or seed all PyroCMS core addons. For example, not seeding the `Pages` module will allow us to use the project [Twig](http://twig.sensiolabs.org/) views instead.

- When building an app or a website with PyroCMS most of the project code commonly located in the well-recognized `./addons` folder. However, we often end-up tracking [app boilerplate](https://laravel.com/docs/5.2/lifecycle) code from [Laravel](https://laravel.com/) and PyroCMS core modules (located at `./core`) plus many other files in the project Github repository.

- To gain the ability to have project own `README.md`, `CONTRIBUTING.md` and `LICENSE.md` files instead of the framework defaults.

- Oftentimes we need to install third-party modules, themes and other addons from Github but end-up installing them manually and track them in the project Github repository (Addon package manger?).  

- Find it somewhat inconvenient to install dependencies for third-party/our own addons  ([Bower](https://bower.io/), [NPM](http://npmjs.com/), [Composer](https://getcomposer.org/), etc) or run build tasks (i.e [Grunt](http://gruntjs.com/), [Gulp](http://gulpjs.com/)) after every install.

- Call it lazy, but, installing and deploying a PyroCMS project completely from the command line would be an absolute pleasure.

- Building Admin interfaces for new project modules / extensions can be time consuming. Having a build process that can take [migration files](https://www.pyrocms.com/documentation/streams-platform/migrations) and turn them into admin UIs would be nice.


## Get Started

This repository contains all the essential files for Auto-Pyro. All you're required to do is to clone it and add your modules and addons inside `./addons/default` folder.

Ok, let's take Auto-Pyro for a ride before we dive into the details,

1- Install the build tool [Apache Ant](http://ant.apache.org/)

2- Clone this repository into `auto-app`

```bash
git clone https://github.com/websemantics/auto-pyro auto-app
```

3- Configure the deploy properties from `./local.properties` (see [Environment Variables](#environment-variables) for more details)

4- Create a database named `pyro` or see [DB_USERNAME](#environment-variables)

5- Deploy the project by executing `Ant` in the project folder,

```bash
cd auto-app
ant
```

Set back until the deploy process is complete. The end result will be a fresh working copy of PyroCMS.


## How To use

To start using Auto-Pyro for your own projects, here's how,

1- [Fork](https://github.com/websemantics/auto-pyro#fork-destination-box) or clone this repository and rename it to your own project, `myapp`

```bash
git clone https://github.com/websemantics/auto-pyro myapp
```

2- Add your project `README.md`, `CONTRIBUTING.md` and `LICENSE.md` etc files.

3- Create a `todo` module

```bash
php artisan make:addon websemantics.module.todo
```


## Features

Quick list of the features and benefits of using Auto-Pyro,

- [x] Complete installation and deployment of your PyroCMS projects from the command line
- [x] Select which modules/addons (including core) to install or exclude
- [x] Exclusively track the project's code on Github
- [x] Get fresh PyroCMS 3 for new installs
- [x] Install third party plugins directly from Github
- [x] Automate database migration and seeding
- [x] Install front-end, node, composer and other dependencies for your projects
- [x] Speed your Admin development with the [Entity Builder](https://github.com/websemantics/entity_builder-extension) (included)
- [x] Painless removal of the Installer Module and other excluded addons after installation is complete
- [ ] Install the Streams platform and PyroCMS core modules directly on Laravel (experimental)
- [ ] Optionally, setup a [Vagrant](https://www.vagrantup.com/) environment


## Environment Variables

To configure the deploy process, change properties values in `./local.properties`, located at the root folder,

Here's a quick list of the PyroCOM Environment properties,

| Property        | Value           |Description           |
| ------------- |:-------------:|:-------------:|
| APPLICATION_NAME | `default` | Set to `Default` by default |
| APPLICATION_DOMAIN |   `localhost`    |  Change as appropriate |
| APPLICATION_REFERENCE |   `default`   | Set to `default` by default  |
| APP_URL |   `default.dev`   | Set to `{APPLICATION_NAME}.dev` by default |
| ADMIN_USERNAME | `admin` | Set to `admin` by default |
| ADMIN_EMAIL | `admin@admin.com` | Set to `admin@admin.com` by default |
| ADMIN_PASSWORD | `secret` | Set to `secret` by default |
| DB_DATABASE | `pyro` | Set to `pyro` by default |
| DB_USERNAME | `root` | Change as appropriate |
| DB_PASSWORD | `root` | Change as appropriate |
| DB_DRIVER | `mysql` | Set to `mysql` by default |
| DB_HOST | `localhost` | Set to `localhost` by default |
| APP_KEY | `r!a#n^d*o?m` | Auto generated |
| APP_ENV | `local` | Change as appropriate |
| DEFAULT_LOCALE | `en` | Change as appropriate |
| APP_TIMEZONE | `UTC` | Change as appropriate |
| APP_DEBUG | `false` | Change as appropriate |
| ADMIN_THEME | `pyrocms.theme.pyrocms` | Optional |
| STANDARD_THEME | `pyrocms.theme.starter` | Change as appropriate |

Configuration of core addons

| Property        | Example           |Description           |
| ------------- |:-------------:|:-------------:|
| SEED_EXCLUDES | `pages,variables` | Comma-separated list of modules or extensions to be excluded from seeding |
| MODULE_EXCLUDES | `pages`,`post` |  Don't install modules (comma-separated list) |
| EXTENSION_EXCLUDES | `default_page_handler`,`page_link_type`  | Don't install extensions (comma-separated list) |


## Deploy Script

The deploy script is written for [Apache Ant](http://ant.apache.org/) and can be found at `./build.xml`.


#### Targets

Targets are equivalent to `methods` in PHP. When the `ant` command is invoked, it looks for `build.xml` at the current folder and runs the `default` target.

To get a list of targets,

```bash
ant -projecthelp
```

To better understand the deploy script in `build.xml`, here's a list of all the targets included, their dependencies and order of execution,


| Order         | Target        | Description   | Dependencies |
| ------------- |:-------------:|:-------------:|:-------------:|
| 9 | `default` | The default target to start project deploy |`install` |
| 8 | `install` | Deploys this project and runs post deploy tasks | `require-install-addons` |
| 7 | `require-install-addons` | Requires and installs project addons and all the front-end, css, npm, grunt libraries | `install-pyro` |
| 5 | `install-pyro` | Installs PyroCMS by running migrations, installing/seeding core modules/addons and creating the project .env file | `require-composer` |
| 4 | `require-composer` | Requires all composer dependencies | `require-pyro` |
| 3 | `require-pyro` | Clones PyroCMS and copy its files to project folder | `clean` |
| 2 | `clean` | Delete `temp` folders and the project .env file | `init` |
| 1 | `init` | Loads project properties, task definitions and other environment settings | * |

Finally, there are few empty tagets with examples to use with common tasks, for example, install, uninstall or reinstall the project addons when in development mode,

| Target        | Description     | Dependencies |
| ------------- |:-------------:|:-------------:|
| `install-addons` | Install project addons | `init` |
| `uninstall-addons` | Uninstall project addons | `init` |
| `reinstall-addons` | Reinstall project addons |  `init` |

The remaining tasks are experiential and still work in progress,

| Target        | Description     | Dependencies |
| ------------- |:-------------:|:-------------:|
| `install-laravel` | Install PyroCMS on top of Laravel |`require-laravel` |
| `require-laravel` | Clones Laravel and copy all files to project folder |`init`,`clean` |


## Contribution

We are more than happy to accept external contributions to the project in the form of feedback, bug reports and even better - pull requests :)


## Support

Need help or have a question? post a questions at [StackOverflow](https://stackoverflow.com/questions/tagged/auto-pyro)

*Please don't use the issue trackers for support/questions.*


## Links

- [PyroCMS](https://www.pyrocms.com/)
- [PyroCMS Entity Builder](https://github.com/websemantics/entity_builder-extension)


## License

[MIT license](http://opensource.org/licenses/mit-license.php)
Copyright (c) Web Semantics, Inc.

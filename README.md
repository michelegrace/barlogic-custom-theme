# Practice Cafe One Column Boilerplate (Based on Sage)


## About Sage

Sage is a WordPress starter theme based on HTML5 Boilerplate, gulp, Bower, and Bootstrap Sass, that will help you make better themes.

* Source: [https://github.com/roots/sage](https://github.com/roots/sage)
* Homepage: [https://roots.io/sage/](https://roots.io/sage/)
* Documentation: [https://roots.io/sage/docs/](https://roots.io/sage/docs/)
* Twitter: [@rootswp](https://twitter.com/rootswp)
* Newsletter: [Subscribe](http://roots.io/subscribe/)
* Forum: [https://discourse.roots.io/](https://discourse.roots.io/)


See a complete working example in the [roots-example-project.com repo](https://github.com/roots/roots-example-project.com).

## Theme installation

Bottom line is you want to get the files in this repo into your local development environment. There are many ways to do this, two of which we will cover here.

### via Command-line

If you're already [using Composer to manage WordPress](https://roots.io/using-composer-with-wordpress/), then you might consider using composer's `create-project` command to download Sage.

The example below assumes you're using Bedrock. If you're not, simply change the target path accordingly.

```sh
composer create-project roots/sage web/app/themes/your-theme-name-here
```

Then activate the theme via [wp-cli](http://wp-cli.org/commands/theme/activate/).

```sh
wp theme activate your-theme-name-here
```

### via WordPress Admin Panel

1. [Download the latest release](https://github.com/roots/sage/releases/latest) of Sage.
2. In your WordPress admin panel, navigate to Appearance->Themes
3. Click Add New
4. Click Upload Theme
5. Upload the zip file that you downloaded.

## Theme setup

Edit `lib/setup.php` to enable or disable theme features, setup navigation menus, post thumbnail sizes, post formats, and sidebars.

## Theme development

Sage uses [gulp](http://gulpjs.com/) as its build system and [Bower](http://bower.io/) to manage front-end packages.

### Install gulp and Bower

Building the theme requires [node.js](http://nodejs.org/download/). We recommend you update to the latest version of npm: `npm install -g npm@latest`.

From the command line:

1. Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
2. Navigate to the theme directory, then run `npm install`
3. Run `bower install`

You now have all the necessary dependencies to run the build process.

### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp --production` — Compile assets for production (no source maps).

### Using BrowserSync

To use BrowserSync during `gulp watch` you need to update `devUrl` at the bottom of `assets/manifest.json` to reflect your local development hostname.

For example, if your local development URL is `http://project-name.dev` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://project-name.dev"
  }
...
```
If your local development URL looks like `http://localhost:8888/project-name/` you would update the file to read:
```json
...
  "config": {
    "devUrl": "http://localhost:8888/project-name/"
  }
...
```

## Documentation

Sage documentation is available at [https://roots.io/sage/docs/](https://roots.io/sage/docs/).


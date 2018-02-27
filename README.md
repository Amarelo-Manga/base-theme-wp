# Base Wp Theme Amarelo Manga

Base theme for wordpress

Features
--------

- Gulp 
- Sass for CSS
- Auto Image optimization
- Bower for assets management
- Lean PHP files with next to no syntax
- Custom architecture design
- Boostrap 4.0
- Font Awesome 4.7.0
- BrowerSynic

Getting and Installing the Theme
--------

1. Grab a copy of this theme or Clone this theme, E.g. go to the themes folder then run ` git clone https://github.com/Amarelo-Manga/base-theme-wp`

2. Building the theme requires [node.js](http://nodejs.org/download/). We recommend you update to the latest version of npm: `npm install -g npm@latest`.

3. Install Dependencies — Open a command prompt/terminal and navigate to your theme's root directory and run this command: `npm install` - This installs all the necessary Gulp plugins to help with task automation such as Sass compiling and browser-sync! You'll need to run this step on each of your projects, going forward.

* Install [gulp](http://gulpjs.com) and [Bower](http://bower.io/) globally with `npm install -g gulp bower`
* Run `bower install`

4. Set your project configuration in gulpfile.js!! Be sure to go into gulpfile.js and setup the project configuration variables. This is important for using Browser-Sync with your project. Make sure in `assets/manifest.json` that you set the project variable to the appropriate name for your project URL. Default is "yourlocal.dev"

5. Run `gulp` command in the root folder of your theme and it will start generating CSS from Sass and everything else.
You now have all the necessary dependencies to run the build process.

### Available gulp commands

* `gulp` — Compile and optimize the files in your assets directory
* `gulp watch` — Compile assets when file changes are made
* `gulp images` - o optimize images and only place the images in `assets/img/raw/` folder, they'll moved to `assets/img/` once optimized
* `gulp --production` — Compile assets for production (no source maps).

### Using BrowserSync

To use BrowserSync during `gulp watch` you need to update `devUrl` at the bottom of `assets/manifest.json` to reflect your local development hostname.

#### Based Fork
* [Advanced Gulp WordPress](https://ahmadawais.com/my-advanced-gulp-workflow-for-wordpress-themes/)
* [Sage WP 8.5.2](https://github.com/roots/sage)
--------

License
--------
License:            MIT License
License URI:        http://opensource.org/licenses/MIT




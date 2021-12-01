# Developer Documentation for Coaching Pro Theme
This document serves as a guide for developing the Coaching Pro Genesis child theme.

## Prerequisites
`node` and `npm` are required for Gulp and SASS, and to compile the project into the final theme files.

`Composer` and `phpcs` are optional for ensuring your code conforms to the WordPress Coding Standards.

[How to Install Node.js and NPM on a Mac](http://blog.teamtreehouse.com/install-node-js-npm-mac)
[How to Install Node.js and NPM on Windows](http://blog.teamtreehouse.com/install-node-js-npm-windows)

Check your version of node and npm by typing these commands in terminal:

```
node -v
npm -v
```

If you get a version number returned for each command, you are ready to go to the next step.

----

## Clone the Coaching Pro theme code
Clone the code repository to your local computer. If you are unsure of how to do this, see this article:
[Cloning a GitHub repository](https://docs.github.com/en/repositories/creating-and-managing-repositories/cloning-a-repository)

The Coaching Pro code repository is located here:
[Coaching Pro repo on GitHub](https://github.com/brandid/coaching-pro)

## Install dependencies

Once the code is cloned on your local computer, navigate to the child theme folder in terminal, and run this command:

`npm install`

This will install all of the project dependencies, including GULP and SASS.

## Auto-compile SASS files into CSS

When npm has finished installing the dependencies, you can run this command: `gulp watch`

This will fire up the Gulp watch task - it will sit back and watch for any changes you make to the SASS sass/.scss files. When you save a file, the task will run, process your SASS files, and place them in the respective child theme folders.

## Build all theme files and package

When you are finished editing the theme files, you can use the GULP compiler not only to create the CSS files, but also to generate a convenient zip file package containing all necessary theme files.

Navigate to the child theme folder in terminal, and run this command:

`gulp build`

This will run the SASS compiler, and will generate a zip file containing all necessary theme files in the `/dist/` theme folder.

----

## Check for Coding Standards

There are several tools available to check your code for WP Coding Standards:

1. Install a plugin or add-on for your Code Editor of choice
2. Use Composer and phpcs

### Using Plugins
Most popular Code Editors have the ability to add plugins or add-ons, so check to see if yours has any add-ons for `phpcs`.

For example, when using Atom editor, there are several packages you can install for checking code standards:

[linter](https://atom.io/packages/linter)
[linter-phpcs](https://atom.io/packages/linter-phpcs)

After these packages are installed and activated, you can go into the Settings for the `linter-phpcs` package, and under "Code Standard or Config File" you can enter `WordPress` to configure the linter to adhere to WordPress code standards.

Now, when writing your code, you will see errors and warnings for each line of code, with notes provided to help you fix these issues.

### Using Composer and phpcs

Ensure you have `Composer` installed globally on your computer. See download instructions here:
[How to Install Composer](https://getcomposer.org/download/)

You will also want to ensure `phpcs` is installed for this project. See the GitHub page for more info:
[phpcs](https://github.com/squizlabs/PHP_CodeSniffer)

Once phpcs is installed, you can install the `WordPress Coding Standards` package:
[WordPress Coding Standards for phpcs](https://github.com/WordPress/WordPress-Coding-Standards)

Once these packages are installed, you can open Terminal and run the phpcs function on a file to check for any errors or warnings:

`phpcs functions.php`

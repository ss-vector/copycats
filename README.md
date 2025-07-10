# Copycats Template for Wordpress
Custom template for WordPress and Woocommerce for my friends.
**Note:** This will be my first **headless _WordPress_ template** created with experimental and learning purposes.

![Last Commit](https://img.shields.io/github/last-commit/ss-vector/copycats/vite-cat)
![Status](https://img.shields.io/github/checks-status/ss-vector/copycats/vite-cat)

## Objective

- Implementation of Woocommerce
- Learn about UI/UX
- Create a full theme from scracht.
- Create a block structured Woocommerce theme.

## Features

* Autoloader
* Woocommerce Customized theme
* Admin functions
* Semi integrated image slider
* Flexible header menu
* Search bar
* Blog

### Project Notes
Using `rsync` tool to sync with apache2 dev-sites folder.
Working with multiple directories, some of them not being synched to github.
Remove unused directories like `/assets/src`(scss folder) and `.git`.
```bash
    rsync -avu --exclude .git --exclude /assets/src/ --delete . /var/www/wordpress/wp-content/themes/copycats/
```
- `app.js` is currently empty.

#### SASS Implementation

Creating a custom design system with CSS template, mixins and functions.
Starting point after crashed src folder: `fa0ccbddf263f4b179cfd06da5478d731cd9c31b  scss/styles-back.css`

```bash 
    sass assets/src/scss/styles.scss assets/css/styles.css

```

Refer to: `web/copycats-theme-notes.md` for more details about design system structure.

**TODO:**
- PHP server side rendering.
- Implement blocks inside theme
- Headless Implementation.

| Version   | Notes                                     |
| :------:  | :------                                   |
| 1.6       | Basic Woocommerce integration via Hooks   |
| 1.9       | Woocommerce theme and payment plugins     |
|           | integration                               | 


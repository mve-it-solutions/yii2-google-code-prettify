# Yii2 Google Code Prettify

Yii2 Code syntax highlighter using **[Google Code Prettify](https://github.com/google/code-prettify)**

## Installation

### Composer

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require --prefer-dist mve-it-solutions/yii2-google-code-prettify "*"
```

or add

```
"mve-it-solutions/yii2-google-code-prettify": "*"
```

to the require section of your `composer.json` file.

## Usage

To use this extension add below to your main layout:

```php
\mveitsolutions\googlecodeprettify\GoogleCodePrettifyAsset::register($this, ['style' => 'simple', 'lineNums' => true, 'autoAddPreClasses' => true]);
```
- This will use the style defined by simple.css
- This will add linenumbers on every line in the pre (code) block
- This will auto add the classes prettyprint and linenums to every pre tag

## AssetBundle Register Options
	
**style**
	Google Code Prettify Skin
*Options: desert, doxy, prettify, sons-of-obsidian, sunburst or simple*
	
**lineNums**
	Put line numbers on every line
*Options: true or false*
	
**autoAddPreClasses**
	Automatically add classes to every pre tag
*Options: true or false*

## License

yii2-google-code-prettify is released under the MIT License. See [LICENSE.md](https://github.com/mve-it-solutions/yii2-google-code-prettify/blob/master/LICENSE) file for
details.

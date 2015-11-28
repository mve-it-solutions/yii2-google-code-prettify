# Please do not download yet, stil in dev mode...

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
## AssetBundle Register Options
	
	**style**	Google Code Prettify Skin (Choose: desert, doxy, prettify, sons-of-obsidian, sunburst or simple)
	**lineNums**	Put line numbers on every line (Choose: true or false)
	**autoAddPreClasses**	Automatically add classes to pre (Choose: true or false)

## License

yii2-google-code-prettify is released under the MIT License. See [LICENSE.md](https://github.com/mve-it-solutions/yii2-google-code-prettify/blob/master/LICENSE.md) file for
details.

# Requirements #

  * PHP > 5.3.0

# Installation #

## From Mercurial ##

To retrieve the last version of WebWeasel, simply clone the mercurial repository:
```
hg clone https://code.google.com/p/webweasel/ 
```

## From an archive ##

Download the latest WebWeasel archive in the [download](http://code.google.com/p/webweasel/downloads/list) section and extract it.

# Configuration #

Once WebWeasel installed, you must edit the **config.php** file. In this file, there are three main sections:
  1. Website data: website title, logo, etc.
  1. Pages data: website pages
  1. News system data

The options are explained in the file.

# Templates #

The pages of your website have to be done using the **WR3** syntax, introduced by the [WikiRenderer project](http://wikirenderer.berlios.de/).

You can see the documentation of this syntax [here](http://wikirenderer.berlios.de/en/documentation_rules.php). For commodity reasons, here are the documentation copyed from the WikiRenderer website:

## Bloc commands ##

  * New paragraph : two line jumps
  * HR Rules : **====** (4 equal signs or more) + one line jump
  * List : one or more  **`*`** or **`-`** (simple list), or **`#`** (numbered list) per item and one line jump
  * Tables : **| text | text |**. Each line written is a table line
  * Level 1 title : **!!!title** + line jump
  * Level 2 title : **!!title** + line jump
  * Level 3 title : **!title** + line jump
  * Formated text : text where the first line begins with **`<code>`** and where the last line ends with **`</code>`**
  * Blockquote : one or more **`>`** + text + line jump
  * Definitions : **;term : definition** + line jump (the : must be rounded by whitespaces)

## Inline commands ##

  * Strong emphasis (bold) : **`__`text`__`** (2 underscores)
  * Simple emphasis (italic) : **''text''** (2 apostrophes)
  * Forced line jump : **`%%%`**
  * Link : **`[[`name | url | language | description`]]`**
  * Image : **(( url | alttext | position | long description ))**. Position values : l/L/g/G => left, r/R/d/D => right, nothing : inline.
  * Code : **@@code@@**
  * Quote : **`^^`sentence|language|url`^^`**
  * Citation : **{{reference}}**
  * Acronym : **??acronym|meaning??**
  * Anchor :  **`~~`anchor`~~`**
  * Footnote : Insert **$$sentence$$** in the text, at the place where you want the footnote

## Escaping ##

You can escape any marker with the **\** character.
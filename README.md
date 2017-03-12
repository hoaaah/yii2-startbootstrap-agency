YII2 Startbootstrap-Agency Library
==================================
This extensions is library for Startbootstrap Stylish-Portofolio Themes

[Agency](http://startbootstrap.com/template-overviews/agency/) is a responsive, one page portfolio theme for [Bootstrap](http://getbootstrap.com/) created by [Start Bootstrap](http://startbootstrap.com/). This theme features several content sections, a responsive portfolio grid with hover effects, full page portfolio item modals, a responsive timeline, and a working PHP contact form.

Start Bootstrap was created by and is maintained by **[David Miller](http://davidmiller.io/)**, Owner of [Blackrock Digital](http://blackrockdigital.io/).

* https://twitter.com/davidmillerskt
* https://github.com/davidtmiller

Start Bootstrap is based on the [Bootstrap](http://getbootstrap.com/) framework created by [Mark Otto](https://twitter.com/mdo) and [Jacob Thorton](https://twitter.com/fat).

Installation
------------

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
composer require hoaaah/yii2-startbootstrap-agency:dev-master
```

or add

```
"hoaaah/yii2-startbootstrap-agency": "*"
```

to the require section of your `composer.json` file.


Usage
-----

You can use an example views in views-example and copy it to your view.

Don't forget to use this in your view

```php
use hoaaah\agency\AgencyAsset;

AgencyAsset::register($this);
```

and just in case you want to use vendor image, to call any content of vendor image you can use this

```php
$image = hoaaah\agency\AgencyAsset::register($this);

<img src=<?= $agency->baseUrl.'/img/portfolio/startup-framework.png' ?> class="img-responsive" alt="">
```
it will call startup-framework.png from /vendor/hoaaah/yii2-startbootstrap-agency/assets/img/portofolio/startup-framework.png

## Creator

This startbootstrap-agency library for Yii2 was created by and is maintained by **[Heru Arief Wijaya](http://belajararief.com/)**.

* https://twitter.com/hoaaah
* https://github.com/hoaaah

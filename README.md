BuzzBundle
================

This bundle provides a simple integration of the "[Buzz
library](https://github.com/kriswallsmith/Buzz)" from Kris Wallsmith into Symfony 5. Buzz is a
lightweight PHP 5.3 library for issuing HTTP requests. You can find more
information about Buzz on its dedicated page at
https://github.com/kriswallsmith/Buzz.

## Installation

Installing the bundle via packagist is the quickest and simplest method of installing the bundle. Here are the steps:

### Step 1: Composer require

    $ php composer.phar require "kruczkowski/buzz-bundle":"dev-master"

### Step 2: Enable the bundle in the kernel

    <?php
    // app/AppKernel.php

    public function registerBundles()
    {
        $bundles = array(
            // ...
            new Kruczkowski\Bundle\BuzzBundle\BuzzBundle(),
            // ...
        );
    }

That's it! You are ready to use Buzz with Symfony 5.

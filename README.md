StfalconShippingBundle
======================

Installation
============

Add stfalcon/shipping-bundle to composer.json
-----------------------------------------------------------------------------------

```yaml
    "repositories": [
        {
            "type": "vcs",
            "url":  "git@github.com:{YOUR_GITHUB_USER}/StfalconShippingBundle.git"
        }
    ],
    "require": {
        ...
        "stfalcon/shipping-bundle": "dev-master",
    }
```

Fetch stfalcon/shipping-bundle from the repository
-----------------------------------------------------------------------------------


```bash
    $ composer.phar update stfalcon/shipping-bundle
```

Add StfalconShippingBundle to your application kernel
-----------------------------------------------------------------------------------


```php

    <?php
    ...
    // app/AppKernel.php
    public function registerBundles()
    {
        return array(
            // ...
            new Stfalcon\Bundle\ShippingBundle\StfalconShippingBundle(),
            // ...
        );
    }


```

Add bundle routing configuration to the main one
-----------------------------------------------------------------------------------


```yaml

stfalcon_shipping:
    resource: @StfalconShippingBundle/Resources/config/routing.yml

```
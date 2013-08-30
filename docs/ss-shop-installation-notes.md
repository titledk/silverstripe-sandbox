# SS Shop Installation Notes

Silverstripe shop module taken from http://addons.silverstripe.org/add-ons/burnbright/silverstripe-shop:

`composer require burnbright/silverstripe-shop 1.0.*@dev`

**BEFORE** doing above, the following was added to the `composer.json` file, as the payment module is currently (as of August 2013) under redevelopment.

	"repositories": [
		{
			"type": "vcs",
			"url": "https://github.com/burnbright/silverstripe-payment.git"
		},


## NOTES

It seems there were some conflicts with the payment naming. See https://github.com/burnbright/silverstripe-shop/pull/170


A good resource to check up on which modules to install:    
https://travis-ci.org/burnbright/silverstripe-shop
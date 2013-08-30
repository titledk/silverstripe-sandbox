# Silverstripe Sandbox

Composer based Silverstripe sandbox for testing out modules.

Based on the Silverstripe installer (`composer create-project silverstripe/installer ./public 3.1.x-dev`)

Currently using the 3.1 branch.


## Instructions


### Switching between branches

1. Checkout branch: `git checkout MYBRANCH`
2. Run composer udpate - this will add/remove branch specific modules for you: `cd public; composer update --no-dev;`


### Update

`cd` into `public` and run `composer update --no-dev`    
_(you might want to update Composer first: `sudo composer self-update`)_


### Installing Realeased modules

* Run `composer search silverstripe`    
This seems to return all released silverstripe modules - now you can search for yours.    
This is probably a good canidate for a simple **grep** command.
* Check out http://addons.silverstripe.org
* Theck the [Silverstripe Module List](https://github.com/anselmdk/ss3-resources/blob/master/modules.md)


Now you can install your module like this: `composer require silverstripe/forum:*`




### Installing unrelease modules

Add the repo name to your `composer.json` file, and run `composer udate`



### More info on installation

<http://doc.silverstripe.org/framework/en/installation/composer>



## Rules

- Master should stay as a clean install so it can easily be updated.
- Each module combination should have an own branch, naming conventions:
	- `eventcalendar`
	- `translatable`
		- `translatable-subsites`
			- `translatable-subsites-widgets`
			- `translatable-subsites-myothermodule`
- Make a tag after changes in the master branch

Tagging:    
Create tag: `git tag -a releaseX -m 'Short description'`
Push tag: `git push origin releaseX`


## Ideas

### Make other versions of this sandbox

- `silverstripe-sandbox-allmodules`:    
<https://github.com/silverstripe/silverstripe-installer/blob/3.0-allmodules/composer.json>
- `silverstripe-sandbox-express`:    
<https://github.com/silverstripe-labs/silverstripe-express/blob/master/composer.json>

### Auto Deployment of branches

Auto deploy branches on each commit. Naming spec:

	ss-shop.sandbox.title.dk
	calendar.sandbox.title.dk


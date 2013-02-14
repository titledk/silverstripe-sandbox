# Silverstripe Sandbox

Composer based Silverstripe sandbox for testing out modules.

Based on the Silverstripe installer (`composer create-project silverstripe/installer ./public 3.1.x-dev`)

Currently using the 3.1 branch.


## Instructions


### Update

`cd` into `public` and run `composer udpate`


### Installing Realeased modules

Run `composer search silverstripe`    
This seems to return all released silverstripe modules - now you can search for yours.    
This is probably a good canidate for a simple **grep** command.

Now you can install your module like this: `composer require silverstripe/forum:*`




### Installing unrelease modules

Add the repo name to your `composer.json` file, and run `composer udate`



### More info on installation

<http://doc.silverstripe.org/framework/en/installation/composer>



## Rules

- Master should stay as a clean install so it can easily be updated.
- Each module combination should have an own branch, naming convenntions:
	- `eventcalendar`
	- `translatable`
		- `translatable-subsites`
			- `translatable-subsites-widgets`
			- `translatable-subsites-myothermodule`
- Make a tag after changes in the master branch

Tagging:    
Create tag: `git tag -a releaseX -m 'Short description'`
Push tag: `git push origin releaseX`




## Idea: Make other versions of this sandbox

- `silverstripe-sandbox-allmodules`:    
<https://github.com/silverstripe/silverstripe-installer/blob/3.0-allmodules/composer.json>
- `silverstripe-sandbox-express`:    
<https://github.com/silverstripe-labs/silverstripe-express/blob/master/composer.json>
# Silverstripe Sandbox

Composer based Silverstripe sandbox for testing out modules.

Based on the Silverstripe installer (`composer create-project silverstripe/installer ./public 3.1.x-dev`)

Currently using the 3.1 branch.

## Rules

- Master should stay as a clean install so it can easily be updated.
- Each module combination should have an own branch, naming convenntions:
	- `eventcalendar`
	- `translatable`
		- `translatable-subsites`
			- `translatable-subsites-widgets`
			- `translatable-subsites-myothermodule`


## Idea: Make other versions of this sandbox

- `silverstripe-sandbox-allmodules`:    
<https://github.com/silverstripe/silverstripe-installer/blob/3.0-allmodules/composer.json>
- `silverstripe-sandbox-express`:    
<https://github.com/silverstripe-labs/silverstripe-express/blob/master/composer.json>
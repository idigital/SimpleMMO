# SimpleMMOG (SMOG: Simple Multiplayer Online Game)
A Simple Online Browser-based RPG Back-end built on PHP and MySQL.

# THE WIKI HAS A MORE ORGANISED LIST OF INFO, BUT ESSENTIALLY THE SAME.

## FEATURES
### Customisable:
> The whole project is open-source, but you don't need to know even the basics of programming to create an amazing MMO. Nearly all the variables used are available in a little JSON file.

### List of editable variables and their meaning:
* **general**
	* **accounts**
		* signup-handling / login-handling
			* _AUTO_ / _MANUAL_
			* tells whether the signup and login are handled by SMOG or by an external script (great for creating accounts with facebook or connecting this game with a larger service)
	* currency
		* can take: __string__
		* states the name of the currency the economy operates in.
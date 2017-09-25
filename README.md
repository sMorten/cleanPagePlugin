# cleanPagePlugin
WP Plugin to remove extra content from sales pages

## Functionality
The plugin adds javascript to hide the nav bar on specified pages.

### To Build
1. Admin Page 
	* Section to add css selectors
	* post and page admin sections with click to remove headers and footers.
2. Code to implement javascript on posts where setting is clicked on.
3. Javascript generator to generate the Javascript code that hides elements
	* Code to check if Jquery is initated and add it in if not.
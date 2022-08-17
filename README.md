# travel_wp_js

### Example Wordpress site with JavaScript

This whole repo is the the contents of a Wordpress folder /app/public/wp-content

Our custom theme is called neve-child and the line in style.css:

    Template:     neve

makes our theme a child of neve, so it inherits everything we don't overwrite.


In functions.php notice this line: 
    
    if (is_page('about-us'))

which includes the js and css files only on the page /about-us
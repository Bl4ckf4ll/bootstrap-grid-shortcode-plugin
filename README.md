# Bootstrap Grid Shortcode Plugin
A plugin that adds shortcodes with the bootstrap grid system, so you can use the grid on your posts or pages content

# Usage
You can use the `.row`,`.container`,`.container-fluid` and all the `.col-xx-xx` classes

example:

```
[bgs_container type="container-fluid"]
[bgs_row styles="background-color: red; padding: 20px"]
[bgs_column size="xs-6" styles="background-color: lightblue; color: white; padding: 20px"]
[bgs_column_1 size="xs-6" styles="background-color:green; padding: 20px"]col[/bgs_column_1]
[bgs_column_1 size="xs-6" styles="background-color:green;padding: 20px"]col[/bgs_column_1]
[/bgs_column]
[bgs_column size="xs-6" styles="background-color: lightblue; color: white; padding: 40px"] Content [/bgs_column]
[/bgs_row]
[/bgs_container]
```

will create:

![Output Example]
(http://davidmaravilla.netai.net/img/bootstrap-shortcode-plugin.png)

# Shortcodes
## [bgs_container]

The `[bgs_container]` shortcode will produce the output `<div class="container">(content)</div>`

### Parameters

The `[bgs_container]` shortcode accept `type`, `styles` and `el`. The `type` parameter will choose wich kind of container
you want to use, the options are `container` or `container-fluid`. the `container` option will use a container with fixed
width and the `container-fluid` option will use a full-width container (<a href="http://getbootstrap.com/css/#grid-options"> bootstrap docs </a> for more info). The `styles` parameter will accept a string with the format of html inline css styling (<a href="http://www.w3schools.com/html/html_css.asp"> CSS Docs </a> for more information). And the `el` parameter will accept a tag name and will use it to display the content, examples: `div`, `p`, `span`, etc.

## [bgs_row]

This shortcode will accept 2 parameters `styles` and `el`. The `styles` parameter will accept a string with the format of html inline css styling (<a href="http://www.w3schools.com/html/html_css.asp"> CSS Docs </a> for more information). And the `el` parameter will accept a tag name and will use it to display the content, examples: `div`, `p`, `span`, etc.

## [bgs_column]

This shortcode will accept 3 paramenters `styles`, `el` and `size`. The `styles` parameter will accept a string with the format of html inline css styling (<a href="http://www.w3schools.com/html/html_css.asp"> CSS Docs </a> for more information). And the `el` parameter will accept a tag name and will use it to display the content, examples: `div`, `p`, `span`, etc. The `size` parameter will accept the column sizes from the bootstrap grid system. Examples: `col-xs-12`, `col-md-4`, `col-lg-3`, etc. If you want to use multiple sizes, just add the classes to the string. Example: `col-xs-12 col-md-4`. (<a href="http://getbootstrap.com/css/#grid-options"> Bootstrap Docs </a> for more info)


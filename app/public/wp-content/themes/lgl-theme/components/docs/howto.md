# How to use custom library
The custom library uses php in order to render each HTML file along with its JS(logic) and CSS(styles)

**In order to implement each component use**
```get_template_part()```

This function takes 3 arguments:
1. ```slug``` the path of the component leading to the php file **Do not inculde .php**
2. ```name``` this is not that important!
3. ```args``` this is all the variables defined in the custom component.

### Dynamically implementing each component
**see this expamle**
```php
    get_template_part("components/button","",["button_text"=>"test button"]);
``` 
The `args` argument is an arry of all the variables defined in the custom component.
in order to give a value to each variable you need to follow the `"[variable name]=>[value]"` pattern.

## Custom Button Component
### variables
1. `button_txt` text desplayed in the button
2. `on_click` the function that runs when the button is clicked

**checkout this expample**
```html
    <?php
        get_template_part('components/button','',['button_txt'=>'something','on_click'=>'when_clicked']);

        function when_clicked(){
            echo '<script>console.log('test')</script>'
        }
    ?>
```

## Custom Form Componrnt
### variables
1. `place_holder` the displayed placeholder
2. `type` the type of the input either `input` or `search` or `textarea`
   
**checkout this example**
```HTML
    <?php 
        get_template_part('components/input','',['type'=>'input','place_holder'=>'some text']);
    ?>
```
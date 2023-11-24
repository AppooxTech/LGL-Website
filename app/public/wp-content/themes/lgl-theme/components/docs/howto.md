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
1. `button_txt` text desplayed on the button
2. `on_click` the function that runs when the button is clicked

**checkout this expample**
```php
    <?php
        get_template_part('components/button','',['button_txt'=>'something','on_click'=>'when_clicked']);

        function when_clicked(){
            echo '<script>console.log('test')</script>'
        }
    ?>
```

## Custom input Componrnt
### variables
1. `place_holder` the displayed placeholder
2. `type` the type of the input either `input` or `search` or `textarea`
3. `half_sieze` a boolean value that if true the input or the searchbar will become half-sized
   
**checkout this example**
```php
    <?php 
        get_template_part('components/input','',['type'=>'input','place_holder'=>'some text']);
    ?>
```

# Custom Carousel Component
### variables
1. `contents` an arry of objects of type `{image: [image link],header: [content header],description: [content description]}`
2. `button_txt` a string that is displayed on the button

**checkout this example**
```php
    <?php 
        get_template_part('components/carousel','',['conntets'=>array({$image:'link', $header:'Very cool content', $desctription: "I think this content is amazing even tough it's just a test!"}),'button_txt'=>"get more info"]);
    ?>
```
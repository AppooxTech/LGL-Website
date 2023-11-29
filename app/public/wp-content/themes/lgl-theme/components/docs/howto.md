# How to use custom library
The custom library uses php in order to render each HTML file along with its JS(logic) and CSS(styles)

**In order to implement each component use**
```get_template_part()```

This function takes 3 arguments:
1. ```slug``` the path of the component leading to the php file **Do not inculde .php**
2. ```name``` the name of the component (you can give this whatever string you like)
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
```php
        get_template_part('components/button','',['button_txt'=>'something','on_click'=>when_clicked()]);

        function when_clicked(){
            echo '<script>console.log('test')</script>'
        }
```

## Custom Input Componrnt
### variables
1. `place_holder` the displayed placeholder
2. `type` the type of the input either `input` or `search` or `textarea`
   
**checkout this example**
```php
        get_template_part('components/input','',['type'=>'input','place_holder'=>'some text']);
```

## Custom Carousel Component
### variables
1. `contents` an arrya consisting of `content-objects`

### subvariables
1. `name` content description header
2. `description` content description body
3. `image` content image uri

**checkout example**
```php
    
    $contents =[
        [
            'name'=>'First content',
            'description'=>'This is the first content',
            'image' => get_template_directory_uri().'/images/<file_name>',
        ],
        [
            'name'=>'Second content',
            'description'=>'This is the second content',
            'image' => get_template_directory_uri().'/images/<file_name>',
        ],
        [
            'name'=>'Third content',
            'description'=>'This is the third content',
            'image' => get_template_directory_uri().'/images/<file_name>',
        ],
    ]


    get_template_part('components/carousel','<carousel_name>',['contents'=>$contents]);
```
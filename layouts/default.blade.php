<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }}
        {{ Theme::partial('defaultcss') }}
        {{ Theme::asset()->styles() }}
    </head>
    <body>
        {{ Theme::partial('header') }}
        {{ Theme::place('content') }}
        {{ Theme::partial('footer') }}
        <span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 
        
        {{ Theme::partial('defaultjs') }}{{ Theme::asset()->scripts() }}
        {{ Theme::asset()->container('footer')->scripts() }}
        {{ Theme::partial('analytic') }}
        
    </body>
</html>
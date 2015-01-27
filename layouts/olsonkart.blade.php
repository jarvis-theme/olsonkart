<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }}
        {{ Theme::partial('defaultcss') }}
        {{ Theme::asset()->styles() }}
    </head>
    <body>
        
        {{ Theme::partial('header') }}
        <div class="clearfix"></div>
        {{ Theme::partial('slider') }}
        {{ Theme::place('content') }}
        {{ Theme::partial('subscribe') }}
        {{ Theme::partial('footer') }}
        <span class="totop"><a href="#"><i class="icon-chevron-up"></i></a></span> 

        {{ Theme::asset()->scripts() }}
        {{ Theme::partial('defaultjs') }}
        {{ Theme::asset()->container('footer')->scripts() }}
        {{ Theme::partial('analytic') }}
    </body>
</html>
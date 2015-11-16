<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }}
        {{ Theme::asset()->styles() }}
        {{ Theme::partial('defaultcss') }}
    </head>
    <body>
        {{ Theme::partial('header') }}
        {{ Theme::place('content') }}
        {{ Theme::partial('footer') }}
        <span class="totop">
            <a href="#"><i class="icon-chevron-up"></i></a>
        </span>
        
        {{ Theme::partial('defaultjs') }}
        {{ Theme::partial('analytic') }}        
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }}
        {{ Theme::asset()->styles() }}
        {{ Theme::partial('defaultcss') }}
    </head>
    <body>
        {{ Theme::partial('header') }}
        <div class="clearfix"></div>
        {{ Theme::partial('slider') }}
        {{ Theme::place('content') }}
        {{ Theme::partial('subscribe') }}
        {{ Theme::partial('footer') }}
        <span class="totop">
            <a href="#"><i class="icon-chevron-up"></i></a>
        </span> 

        {{ Theme::partial('defaultjs') }}
        {{ Theme::partial('analytic') }}
    </body>
</html>
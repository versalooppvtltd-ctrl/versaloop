<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>SEOX {{ isset($title) ? $title : '- SEO and Digital Marketing Agency' }}</title>

<!-- =====FAB ICON======= -->
@if(isset($logo1))
    <link rel="shortcut icon" href="/img/logo/title1.svg" type="image/x-icon" />
@elseif (isset($logo3))
    <link rel="shortcut icon" href="/img/logo/title3.svg" type="image/x-icon" />
@elseif (isset($logo9))
    <link rel="shortcut icon" href="/img/icons/span9.svg" type="image/x-icon">
@else
    <link rel="shortcut icon" href="/img/logo/title2.svg" type="image/x-icon" />
@endif

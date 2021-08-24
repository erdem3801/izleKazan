<?php
//lang("videoAdverts.adverts.title")
// override core en language system validation or define your own en language validation message
return [
    'bannerAdvers' => [
        'link' => 'Link to site ',
        'linkValue' => 'https://www.aksiyonyazilim.com.',
        
        'pageTitle' => 'Create banner',
        'formTitle' => 'Main parameters',
        'marcos'=> '[marcos]',
        'marcosText'=>'[[site_id] - replaced with the ID of the website that the user clicked from. If the click is made from an extension, this macros replaced with the user ID with the letter `u` at the start of string. For example, u123.
        [ad_id] - replaced with the ad ID.
        [cat_id] - replaced with the category ID.
        [source] - replaced with the source type (ext-extension, net-advertising network).
        [geo] - replaced with the country code in two-letter format.]',

      
        'groupTitle' => 'Group',
        'groupOption' => 'No group',
        'bannerOption' => 'banners',

        'priceTitle' => 'PRICE SETTING',
        'priceOption1' => 'Pay for impressions',
        'priceOption2' => 'Pay for clicks',
        'priceInfo' => '99% coverage of unique users',
        'priceText' => 'The price bid affects the position in the banner queue. The higher the bid, the higher the position. Banners in the first positions views the largest number of unique users.
        The actual amount that is deducted for impressions may be less than the bid you set. The system works on the principle of second price Auction: the deducted cost is equal to a banner bid at a position below + $0.001',
        'priceBarText' => 'Cost per 1000 impressions',

        'optionsTittle' => 'ROTATION PARAMETERS',
        'trafficTitle' => 'Traffic source',
        'trafficcheckButton1' => 'All sources',
        'trafficcheckButton2' => 'Extension',
        'trafficcheckButton3' => 'Mobile app',
        'dailyViews' => '11000 Daily coverage',
        'dailyViewsInfoTitle' => 'Daily coverage',
        'dailyViewsInfoText' => 'The total number of unique users in the last 24 hours',
        'deviceOption' => 'Device type',
        'deviceOption1' => 'Any devices',
        'deviceOption2' => 'Mobile',
        'deviceOption3' => 'Deskop',
        'deviceOption4' => 'Do not show after click($0,002)',
        'deviceOption5' => 'Only high-quality users($0,005)',
        'deviceOption4Info' => 'This banner will not be displayed to those who have already clicked on it. Enabling this option saves your budget.',
        'deviceOption5Info' => 'We assign a humanity rating to all users of our extension to identify users who are trying to cheat the system in order to cheat earnings. The formula for calculating the score includes behavior analysis, visited sites, working hours, activity, and Google reCaptcha v3 score. By default, impressions are blocked for those who are clearly trying to cheat the system. Enabling this option will only allow you to serve ads to users whose humanity is not in doubt. ',
        'categoriesTitle'=> 'Categories',
        'categoriesInfoTitle' =>'Categories',
        'categoriesInfoText' =>'This banner will only appear on websites of selected categories',
        'geotargetingTitle' => 'Geotargeting',
        'geotargetingTitleInfoTitle' => 'Geotargeting',
        'geotargetingTitleInfoText' => 'Your video will be seen only by users from the selected countries. Country determined by IP. For display in all countries, sipmly do not use this setting.',
        'geortargetingCheckBoxTitle' => 'Do not show in selected countries',
        'geortargetingCheckBoxInfo' => 'Enable this option if you want to specify a list of countries in which you do not want to show this ad',
     
        'options1Title' => 'Pause rotation for specific user after',
        'options1_1' => 'Disabled',
        'options1_2' => '20 impressions',
        'options1_3' => '50 impressions',
        'options1_4' => '100 impressions',
        'options1_5' => '150 impressions',
        'options1_6' => '200 impressions',
        'options1InfoTitle' => 'Pause Rotation',
        'options1InfoText' => 'The banner stops being displayed to each specific user after the selected number of impressions. Impressions will resume after a while. This allows you to spend your budget more economically',
      

        'options2Title' => 'Pause rotation for specific user after',
        'options2_1' => 'Disabled',
        'options2_2' => '10 minutes',
        'options2_3' => '30 minutes',
        'options2_4' => '1 hour',
        'options2_5' => '3 hours',
        'options2_6' => '6 hours',
        'options2InfoTitle' => 'Rotation Starts',
        'options2InfoText' => 'The limit after which banner displays will resume if impressions for a specific user have been suspended. This allows you to save budget.',
      
        'options3Title' => 'Language',
        'options3InfoTıtle' => 'Language',
        'options3InfoText' => 'Your video will be viewed by users who speak the selected language. Users language is determined by browser settings or site settings',
        'button1' => 'Back',
        'button2' => 'Save',
        'button3' => 'Start',
        'tarife1' => 'Tariff',
        'tarife2' => '$0,159 per 1000 impressions'
    ]
];

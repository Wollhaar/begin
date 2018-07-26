page = PAGE

#template
page.10 = FLUIDTEMPLATE
page.10 {
    partialRootPath = EXT:thebegin/Resources/Private/Partials/
    layoutRootPath = EXT:thebegin/Resources/Private/Layouts/


#    file = EXT:thebegin/Resources/Private/Templates/homepage.html

    #Backend-Layout
    file.stdWrap.cObject {
        key.data = pagelayout

        #layouts
        default = TEXT
        default.value = EXT:thebegin/Resources/Private/Templates/main_LSidebar.html

        #homepage
#        1 = TEXT
#        1.value = 188.40.29.98/usr/home/davidz/public_html/newBegin/typo3conf/ext/thebegin/Resources/Private/Templates/homepage.html

        2 = TEXT
        2.value = EXT:thebegin/Resources/Private/Templates/haupt&kleinerBereich.html

        3 = TEXT
        3.value = EXT:thebegin/Resources/Private/Templates/100_vollesBild.html

        #main + sidebar
        4 < .default


    }
}


#meta
page {
    meta {

        viewport = width = device-width, initial-scale = 1
    }

    includeCSS {
        file10 = EXT:thebegin/Resources/Public/css/bootstrap.min.css
        file10.disableCompression = 1
        file20 = EXT:thebegin/Resources/Public/css/bootstrap-theme.min.css
        file20.disableCompression = 1
        file30 = EXT:thebegin/Resources/Public/css/main.css
    }

    includeJSFooter {
        file10 = EXT:thebegin/Resources/Public/js/bootstrap.min.js
        file10.disableCompression = 1
        file20 = EXT:thebegin/Resources/Public/js/main.js
    }
}

# theoretisch könnte hier ein jquery framework eingebunden werden.
/* page.1000 = TEXT
 page.1000.value {
    <script></sctipt>
}*/
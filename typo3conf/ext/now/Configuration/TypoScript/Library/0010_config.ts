config {
    language = de
    locale_all = de_DE.utf8
    sys_language_uid = 0
    sys_language_overlay = 1

    # Eindeutigere Fehlermeldungen im Frontend
    # siehe https://docs.typo3.org/typo3cms/TyposcriptReference/Setup/Config/Index.html#contentobjectexceptionhandler
    contentObjectExceptionHandler = 0

    # realurl
    absRefPrefix = /
    tx_realurl_enable = 1
    prefixLocalAnchors = all

    # spamschutz
    spamProtectEmailAddresses = 2
    spamProtectEmailAddresses_lastDotSubst = (punkt)

    # komprimierung
    concatenateCss = 1
    compressCss = 1

    concatenateJs = 1
    compressJs = 1

    disablePrefixComment = 1
}
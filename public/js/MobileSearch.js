class MobileSearch {
    constructor(buttonSearch, buttonCross, searchMobileSection){
        this.buttonSearch = buttonSearch;
        this.buttonCross = buttonCross;
        this.searchMobileSection = searchMobileSection;
    }
    listen() {
        this.buttonSearch.on('click', () => {
            this.displayBlockSearchMobileSection()
        })
        this.buttonCross.on('click', () => {
            this.displayNoneSearchMobileSection()
        })

        setInterval(() => {
            if($(document).width() >= 992 ) {
                this.displayNoneSearchMobileSection()
            }
        }, 150)
    }

    displayBlockSearchMobileSection() {
        this.searchMobileSection.removeClass("searchmobile__desable");
        this.searchMobileSection.addClass("searchmobile__active");
    }
    displayNoneSearchMobileSection() {
        this.searchMobileSection.removeClass("searchmobile__active");
        this.searchMobileSection.addClass("searchmobile__desable");
    }
}

mobileSearch = new MobileSearch($('#searchButton'), $('#buttonCross'), $('#searchmobile'));
mobileSearch.listen();
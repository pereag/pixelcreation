class MobileMenu {
    constructor(buttonMenu, mobileMenu, main) {
        this.buttonMenu = buttonMenu;
        this.mobileMenu = mobileMenu;
        this.main = main;
    }

    listen() {
        this.buttonMenu.on("click", () => {
            this.displayMenu();
        })
    }
    displayMenu() {
        this.mobileMenu.toggleClass('mobile-menu__active');
        this.mobileMenu.toggleClass('mobile-menu__desalow');
        setInterval(() => {
            if($(document).width() >= 752 ) {
                this.mobileMenu.removeClass('mobile-menu__active');
                this.mobileMenu.addClass('mobile-menu__desalow');
            }
        }, 150)
        this.main.on("click", () => {
            this.mobileMenu.removeClass('mobile-menu__active');
            this.mobileMenu.addClass('mobile-menu__desalow');
        })
    }
}

mobileMenu = new MobileMenu($('#button-mobileMenu'), $('#mobile-menu'), $('main'));
mobileMenu.listen();
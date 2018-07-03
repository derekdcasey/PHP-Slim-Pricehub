// Initialize your app
var myApp = new Framework7();

// Export selectors engine
var $$ = Dom7;


// Add view
var mainView = myApp.addView('.view-main', {
    // Because we use fixed-through navbar we can enable dynamic navbar
    dynamicNavbar: true
});

// Callbacks to run specific code for specific pages, for example for About page:
myApp.onPageInit('about', function (page) {
    // run createContentPage func after link was clicked
    $$('.create-page').on('click', function () {
        createContentPage();
    });
});

// Generate dynamic page
var dynamicPageIndex = 0;
function createContentPage() {
	mainView.router.loadContent(
        '<!-- Top Navbar-->' +
        '<div class="navbar">' +
        '  <div class="navbar-inner">' +
        '    <div class="left"><a href="#" class="back link"><i class="icon icon-back"></i><span>Back</span></a></div>' +
        '    <div class="center sliding">Dynamic Page ' + (++dynamicPageIndex) + '</div>' +
        '  </div>' +
        '</div>' +
        '<div class="pages">' +
        '  <!-- Page, data-page contains page name-->' +
        '  <div data-page="dynamic-pages" class="page">' +
        '    <!-- Scrollable page content-->' +
        '    <div class="page-content">' +
        '      <div class="content-block">' +
        '        <div class="content-block-inner">' +
        '          <p>Here is a dynamic page created on ' + new Date() + ' !</p>' +
        '          <p>Go <a href="#" class="back">back</a> or go to <a href="services.html">Services</a>.</p>' +
        '        </div>' +
        '      </div>' +
        '    </div>' +
        '  </div>' +
        '</div>'
    );
	return;
}

 //try to implement js fix for input/text area and mobile screen keyboard
    //use class or element name
    //$$(document).on("focus","input,textarea", function(e){
 /*   $$(document).on("focus",".kbdfix", function(e){
        var el = $$(e.target);
        var page = el.closest(".page-content");
        var elTop = el.offset().top;
        //do correction if input at near or below middle of screen
        if(elTop > page.height() / 2 - 70 ){
            var delta = page.offset().top +  elTop - $$(".statusbar-overlay").height() * (myApp.device.androidChrome?2:1) - $$(".navbar").height(); //minus navbar height?&quest;? 56 fot MD
            var kbdfix = page.find("#keyboard-fix");
            if(kbdfix.length === 0) { //create kbdfix element
                page.append("<div id='keyboard-fix'></div>");
            }

            $$("#keyboard-fix").css("height", delta * 2 + "px");
            page.scrollTop( delta, 300);

        } 
    }, true);

    //$$(document).on("blur","input,textarea", function(e){
    //call this code in the Back button handler - when it fired for keyboard hidding.
    $$(document).on("blur",".kbdfix", function(e){
        //reduce all fixes
        $$("#keyboard-fix").css("height", "0px");
    }, true); */
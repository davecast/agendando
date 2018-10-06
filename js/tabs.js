"use strict"

let $tabs = document.querySelectorAll('.account__tab')
let $currentContent = document.getElementsByClassName('account__active')[0]
let $currentTab = document.getElementsByClassName('account__tab--active')[0]

var url = new URL(window.location.href);
var type = url.searchParams.get("type");

if (type == "signUp") {
    $currentContent.classList.remove('account__active')
    $currentContent = document.getElementById('signUp')
    $currentContent.classList.add('account__active')
    $currentTab.classList.remove('account__tab--active')
    $currentTab = document.getElementById('tab_signup')
    $currentTab.classList.add('account__tab--active')
}

$tabs.forEach( (tab) => {
    tab.addEventListener('click', function (e) {

        let $tab = document.getElementById(e.target.dataset.tab)
        
        $currentContent.classList.remove('account__active')
        $currentTab.classList.remove('account__tab--active')
        $tab.classList.add('account__active')
        this.classList.add('account__tab--active')

        $currentContent = $tab
        $currentTab = this
    })
})
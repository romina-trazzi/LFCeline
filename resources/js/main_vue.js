import './bootstrap';

/*=================================================
=            VANILLA JAVASCRIPT SECTION           =
==================================================*/


/*---------- Subsection Header  ----------*/

const smallScreen = window.matchMedia('(max-width: 799px)')


function mediaQuerySmall(smallScreen) {

    // Check if the media query is true
    if (smallScreen.matches) {

        // Cambia la barMenu con le icone di FontAwesome
        let list = document.getElementsByClassName('menu_list');
        let list_children = list[0].children;

        // Aggiungiamo le icone Fontawesome alle LI

        // Icona Home
        let home = list_children[0];
        home.innerHTML = `<a href="/home.php"><i class="fa-solid fa-house bar_icon"></i></a>`;

        //  Icona About
        let about = list_children[1];
        about.innerHTML =`<a href="/aboutCeline.php"><i class="fa-solid fa-address-card bar_icon"></i></a>`;

        // Icona Bookstore
        let bookstore = list_children[2];
        bookstore.innerHTML = `<a href="/bookstore.php"><i class="fa-solid fa-book-skull bar_icon"></i></a>`;

        // Icona Blog
        let blog = list_children[3];
        blog.innerHTML = `<a href="#"></a>`;

        // Icona Contatti
        let contacts = list_children[4];
        contacts.innerHTML = `<a href="/contacts.php"><i class="fa-solid fa-address-book bar_icon"></i></a>`;
        
    } else {

        // Icona Home
        let home = list_children[0];
        home.innerHTML = `<a href="/home.php">HOME</a>`;

        // Icona About
        let about = list_children[1];
        about.innerHTML =`<a href="/aboutCeline.php">ABOUT</a>`;

        // Icona Bookstore
        let bookstore = list_children[2];
        bookstore.innerHTML = `<a href="/bookstore.php">BOOKSTORE</a>`;

        // Icona Blog
        let blog = list_children[3];
        blog.innerHTML = `<a href="#">BLOG</a>`;

        // Icona contatti
        let contacts = list_children[4];
        contacts.innerHTML = `<a href="/contacts.php">CONTATTI</a>`;
    }
}

smallScreen.addEventListener(mediaQuerySmall, onchange);

mediaQuerySmall(smallScreen);


















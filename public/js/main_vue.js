/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/js/main_vue.js":
/*!**********************************!*\
  !*** ./resources/js/main_vue.js ***!
  \**********************************/
/***/ (() => {

/*=================================================
=            VANILLA JAVASCRIPT SECTION           =
==================================================*/

/*---------- Subsection Header  ----------*/

// const smallScreen = window.matchMedia('(max-width: 799px)')

// function mediaQuerySmall(smallScreen) {

//     // Check if the media query is true
//     if (smallScreen.matches) {

//         // Cambia la barMenu con le icone di FontAwesome
//         let list = document.getElementsByClassName('menu_list');
//         let list_children = list[0].children;

//         // Aggiungiamo le icone Fontawesome alle LI

//         // Icona Home
//         let home = list_children[0];
//         home.innerHTML = `<a href="/home.php"><i class="fa-solid fa-house bar_icon"></i></a>`;

//         //  Icona About
//         let about = list_children[1];
//         about.innerHTML =`<a href="/aboutCeline.php"><i class="fa-solid fa-address-card bar_icon"></i></a>`;

//         // Icona Bookstore
//         let bookstore = list_children[2];
//         bookstore.innerHTML = `<a href="/bookstore.php"><i class="fa-solid fa-book-skull bar_icon"></i></a>`;

//         // Icona Blog
//         let blog = list_children[3];
//         blog.innerHTML = `<a href="#"></a>`;

//         // Icona Contatti
//         let contacts = list_children[4];
//         contacts.innerHTML = `<a href="/contacts.php"><i class="fa-solid fa-address-book bar_icon"></i></a>`;

//     } else {

//         // Icona Home
//         let home = list_children[0];
//         home.innerHTML = `<a href="/home.php">HOME</a>`;

//         // Icona About
//         let about = list_children[1];
//         about.innerHTML =`<a href="/aboutCeline.php">ABOUT</a>`;

//         // Icona Bookstore
//         let bookstore = list_children[2];
//         bookstore.innerHTML = `<a href="/bookstore.php">BOOKSTORE</a>`;

//         // Icona Blog
//         let blog = list_children[3];
//         blog.innerHTML = `<a href="#">BLOG</a>`;

//         // Icona contatti
//         let contacts = list_children[4];
//         contacts.innerHTML = `<a href="/contacts.php">CONTATTI</a>`;
//     }
// }

// smallScreen.addEventListener(mediaQuerySmall, onchange);

// mediaQuerySmall(smallScreen);

// Se navbar link è hover, il valore di visibility dei li::before cambia da hidden a visible

// // Seleziona tutti i link della navbar
// let links = document.querySelectorAll('nav li a');
// let listItem = document.querySelectorAll('nav li');

// for (let i = 0; i < links.length; i++ ) {

//     // Seleziona la pseudoclasse ::before dei li e controlla il valore della proprietà visibility
//     let beforeLi = window.getComputedStyle((listItem[i]), ':before');
//     let oldProperty = beforeLi.getPropertyValue('display');

//     // Se è nascosto:
//     if (oldProperty == 'none') {

//         /* Aggiungiamo la classe make_visible a li::before quando il mouse passa sopra i link (mouse over)
//         e la togliamo quando il mouse va via (mouse out) */
//         for (let i = 0; i < links.length; i++ ) {
//             links[i].addEventListener('mouseover', function() {
//                 this.parentNode.classList.add('make_visible');
//             });

//             links[i].addEventListener('mouseout', function() {
//                 this.parentNode.classList.remove('make_visible');
//             });

//         }

//     } 

// }

// beforeLi.setProperty('visibility', 'visible', 'important');
// console.log(beforeLi);

/***/ }),

/***/ "./resources/css/style.scss":
/*!**********************************!*\
  !*** ./resources/css/style.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ }),

/***/ "./resources/css/mediaquery.scss":
/*!***************************************!*\
  !*** ./resources/css/mediaquery.scss ***!
  \***************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

"use strict";
__webpack_require__.r(__webpack_exports__);
// extracted by mini-css-extract-plugin


/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = __webpack_modules__;
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/chunk loaded */
/******/ 	(() => {
/******/ 		var deferred = [];
/******/ 		__webpack_require__.O = (result, chunkIds, fn, priority) => {
/******/ 			if(chunkIds) {
/******/ 				priority = priority || 0;
/******/ 				for(var i = deferred.length; i > 0 && deferred[i - 1][2] > priority; i--) deferred[i] = deferred[i - 1];
/******/ 				deferred[i] = [chunkIds, fn, priority];
/******/ 				return;
/******/ 			}
/******/ 			var notFulfilled = Infinity;
/******/ 			for (var i = 0; i < deferred.length; i++) {
/******/ 				var [chunkIds, fn, priority] = deferred[i];
/******/ 				var fulfilled = true;
/******/ 				for (var j = 0; j < chunkIds.length; j++) {
/******/ 					if ((priority & 1 === 0 || notFulfilled >= priority) && Object.keys(__webpack_require__.O).every((key) => (__webpack_require__.O[key](chunkIds[j])))) {
/******/ 						chunkIds.splice(j--, 1);
/******/ 					} else {
/******/ 						fulfilled = false;
/******/ 						if(priority < notFulfilled) notFulfilled = priority;
/******/ 					}
/******/ 				}
/******/ 				if(fulfilled) {
/******/ 					deferred.splice(i--, 1)
/******/ 					var r = fn();
/******/ 					if (r !== undefined) result = r;
/******/ 				}
/******/ 			}
/******/ 			return result;
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/jsonp chunk loading */
/******/ 	(() => {
/******/ 		// no baseURI
/******/ 		
/******/ 		// object to store loaded and loading chunks
/******/ 		// undefined = chunk not loaded, null = chunk preloaded/prefetched
/******/ 		// [resolve, reject, Promise] = chunk loading, 0 = chunk loaded
/******/ 		var installedChunks = {
/******/ 			"/js/main_vue": 0,
/******/ 			"css/style": 0,
/******/ 			"css/mediaquery": 0
/******/ 		};
/******/ 		
/******/ 		// no chunk on demand loading
/******/ 		
/******/ 		// no prefetching
/******/ 		
/******/ 		// no preloaded
/******/ 		
/******/ 		// no HMR
/******/ 		
/******/ 		// no HMR manifest
/******/ 		
/******/ 		__webpack_require__.O.j = (chunkId) => (installedChunks[chunkId] === 0);
/******/ 		
/******/ 		// install a JSONP callback for chunk loading
/******/ 		var webpackJsonpCallback = (parentChunkLoadingFunction, data) => {
/******/ 			var [chunkIds, moreModules, runtime] = data;
/******/ 			// add "moreModules" to the modules object,
/******/ 			// then flag all "chunkIds" as loaded and fire callback
/******/ 			var moduleId, chunkId, i = 0;
/******/ 			if(chunkIds.some((id) => (installedChunks[id] !== 0))) {
/******/ 				for(moduleId in moreModules) {
/******/ 					if(__webpack_require__.o(moreModules, moduleId)) {
/******/ 						__webpack_require__.m[moduleId] = moreModules[moduleId];
/******/ 					}
/******/ 				}
/******/ 				if(runtime) var result = runtime(__webpack_require__);
/******/ 			}
/******/ 			if(parentChunkLoadingFunction) parentChunkLoadingFunction(data);
/******/ 			for(;i < chunkIds.length; i++) {
/******/ 				chunkId = chunkIds[i];
/******/ 				if(__webpack_require__.o(installedChunks, chunkId) && installedChunks[chunkId]) {
/******/ 					installedChunks[chunkId][0]();
/******/ 				}
/******/ 				installedChunks[chunkId] = 0;
/******/ 			}
/******/ 			return __webpack_require__.O(result);
/******/ 		}
/******/ 		
/******/ 		var chunkLoadingGlobal = self["webpackChunk"] = self["webpackChunk"] || [];
/******/ 		chunkLoadingGlobal.forEach(webpackJsonpCallback.bind(null, 0));
/******/ 		chunkLoadingGlobal.push = webpackJsonpCallback.bind(null, chunkLoadingGlobal.push.bind(chunkLoadingGlobal));
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module depends on other loaded chunks and execution need to be delayed
/******/ 	__webpack_require__.O(undefined, ["css/style","css/mediaquery"], () => (__webpack_require__("./resources/js/main_vue.js")))
/******/ 	__webpack_require__.O(undefined, ["css/style","css/mediaquery"], () => (__webpack_require__("./resources/css/style.scss")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["css/style","css/mediaquery"], () => (__webpack_require__("./resources/css/mediaquery.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
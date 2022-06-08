/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (function() { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./src/css/main.scss":
/*!***************************!*\
  !*** ./src/css/main.scss ***!
  \***************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://world/./src/css/main.scss?");

/***/ }),

/***/ "./src/js/index.js":
/*!*************************!*\
  !*** ./src/js/index.js ***!
  \*************************/
/***/ (function(__unused_webpack_module, __webpack_exports__, __webpack_require__) {

"use strict";
eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _css_main_scss__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ../css/main.scss */ \"./src/css/main.scss\");\n/* harmony import */ var _modals_js__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./modals.js */ \"./src/js/modals.js\");\n/* harmony import */ var _modals_js__WEBPACK_IMPORTED_MODULE_1___default = /*#__PURE__*/__webpack_require__.n(_modals_js__WEBPACK_IMPORTED_MODULE_1__);\n/* harmony import */ var _timetoread_js__WEBPACK_IMPORTED_MODULE_2__ = __webpack_require__(/*! ./timetoread.js */ \"./src/js/timetoread.js\");\n/* harmony import */ var _timetoread_js__WEBPACK_IMPORTED_MODULE_2___default = /*#__PURE__*/__webpack_require__.n(_timetoread_js__WEBPACK_IMPORTED_MODULE_2__);\n\n\n\n\n//Lang open/close\nlet langElement = document.querySelectorAll('.lang-js');\nlangElement.forEach(el => {\n  el.addEventListener('click', function () {\n    let langList = document.querySelectorAll('.lang-list');\n    langList.forEach(list => { \n      list.classList.toggle('open');\n    });\n  })\n});\n\n\n//# sourceURL=webpack://world/./src/js/index.js?");

/***/ }),

/***/ "./src/js/modals.js":
/*!**************************!*\
  !*** ./src/js/modals.js ***!
  \**************************/
/***/ (function() {

eval("// Modals\nfunction openModal(dataModal) {\n  let currentModal = document.querySelector('.modal[data-modal=\"'+dataModal+'\"]');\n  currentModal.classList.add('open');\n}\n\nfunction closeModal() {\n  let modalAll = document.querySelectorAll('.modal');\n  modalAll.forEach(el => {\n    el.classList.remove('open');\n  });\n}\n\nlet modalClick = document.querySelectorAll('.modal-js');\nmodalClick.forEach(el => {\n  el.addEventListener('click', function () {\n    let dataModal = this.dataset.modalClick;\n    openModal(dataModal);\n  });\n});\n\nlet modalClickClose = document.querySelectorAll('.modal-close-js');\nmodalClickClose.forEach(el => {\n  el.addEventListener('click', function () {\n    closeModal();\n  });\n});\n\ndocument.addEventListener('click', function (e) {\n  if (e.target.classList.value === 'modal open') {\n    closeModal(dataModal);\n  }\n});\n\n//# sourceURL=webpack://world/./src/js/modals.js?");

/***/ }),

/***/ "./src/js/timetoread.js":
/*!******************************!*\
  !*** ./src/js/timetoread.js ***!
  \******************************/
/***/ (function() {

eval("function updateMeta(timetoread) {\n  let postid = document.querySelector('.postID').innerText;\n  jQuery.ajax({\n    method: 'post',\n    url: ajaxurl,\n    data: {\n      'time_var': timetoread,\n      'post_id': postid,\n      'action': 'update_time_read_action',\n    }\n  }).success(function (msg) {\n    console.log('time read updated');\n  });\n}\n\nfunction readingTime() {\n  const text = document.querySelector('.single .content').innerText;\n  const wpm = 225;\n  const words = text.trim().split(/\\s+/).length;\n  const time = Math.ceil(words / wpm);\n  document.querySelector('.post-time-read span').innerText = time;\n\n  //Update Meta\n  updateMeta(time);\n}\nif (document.body.classList.contains('single')) {\n  readingTime();\n}\n\n//# sourceURL=webpack://world/./src/js/timetoread.js?");

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
/************************************************************************/
/******/ 	/* webpack/runtime/compat get default export */
/******/ 	!function() {
/******/ 		// getDefaultExport function for compatibility with non-harmony modules
/******/ 		__webpack_require__.n = function(module) {
/******/ 			var getter = module && module.__esModule ?
/******/ 				function() { return module['default']; } :
/******/ 				function() { return module; };
/******/ 			__webpack_require__.d(getter, { a: getter });
/******/ 			return getter;
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/define property getters */
/******/ 	!function() {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = function(exports, definition) {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	!function() {
/******/ 		__webpack_require__.o = function(obj, prop) { return Object.prototype.hasOwnProperty.call(obj, prop); }
/******/ 	}();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	!function() {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = function(exports) {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	}();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = __webpack_require__("./src/js/index.js");
/******/ 	
/******/ })()
;
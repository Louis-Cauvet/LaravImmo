/*
 * ATTENTION: An "eval-source-map" devtool has been used.
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file with attached SourceMaps in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./resources/sass/main.scss":
/*!**********************************!*\
  !*** ./resources/sass/main.scss ***!
  \**********************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvc2Fzcy9tYWluLnNjc3MiLCJtYXBwaW5ncyI6IjtBQUFBIiwic291cmNlcyI6WyJ3ZWJwYWNrOi8vLy4vcmVzb3VyY2VzL3Nhc3MvbWFpbi5zY3NzP2U4ZjUiXSwic291cmNlc0NvbnRlbnQiOlsiLy8gZXh0cmFjdGVkIGJ5IG1pbmktY3NzLWV4dHJhY3QtcGx1Z2luXG5leHBvcnQge307Il0sIm5hbWVzIjpbXSwic291cmNlUm9vdCI6IiJ9\n//# sourceURL=webpack-internal:///./resources/sass/main.scss\n");

/***/ }),

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/***/ (() => {

eval("\n\n/************************************** Functions **************************************/\nfunction changeSlide(slider, slideNumber) {\n  var percentage = -100 * slideNumber;\n  var spaces = 4 * slideNumber;\n  slider.style.transform = \"translateX(calc(\".concat(percentage, \"% - \").concat(spaces, \"rem\");\n}\n\n/************************************** Events Listeners **************************************/\n\n/***\n * Display the to-top button when scrolling down\n ***/\nvar toTopButton = document.querySelector(\".to-top\");\nif (window.scrollY > window.innerHeight / 2) {\n  toTopButton.classList.add(\"active\");\n}\nwindow.addEventListener('scroll', function () {\n  if (window.scrollY > window.innerHeight / 2) {\n    toTopButton.classList.add(\"active\");\n  } else {\n    toTopButton.classList.remove(\"active\");\n  }\n});\n\n/***\n * Open the nav menu on mobile\n ***/\nvar burgerMenu = document.querySelector(\".burger-menu\");\nburgerMenu.addEventListener(\"click\", function () {\n  document.querySelector(\"header\").classList.toggle(\"menu-open\");\n});\n\n/***\n * Change the slide of testimony's slider when clic on arrows\n ***/\nvar testimonySlider = document.querySelector(\".slider-testimony\");\nvar testimonySliderLength = document.querySelectorAll(\".slider-testimony article\").length - 1;\nvar testimonySliderCounter = 0;\nvar testimonySliderLeftArrow = document.querySelector(\".container-testimony .arrow-left\");\ntestimonySliderLeftArrow.addEventListener(\"click\", function () {\n  if (testimonySliderCounter == 0) {\n    testimonySliderCounter = testimonySliderLength;\n  } else {\n    testimonySliderCounter--;\n  }\n  changeSlide(testimonySlider, testimonySliderCounter);\n});\nvar testimonySliderRightArrow = document.querySelector(\".container-testimony .arrow-right\");\ntestimonySliderRightArrow.addEventListener(\"click\", function () {\n  if (testimonySliderCounter == testimonySliderLength) {\n    testimonySliderCounter = 0;\n  } else {\n    testimonySliderCounter++;\n  }\n  changeSlide(testimonySlider, testimonySliderCounter);\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,eyJ2ZXJzaW9uIjozLCJmaWxlIjoiLi9yZXNvdXJjZXMvanMvYXBwLmpzIiwibWFwcGluZ3MiOiJBQUFhOztBQUViO0FBQ0EsU0FBU0EsV0FBV0EsQ0FBQ0MsTUFBTSxFQUFFQyxXQUFXLEVBQUU7RUFDdEMsSUFBTUMsVUFBVSxHQUFHLENBQUMsR0FBRyxHQUFDRCxXQUFXO0VBQ25DLElBQU1FLE1BQU0sR0FBRyxDQUFDLEdBQUNGLFdBQVc7RUFDNUJELE1BQU0sQ0FBQ0ksS0FBSyxDQUFDQyxTQUFTLHNCQUFBQyxNQUFBLENBQXNCSixVQUFVLFVBQUFJLE1BQUEsQ0FBT0gsTUFBTSxRQUFLO0FBQzVFOztBQUVBOztBQUVBO0FBQ0E7QUFDQTtBQUNBLElBQU1JLFdBQVcsR0FBR0MsUUFBUSxDQUFDQyxhQUFhLENBQUMsU0FBUyxDQUFDO0FBQ3JELElBQUlDLE1BQU0sQ0FBQ0MsT0FBTyxHQUFHRCxNQUFNLENBQUNFLFdBQVcsR0FBQyxDQUFDLEVBQUU7RUFDdkNMLFdBQVcsQ0FBQ00sU0FBUyxDQUFDQyxHQUFHLENBQUMsUUFBUSxDQUFDO0FBQ3ZDO0FBQ0FKLE1BQU0sQ0FBQ0ssZ0JBQWdCLENBQUMsUUFBUSxFQUFFLFlBQU07RUFDcEMsSUFBSUwsTUFBTSxDQUFDQyxPQUFPLEdBQUdELE1BQU0sQ0FBQ0UsV0FBVyxHQUFDLENBQUMsRUFBRTtJQUN2Q0wsV0FBVyxDQUFDTSxTQUFTLENBQUNDLEdBQUcsQ0FBQyxRQUFRLENBQUM7RUFDdkMsQ0FBQyxNQUFNO0lBQ0hQLFdBQVcsQ0FBQ00sU0FBUyxDQUFDRyxNQUFNLENBQUMsUUFBUSxDQUFDO0VBQzFDO0FBQ0osQ0FBQyxDQUFDOztBQUdGO0FBQ0E7QUFDQTtBQUNBLElBQU1DLFVBQVUsR0FBR1QsUUFBUSxDQUFDQyxhQUFhLENBQUMsY0FBYyxDQUFDO0FBQ3pEUSxVQUFVLENBQUNGLGdCQUFnQixDQUFDLE9BQU8sRUFBRSxZQUFLO0VBQ3RDUCxRQUFRLENBQUNDLGFBQWEsQ0FBQyxRQUFRLENBQUMsQ0FBQ0ksU0FBUyxDQUFDSyxNQUFNLENBQUMsV0FBVyxDQUFDO0FBQ2xFLENBQUMsQ0FBQzs7QUFHRjtBQUNBO0FBQ0E7QUFDQSxJQUFNQyxlQUFlLEdBQUdYLFFBQVEsQ0FBQ0MsYUFBYSxDQUFDLG1CQUFtQixDQUFDO0FBQ25FLElBQU1XLHFCQUFxQixHQUFHWixRQUFRLENBQUNhLGdCQUFnQixDQUFDLDJCQUEyQixDQUFDLENBQUNDLE1BQU0sR0FBQyxDQUFDO0FBQzdGLElBQUlDLHNCQUFzQixHQUFHLENBQUM7QUFFOUIsSUFBTUMsd0JBQXdCLEdBQUdoQixRQUFRLENBQUNDLGFBQWEsQ0FBQyxrQ0FBa0MsQ0FBQztBQUMzRmUsd0JBQXdCLENBQUNULGdCQUFnQixDQUFDLE9BQU8sRUFBRSxZQUFNO0VBQ3JELElBQUdRLHNCQUFzQixJQUFJLENBQUMsRUFBRTtJQUM1QkEsc0JBQXNCLEdBQUdILHFCQUFxQjtFQUNsRCxDQUFDLE1BQU07SUFDSEcsc0JBQXNCLEVBQUU7RUFDNUI7RUFDQXhCLFdBQVcsQ0FBQ29CLGVBQWUsRUFBRUksc0JBQXNCLENBQUM7QUFDeEQsQ0FBQyxDQUFDO0FBRUYsSUFBTUUseUJBQXlCLEdBQUdqQixRQUFRLENBQUNDLGFBQWEsQ0FBQyxtQ0FBbUMsQ0FBQztBQUM3RmdCLHlCQUF5QixDQUFDVixnQkFBZ0IsQ0FBQyxPQUFPLEVBQUUsWUFBTTtFQUN0RCxJQUFHUSxzQkFBc0IsSUFBSUgscUJBQXFCLEVBQUU7SUFDaERHLHNCQUFzQixHQUFHLENBQUM7RUFDOUIsQ0FBQyxNQUFNO0lBQ0hBLHNCQUFzQixFQUFFO0VBQzVCO0VBQ0F4QixXQUFXLENBQUNvQixlQUFlLEVBQUVJLHNCQUFzQixDQUFDO0FBQ3hELENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9hcHAuanM/Y2VkNiJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcblxuLyoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqIEZ1bmN0aW9ucyAqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKi9cbmZ1bmN0aW9uIGNoYW5nZVNsaWRlKHNsaWRlciwgc2xpZGVOdW1iZXIpIHtcbiAgICBjb25zdCBwZXJjZW50YWdlID0gLTEwMCpzbGlkZU51bWJlcjtcbiAgICBjb25zdCBzcGFjZXMgPSA0KnNsaWRlTnVtYmVyO1xuICAgIHNsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSBgdHJhbnNsYXRlWChjYWxjKCR7cGVyY2VudGFnZX0lIC0gJHtzcGFjZXN9cmVtYDtcbn1cblxuLyoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqIEV2ZW50cyBMaXN0ZW5lcnMgKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKiovXG5cbi8qKipcbiAqIERpc3BsYXkgdGhlIHRvLXRvcCBidXR0b24gd2hlbiBzY3JvbGxpbmcgZG93blxuICoqKi9cbmNvbnN0IHRvVG9wQnV0dG9uID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi50by10b3BcIik7XG5pZiAod2luZG93LnNjcm9sbFkgPiB3aW5kb3cuaW5uZXJIZWlnaHQvMikge1xuICAgIHRvVG9wQnV0dG9uLmNsYXNzTGlzdC5hZGQoXCJhY3RpdmVcIik7XG59XG53aW5kb3cuYWRkRXZlbnRMaXN0ZW5lcignc2Nyb2xsJywgKCkgPT4ge1xuICAgIGlmICh3aW5kb3cuc2Nyb2xsWSA+IHdpbmRvdy5pbm5lckhlaWdodC8yKSB7XG4gICAgICAgIHRvVG9wQnV0dG9uLmNsYXNzTGlzdC5hZGQoXCJhY3RpdmVcIik7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgdG9Ub3BCdXR0b24uY2xhc3NMaXN0LnJlbW92ZShcImFjdGl2ZVwiKTtcbiAgICB9XG59KTtcblxuXG4vKioqXG4gKiBPcGVuIHRoZSBuYXYgbWVudSBvbiBtb2JpbGVcbiAqKiovXG5jb25zdCBidXJnZXJNZW51ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5idXJnZXItbWVudVwiKTtcbmJ1cmdlck1lbnUuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+e1xuICAgIGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCJoZWFkZXJcIikuY2xhc3NMaXN0LnRvZ2dsZShcIm1lbnUtb3BlblwiKTtcbn0pXG5cblxuLyoqKlxuICogQ2hhbmdlIHRoZSBzbGlkZSBvZiB0ZXN0aW1vbnkncyBzbGlkZXIgd2hlbiBjbGljIG9uIGFycm93c1xuICoqKi9cbmNvbnN0IHRlc3RpbW9ueVNsaWRlciA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuc2xpZGVyLXRlc3RpbW9ueVwiKTtcbmNvbnN0IHRlc3RpbW9ueVNsaWRlckxlbmd0aCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuc2xpZGVyLXRlc3RpbW9ueSBhcnRpY2xlXCIpLmxlbmd0aC0xO1xubGV0IHRlc3RpbW9ueVNsaWRlckNvdW50ZXIgPSAwO1xuXG5jb25zdCB0ZXN0aW1vbnlTbGlkZXJMZWZ0QXJyb3cgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLmNvbnRhaW5lci10ZXN0aW1vbnkgLmFycm93LWxlZnRcIik7XG50ZXN0aW1vbnlTbGlkZXJMZWZ0QXJyb3cuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IHtcbiAgICBpZih0ZXN0aW1vbnlTbGlkZXJDb3VudGVyID09IDApIHtcbiAgICAgICAgdGVzdGltb255U2xpZGVyQ291bnRlciA9IHRlc3RpbW9ueVNsaWRlckxlbmd0aDtcbiAgICB9IGVsc2Uge1xuICAgICAgICB0ZXN0aW1vbnlTbGlkZXJDb3VudGVyLS07XG4gICAgfVxuICAgIGNoYW5nZVNsaWRlKHRlc3RpbW9ueVNsaWRlciwgdGVzdGltb255U2xpZGVyQ291bnRlcik7XG59KVxuXG5jb25zdCB0ZXN0aW1vbnlTbGlkZXJSaWdodEFycm93ID0gZG9jdW1lbnQucXVlcnlTZWxlY3RvcihcIi5jb250YWluZXItdGVzdGltb255IC5hcnJvdy1yaWdodFwiKTtcbnRlc3RpbW9ueVNsaWRlclJpZ2h0QXJyb3cuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IHtcbiAgICBpZih0ZXN0aW1vbnlTbGlkZXJDb3VudGVyID09IHRlc3RpbW9ueVNsaWRlckxlbmd0aCkge1xuICAgICAgICB0ZXN0aW1vbnlTbGlkZXJDb3VudGVyID0gMDtcbiAgICB9IGVsc2Uge1xuICAgICAgICB0ZXN0aW1vbnlTbGlkZXJDb3VudGVyKys7XG4gICAgfVxuICAgIGNoYW5nZVNsaWRlKHRlc3RpbW9ueVNsaWRlciwgdGVzdGltb255U2xpZGVyQ291bnRlcik7XG59KVxuIl0sIm5hbWVzIjpbImNoYW5nZVNsaWRlIiwic2xpZGVyIiwic2xpZGVOdW1iZXIiLCJwZXJjZW50YWdlIiwic3BhY2VzIiwic3R5bGUiLCJ0cmFuc2Zvcm0iLCJjb25jYXQiLCJ0b1RvcEJ1dHRvbiIsImRvY3VtZW50IiwicXVlcnlTZWxlY3RvciIsIndpbmRvdyIsInNjcm9sbFkiLCJpbm5lckhlaWdodCIsImNsYXNzTGlzdCIsImFkZCIsImFkZEV2ZW50TGlzdGVuZXIiLCJyZW1vdmUiLCJidXJnZXJNZW51IiwidG9nZ2xlIiwidGVzdGltb255U2xpZGVyIiwidGVzdGltb255U2xpZGVyTGVuZ3RoIiwicXVlcnlTZWxlY3RvckFsbCIsImxlbmd0aCIsInRlc3RpbW9ueVNsaWRlckNvdW50ZXIiLCJ0ZXN0aW1vbnlTbGlkZXJMZWZ0QXJyb3ciLCJ0ZXN0aW1vbnlTbGlkZXJSaWdodEFycm93Il0sInNvdXJjZVJvb3QiOiIifQ==\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

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
/******/ 			"/resources/js/app": 0,
/******/ 			"resources/css/app": 0
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
/******/ 	__webpack_require__.O(undefined, ["resources/css/app"], () => (__webpack_require__("./resources/js/app.js")))
/******/ 	var __webpack_exports__ = __webpack_require__.O(undefined, ["resources/css/app"], () => (__webpack_require__("./resources/sass/main.scss")))
/******/ 	__webpack_exports__ = __webpack_require__.O(__webpack_exports__);
/******/ 	
/******/ })()
;
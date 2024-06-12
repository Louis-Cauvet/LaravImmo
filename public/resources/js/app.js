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

eval("\n\n/************************************** Functions **************************************/\nfunction changeSlide(slider, slideNumber) {\n  var percentage = -100 * slideNumber;\n  var spaces = 4 * slideNumber;\n  slider.style.transform = \"translateX(calc(\".concat(percentage, \"% - \").concat(spaces, \"rem\");\n  sliderCounter = slideNumber;\n}\n\n/************************************** Events Listeners **************************************/\n\n/***\n * Display the to-top button when scrolling down\n ***/\nvar toTopButton = document.querySelector(\".to-top\");\nif (window.scrollY > window.innerHeight / 2) {\n  toTopButton.classList.add(\"active\");\n}\nwindow.addEventListener('scroll', function () {\n  if (window.scrollY > window.innerHeight / 2) {\n    toTopButton.classList.add(\"active\");\n  } else {\n    toTopButton.classList.remove(\"active\");\n  }\n});\n\n/***\n * Open the nav menu on mobile\n ***/\nvar burgerMenu = document.querySelector(\".burger-menu\");\nburgerMenu.addEventListener(\"click\", function () {\n  document.querySelector(\"header\").classList.toggle(\"menu-open\");\n});\n\n/***\n * Change the slide of slider when clic on arrows\n ***/\nvar slider = document.querySelector(\".slider\");\nvar sliderLength = document.querySelectorAll(\".slider article\").length - 1;\nvar sliderCounter = 0;\nvar sliderParent = slider.parentElement;\nvar containerSlider = sliderParent.parentElement;\nvar sliderLeftArrow = sliderParent.querySelector(\".arrow-left\");\nsliderLeftArrow.addEventListener(\"click\", function () {\n  if (sliderCounter == 0) {\n    sliderCounter = sliderLength;\n  } else {\n    sliderCounter--;\n  }\n  if (containerSlider.querySelector(\".slider-tags\")) {\n    containerSlider.querySelector(\".slider-tags .active\").classList.remove('active');\n    containerSlider.querySelector(\".slider-tags li[data-position=\\\"\".concat(sliderCounter, \"\\\"]\")).classList.add('active');\n  }\n  changeSlide(slider, sliderCounter);\n});\nvar sliderRightArrow = sliderParent.querySelector(\".arrow-right\");\nsliderRightArrow.addEventListener(\"click\", function () {\n  if (sliderCounter == sliderLength) {\n    sliderCounter = 0;\n  } else {\n    sliderCounter++;\n  }\n  if (containerSlider.querySelector(\".slider-tags\")) {\n    containerSlider.querySelector(\".slider-tags .active\").classList.remove('active');\n    containerSlider.querySelector(\".slider-tags li[data-position=\\\"\".concat(sliderCounter, \"\\\"]\")).classList.add('active');\n  }\n  changeSlide(slider, sliderCounter);\n});\n\n/***\n * Change the slide of slider when clic on tags\n ***/\nvar sliderTags = containerSlider.querySelectorAll('.slider-tags li');\nsliderTags.forEach(function (tag) {\n  tag.addEventListener(\"click\", function () {\n    containerSlider.querySelector('.slider-tags .active').classList.remove('active');\n    tag.classList.add('active');\n    changeSlide(slider, tag.dataset.position);\n  });\n});//# sourceURL=[module]\n//# sourceMappingURL=data:application/json;charset=utf-8;base64,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SUFBSWEsWUFBWSxFQUFFO0lBQzlCYixhQUFhLEdBQUcsQ0FBQztFQUNyQixDQUFDLE1BQU07SUFDSEEsYUFBYSxFQUFFO0VBQ25CO0VBRUEsSUFBR2tCLGVBQWUsQ0FBQ2YsYUFBYSxDQUFDLGNBQWMsQ0FBQyxFQUFFO0lBQzlDZSxlQUFlLENBQUNmLGFBQWEsQ0FBQyxzQkFBc0IsQ0FBQyxDQUFDSSxTQUFTLENBQUNHLE1BQU0sQ0FBQyxRQUFRLENBQUM7SUFDaEZRLGVBQWUsQ0FBQ2YsYUFBYSxvQ0FBQUosTUFBQSxDQUFtQ0MsYUFBYSxRQUFJLENBQUMsQ0FBQ08sU0FBUyxDQUFDQyxHQUFHLENBQUMsUUFBUSxDQUFDO0VBQzlHO0VBRUFoQixXQUFXLENBQUNDLE1BQU0sRUFBRU8sYUFBYSxDQUFDO0FBQ3RDLENBQUMsQ0FBQzs7QUFHRjtBQUNBO0FBQ0E7QUFDQSxJQUFNcUIsVUFBVSxHQUFHSCxlQUFlLENBQUNKLGdCQUFnQixDQUFDLGlCQUFpQixDQUFDO0FBQ3RFTyxVQUFVLENBQUNDLE9BQU8sQ0FBQyxVQUFDQyxHQUFHLEVBQUs7RUFDekJBLEdBQUcsQ0FBQ2QsZ0JBQWdCLENBQUMsT0FBTyxFQUFFLFlBQU07SUFDaENTLGVBQWUsQ0FBQ2YsYUFBYSxDQUFDLHNCQUFzQixDQUFDLENBQUNJLFNBQVMsQ0FBQ0csTUFBTSxDQUFDLFFBQVEsQ0FBQztJQUNoRmEsR0FBRyxDQUFDaEIsU0FBUyxDQUFDQyxHQUFHLENBQUMsUUFBUSxDQUFDO0lBQzNCaEIsV0FBVyxDQUFDQyxNQUFNLEVBQUU4QixHQUFHLENBQUNDLE9BQU8sQ0FBQ0MsUUFBUSxDQUFDO0VBQzVDLENBQUMsQ0FBQztBQUNOLENBQUMsQ0FBQyIsInNvdXJjZXMiOlsid2VicGFjazovLy8uL3Jlc291cmNlcy9qcy9hcHAuanM/Y2VkNiJdLCJzb3VyY2VzQ29udGVudCI6WyJcInVzZSBzdHJpY3RcIjtcblxuLyoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqIEZ1bmN0aW9ucyAqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKi9cbmZ1bmN0aW9uIGNoYW5nZVNsaWRlKHNsaWRlciwgc2xpZGVOdW1iZXIpIHtcbiAgICBjb25zdCBwZXJjZW50YWdlID0gLTEwMCpzbGlkZU51bWJlcjtcbiAgICBjb25zdCBzcGFjZXMgPSA0KnNsaWRlTnVtYmVyO1xuICAgIHNsaWRlci5zdHlsZS50cmFuc2Zvcm0gPSBgdHJhbnNsYXRlWChjYWxjKCR7cGVyY2VudGFnZX0lIC0gJHtzcGFjZXN9cmVtYDtcbiAgICBzbGlkZXJDb3VudGVyID0gc2xpZGVOdW1iZXI7XG59XG5cbi8qKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKiBFdmVudHMgTGlzdGVuZXJzICoqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqKioqL1xuXG4vKioqXG4gKiBEaXNwbGF5IHRoZSB0by10b3AgYnV0dG9uIHdoZW4gc2Nyb2xsaW5nIGRvd25cbiAqKiovXG5jb25zdCB0b1RvcEJ1dHRvbiA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIudG8tdG9wXCIpO1xuaWYgKHdpbmRvdy5zY3JvbGxZID4gd2luZG93LmlubmVySGVpZ2h0LzIpIHtcbiAgICB0b1RvcEJ1dHRvbi5jbGFzc0xpc3QuYWRkKFwiYWN0aXZlXCIpO1xufVxud2luZG93LmFkZEV2ZW50TGlzdGVuZXIoJ3Njcm9sbCcsICgpID0+IHtcbiAgICBpZiAod2luZG93LnNjcm9sbFkgPiB3aW5kb3cuaW5uZXJIZWlnaHQvMikge1xuICAgICAgICB0b1RvcEJ1dHRvbi5jbGFzc0xpc3QuYWRkKFwiYWN0aXZlXCIpO1xuICAgIH0gZWxzZSB7XG4gICAgICAgIHRvVG9wQnV0dG9uLmNsYXNzTGlzdC5yZW1vdmUoXCJhY3RpdmVcIik7XG4gICAgfVxufSk7XG5cblxuLyoqKlxuICogT3BlbiB0aGUgbmF2IG1lbnUgb24gbW9iaWxlXG4gKioqL1xuY29uc3QgYnVyZ2VyTWVudSA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYnVyZ2VyLW1lbnVcIik7XG5idXJnZXJNZW51LmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PntcbiAgICBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiaGVhZGVyXCIpLmNsYXNzTGlzdC50b2dnbGUoXCJtZW51LW9wZW5cIik7XG59KVxuXG5cbi8qKipcbiAqIENoYW5nZSB0aGUgc2xpZGUgb2Ygc2xpZGVyIHdoZW4gY2xpYyBvbiBhcnJvd3NcbiAqKiovXG5jb25zdCBzbGlkZXIgPSBkb2N1bWVudC5xdWVyeVNlbGVjdG9yKFwiLnNsaWRlclwiKTtcbmNvbnN0IHNsaWRlckxlbmd0aCA9IGRvY3VtZW50LnF1ZXJ5U2VsZWN0b3JBbGwoXCIuc2xpZGVyIGFydGljbGVcIikubGVuZ3RoLTE7XG5sZXQgc2xpZGVyQ291bnRlciA9IDA7XG5cbmNvbnN0IHNsaWRlclBhcmVudCA9IHNsaWRlci5wYXJlbnRFbGVtZW50O1xuY29uc3QgY29udGFpbmVyU2xpZGVyID0gc2xpZGVyUGFyZW50LnBhcmVudEVsZW1lbnQ7XG5cbmNvbnN0IHNsaWRlckxlZnRBcnJvdyA9IHNsaWRlclBhcmVudC5xdWVyeVNlbGVjdG9yKFwiLmFycm93LWxlZnRcIik7XG5zbGlkZXJMZWZ0QXJyb3cuYWRkRXZlbnRMaXN0ZW5lcihcImNsaWNrXCIsICgpID0+IHtcbiAgICBpZihzbGlkZXJDb3VudGVyID09IDApIHtcbiAgICAgICAgc2xpZGVyQ291bnRlciA9IHNsaWRlckxlbmd0aDtcbiAgICB9IGVsc2Uge1xuICAgICAgICBzbGlkZXJDb3VudGVyLS07XG4gICAgfVxuXG4gICAgaWYoY29udGFpbmVyU2xpZGVyLnF1ZXJ5U2VsZWN0b3IoXCIuc2xpZGVyLXRhZ3NcIikpIHtcbiAgICAgICAgY29udGFpbmVyU2xpZGVyLnF1ZXJ5U2VsZWN0b3IoXCIuc2xpZGVyLXRhZ3MgLmFjdGl2ZVwiKS5jbGFzc0xpc3QucmVtb3ZlKCdhY3RpdmUnKTtcbiAgICAgICAgY29udGFpbmVyU2xpZGVyLnF1ZXJ5U2VsZWN0b3IoYC5zbGlkZXItdGFncyBsaVtkYXRhLXBvc2l0aW9uPVwiJHtzbGlkZXJDb3VudGVyfVwiXWApLmNsYXNzTGlzdC5hZGQoJ2FjdGl2ZScpO1xuICAgIH1cblxuICAgIGNoYW5nZVNsaWRlKHNsaWRlciwgc2xpZGVyQ291bnRlcik7XG59KVxuXG5jb25zdCBzbGlkZXJSaWdodEFycm93ID0gc2xpZGVyUGFyZW50LnF1ZXJ5U2VsZWN0b3IoXCIuYXJyb3ctcmlnaHRcIik7XG5zbGlkZXJSaWdodEFycm93LmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PiB7XG4gICAgaWYoc2xpZGVyQ291bnRlciA9PSBzbGlkZXJMZW5ndGgpIHtcbiAgICAgICAgc2xpZGVyQ291bnRlciA9IDA7XG4gICAgfSBlbHNlIHtcbiAgICAgICAgc2xpZGVyQ291bnRlcisrO1xuICAgIH1cblxuICAgIGlmKGNvbnRhaW5lclNsaWRlci5xdWVyeVNlbGVjdG9yKFwiLnNsaWRlci10YWdzXCIpKSB7XG4gICAgICAgIGNvbnRhaW5lclNsaWRlci5xdWVyeVNlbGVjdG9yKFwiLnNsaWRlci10YWdzIC5hY3RpdmVcIikuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XG4gICAgICAgIGNvbnRhaW5lclNsaWRlci5xdWVyeVNlbGVjdG9yKGAuc2xpZGVyLXRhZ3MgbGlbZGF0YS1wb3NpdGlvbj1cIiR7c2xpZGVyQ291bnRlcn1cIl1gKS5jbGFzc0xpc3QuYWRkKCdhY3RpdmUnKTtcbiAgICB9XG5cbiAgICBjaGFuZ2VTbGlkZShzbGlkZXIsIHNsaWRlckNvdW50ZXIpO1xufSlcblxuXG4vKioqXG4gKiBDaGFuZ2UgdGhlIHNsaWRlIG9mIHNsaWRlciB3aGVuIGNsaWMgb24gdGFnc1xuICoqKi9cbmNvbnN0IHNsaWRlclRhZ3MgPSBjb250YWluZXJTbGlkZXIucXVlcnlTZWxlY3RvckFsbCgnLnNsaWRlci10YWdzIGxpJyk7XG5zbGlkZXJUYWdzLmZvckVhY2goKHRhZykgPT4ge1xuICAgdGFnLmFkZEV2ZW50TGlzdGVuZXIoXCJjbGlja1wiLCAoKSA9PiB7XG4gICAgICAgY29udGFpbmVyU2xpZGVyLnF1ZXJ5U2VsZWN0b3IoJy5zbGlkZXItdGFncyAuYWN0aXZlJykuY2xhc3NMaXN0LnJlbW92ZSgnYWN0aXZlJyk7XG4gICAgICAgdGFnLmNsYXNzTGlzdC5hZGQoJ2FjdGl2ZScpO1xuICAgICAgIGNoYW5nZVNsaWRlKHNsaWRlciwgdGFnLmRhdGFzZXQucG9zaXRpb24pO1xuICAgIH0pXG59KTtcbiJdLCJuYW1lcyI6WyJjaGFuZ2VTbGlkZSIsInNsaWRlciIsInNsaWRlTnVtYmVyIiwicGVyY2VudGFnZSIsInNwYWNlcyIsInN0eWxlIiwidHJhbnNmb3JtIiwiY29uY2F0Iiwic2xpZGVyQ291bnRlciIsInRvVG9wQnV0dG9uIiwiZG9jdW1lbnQiLCJxdWVyeVNlbGVjdG9yIiwid2luZG93Iiwic2Nyb2xsWSIsImlubmVySGVpZ2h0IiwiY2xhc3NMaXN0IiwiYWRkIiwiYWRkRXZlbnRMaXN0ZW5lciIsInJlbW92ZSIsImJ1cmdlck1lbnUiLCJ0b2dnbGUiLCJzbGlkZXJMZW5ndGgiLCJxdWVyeVNlbGVjdG9yQWxsIiwibGVuZ3RoIiwic2xpZGVyUGFyZW50IiwicGFyZW50RWxlbWVudCIsImNvbnRhaW5lclNsaWRlciIsInNsaWRlckxlZnRBcnJvdyIsInNsaWRlclJpZ2h0QXJyb3ciLCJzbGlkZXJUYWdzIiwiZm9yRWFjaCIsInRhZyIsImRhdGFzZXQiLCJwb3NpdGlvbiJdLCJzb3VyY2VSb290IjoiIn0=\n//# sourceURL=webpack-internal:///./resources/js/app.js\n");

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
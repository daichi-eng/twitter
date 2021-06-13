/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId]) {
/******/ 			return installedModules[moduleId].exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, { enumerable: true, get: getter });
/******/ 		}
/******/ 	};
/******/
/******/ 	// define __esModule on exports
/******/ 	__webpack_require__.r = function(exports) {
/******/ 		if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 			Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 		}
/******/ 		Object.defineProperty(exports, '__esModule', { value: true });
/******/ 	};
/******/
/******/ 	// create a fake namespace object
/******/ 	// mode & 1: value is a module id, require it
/******/ 	// mode & 2: merge all properties of value into the ns
/******/ 	// mode & 4: return value when already ns object
/******/ 	// mode & 8|1: behave like require
/******/ 	__webpack_require__.t = function(value, mode) {
/******/ 		if(mode & 1) value = __webpack_require__(value);
/******/ 		if(mode & 8) return value;
/******/ 		if((mode & 4) && typeof value === 'object' && value && value.__esModule) return value;
/******/ 		var ns = Object.create(null);
/******/ 		__webpack_require__.r(ns);
/******/ 		Object.defineProperty(ns, 'default', { enumerable: true, value: value });
/******/ 		if(mode & 2 && typeof value != 'string') for(var key in value) __webpack_require__.d(ns, key, function(key) { return value[key]; }.bind(null, key));
/******/ 		return ns;
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "/";
/******/
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 0);
/******/ })
/************************************************************************/
/******/ ({

/***/ "./resources/js/app.js":
/*!*****************************!*\
  !*** ./resources/js/app.js ***!
  \*****************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */
__webpack_require__(!(function webpackMissingModule() { var e = new Error("Cannot find module 'bootstrap'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()));

window.Vue = __webpack_require__(!(function webpackMissingModule() { var e = new Error("Cannot find module 'vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()));
/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */
// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', __webpack_require__(!(function webpackMissingModule() { var e = new Error("Cannot find module './components/ExampleComponent.vue'"); e.code = 'MODULE_NOT_FOUND'; throw e; }()))["default"]);
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

var app = new Vue({
  el: '#app'
});

/***/ }),

/***/ "./resources/sass/app.scss":
/*!*********************************!*\
  !*** ./resources/sass/app.scss ***!
  \*********************************/
/*! no static exports found */
/***/ (function(module, exports) {

throw new Error("Module build failed (from ./node_modules/css-loader/index.js):\nModuleNotFoundError: Module not found: Error: Can't resolve '../img/header-3/search.svg' in 'C:\\develop\\xampp\\htdocs\\twitter\\resources\\sass'\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\webpack\\lib\\Compilation.js:925:10\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\webpack\\lib\\NormalModuleFactory.js:401:22\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\webpack\\lib\\NormalModuleFactory.js:130:21\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\webpack\\lib\\NormalModuleFactory.js:224:22\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\neo-async\\async.js:2830:7\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\neo-async\\async.js:6877:13\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\webpack\\lib\\NormalModuleFactory.js:214:25\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\Resolver.js:213:14\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\Resolver.js:285:5\n    at eval (eval at create (C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:13:1)\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\UnsafeCachePlugin.js:44:7\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\Resolver.js:285:5\n    at eval (eval at create (C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:13:1)\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\Resolver.js:285:5\n    at eval (eval at create (C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:25:1)\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\DescriptionFilePlugin.js:67:43\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\Resolver.js:285:5\n    at eval (eval at create (C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:14:1)\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\RootPlugin.js:37:38\n    at _next43 (eval at create (C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:6:1)\n    at eval (eval at create (C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:29:1)\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\Resolver.js:285:5\n    at eval (eval at create (C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:25:1)\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\DescriptionFilePlugin.js:67:43\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\Resolver.js:285:5\n    at eval (eval at create (C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:14:1)\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\Resolver.js:285:5\n    at eval (eval at create (C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\tapable\\lib\\HookCodeFactory.js:33:10), <anonymous>:13:1)\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\DirectoryExistsPlugin.js:27:15\n    at C:\\develop\\xampp\\htdocs\\twitter\\node_modules\\enhanced-resolve\\lib\\CachedInputFileSystem.js:85:15\n    at processTicksAndRejections (internal/process/task_queues.js:79:11)");

/***/ }),

/***/ 0:
/*!*************************************************************!*\
  !*** multi ./resources/js/app.js ./resources/sass/app.scss ***!
  \*************************************************************/
/*! no static exports found */
/***/ (function(module, exports, __webpack_require__) {

__webpack_require__(/*! C:\develop\xampp\htdocs\twitter\resources\js\app.js */"./resources/js/app.js");
module.exports = __webpack_require__(/*! C:\develop\xampp\htdocs\twitter\resources\sass\app.scss */"./resources/sass/app.scss");


/***/ })

/******/ });
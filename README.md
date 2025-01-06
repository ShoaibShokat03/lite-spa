# lite-spa
This is lite weight single page application library that can convert your entire application in single page just linking one file as a main module to your application as a js.

`https://lite-spa.stylescriptjs.com/`

# How to use
`_lite_spa is` a main folder to use where a main.js file is a module file

### 1 - Download this folder or repository
### 2 - Add link of `main.js` to your main page or all pages footer befor all scripts
### 3 - use `<script type="module" main="main" src="./_lite_spa/main.js"></script>`
### 4 - open `main.js` and configure the LiteSPAHandler
```
import LiteSAPHandler from "./LiteSPAHandler.js";

// Example usage
const spa = new LiteSAPHandler({
  baseUrl: "http://localhost/spa/", //your website or app main base url
  rootSelector: ".root", // your root element where dynamic pages will be render
  handleForms: true, //  Handle form submition with LiteSPA or make it false
});

```
### Now run your website or your application is ready

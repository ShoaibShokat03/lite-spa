import LiteSAPHandler from "./LiteSPAHandler.js";

// Example usage
const spa = new LiteSAPHandler({
  baseUrl: "http://localhost/spa/", //your website or app main base url
  rootSelector: ".root", // your root element where dynamic pages will be render
  handleForms: true, //  Handle form submition with LiteSPA or make it false
});

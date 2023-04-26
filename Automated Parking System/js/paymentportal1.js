

import Inputmask from "https://cdn.skypack.dev/inputmask@5.0.6";

var ccNumberMask = new Inputmask("9999 9999 9999 9999");
ccNumberMask.mask(document.getElementById("cc-number"));

var ccExpiryMask = new Inputmask("99 / 9999");
ccExpiryMask.mask(document.getElementById("cc-expiry"));

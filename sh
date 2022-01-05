@import url("https://fonts.googleapis.com/css?family=Merriweather:300,300i,400,400i|Poppins:300,300i,400,400i,500,500i,600,600i");
@import 'css/bootstrap.min.css';
@import 'css/classy-nav.css';
@import 'css/owl.carousel.min.css';
@import 'css/animate.css';
@import 'css/magnific-popup.css';
@import 'css/font-awesome.min.css';
@font-face {
  font-family: "Parisienne";
  src: url("../fonts/Parisienne-Regular.ttf") format("TrueType");
}
@font-face {
  font-family: "DaunPenh";
  src: url("../fonts/DaunPenh.ttf") format("TrueType");
}
/* [Master Stylesheet] */
/*
Template Name: Foode - Food Blog HTML5 Template
Template Author: Colorlib
Template Author URI: http://colorlib.com
Text Domain: Foode, Food Blog
Version: - v1.0.0
*/
/* =========== Index of CSS ===========
:: 1.0 Import Fonts
:: 2.0 Import All CSS
:: 3.0 Base CSS
    :: 3.1.0 Spacing
    :: 3.2.0 Height
    :: 3.3.0 Section Padding
    :: 3.4.0 Section Heading
    :: 3.5.0 Preloader
    :: 3.6.0 Miscellaneous
    :: 3.7.0 ScrollUp
    :: 3.8.0 foode Button
:: 4.0 Header Area CSS
:: 5.0 Hero Slides Area
:: 6.0 About Us Area CSS
:: 7.0 Featured Post Sildes CSS
:: 8.0 Instagram Area CSS
:: 9.0 Footer Area CSS
:: 10.0 Breadcumb Area CSS
:: 11.0 Blog Area CSS
:: 12.0 Comment Area
:: 13.0 Leave A Reply Area CSS
:: 14.0 Pager CSS
:: 15.0 Sidebar Area CSS
:: 16.0 Contact Area CSS
:: 17.0 Typography CSS
*/
/* :: 1.0 Import Fonts */
/* :: 2.0 Import All CSS */
/* :: 3.0 Base CSS */
* {
  margin: 0;
  padding: 0;
}

body {
  font-family: "Poppins", sans-serif;
  font-size: 14px;
}

.container-message {
  display: none;
}

.container-message.active {
  display: block;
}

.card-admin {
  width: 250px;
  height: 300px;
  padding: 1rem;
  display: inline-block;
  line-height: 300px;
  text-align: center;
  border-radius: 15px;
  border: 1px solid white;
}

.card-admin span {
  text-transform: uppercase;
  color: white;
}

.card_category {
  width: 250px;
  height: 300px;
  text-align: center;
  border-radius: 15px;
  background-repeat: no-repeat;
  background-size: cover;
}

.card_container {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  background-color: rgba(222, 222, 222, 0.4);
  border-radius: 15px;
  height: 300px;
}

.card_category_footer {
  display: flex;
  align-items: center;
  justify-content: space-around;
}

.strong {
  font-weight: bold;
}

.l-container-card {
  display: flex;
  justify-content: space-around;
  align-items: center;
  flex-wrap: wrap;
}
@media only screen and (max-width:767px) {
  .l-container-card .card_category {
    margin: 10px 0;
  }
}

body.admin {
  color: white;
  background-color: #000000;
}

.is-inactive {
  display: none;
}

.section-categorie {
  height: 50vh;
  width: 100%;
  position: relative;
}

.card-bg {
  width: 50%;
  min-height: 150px;
  background-color: #29211B;
  opacity: 0.5;
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
}
.card-bg h2 {
  text-transform: capitalize;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  font-weight: bold;
}

.container-galerie {
  display: flex;
  margin-top: 5%;
  margin-bottom: 15%;
  flex-wrap: wrap;
  align-items: center;
}

.item-galerie {
  margin: 5px 0;
}

.galerie {
  display: flex;
  flex-wrap: wrap;
  align-items: center;
  justify-content: center;
}

.galerie {
  width: 40%;
}

.galerie-content {
  width: 60%;
}

.section-action {
  background-color: #402414;
  margin: 5% 0;
}
.section-action h2 {
  color: white;
}
.section-action p {
  color: white;
}

.form-container {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
}

.product-container {
  display: flex;
  flex-direction: column;
  align-items: center;
}

.data-email {
  line-height: 2;
}

.product-img {
  width: 100%;
}

.card-product {
  margin: 10px 0;
  display: flex;
  justify-content: space-around;
}

.btn-add-panier, .btn-add-panier:active {
  background-color: #cca789;
  color: black;
}

.btn-add-panier:hover, .btn-add-panier:focus {
  background-color: #b39075;
  color: black;
}

.btn-article, .btn-article:active {
  background-color: #a6a6a6;
  color: black;
}

.btn-article:hover, .btn-article:focus {
  background-color: #a6a6a6;
  color: black;
}

.dim {
  width: 15%;
}

.banner {
  width: 50%;
}

.form-group {
  margin-bottom: 30px;
}

.btn-retour, .btn-retour:active {
  background-color: #252423;
  color: white;
}

.btn-retour:hover, .btn-retour:focus {
  background-color: #33312f;
  color: white;
}

.btn-val, .btn-val:active {
  background-color: #BED95F;
  color: #595959;
}

.btn-val:hover, .btn-val:focus {
  background-color: #aec656;
  color: #595959;
}

.btn-edit, .btn-edit:active {
  background-color: #034C8C;
  color: white;
}

.btn-edit:hover, .btn-edit:focus {
  background-color: #033b6c;
  color: white;
}

.the-article:nth-child(2n) {
  flex-direction: row-reverse;
}

a.active-nav {
  color: #cca789 !important;
}

.shopcart {
  width: 20%;
  height: 100%;
  position: absolute;
  top: 0;
  right: 0;
  background: black;
}
.shopcart .shop-header {
  width: 100%;
  height: 100px;
  padding: 20px 0 0;
  background: black;
}

.cartTable {
  position: relative;
}

#cart-loader {
  border: 16px solid #f3f3f3;
  border-top: 16px solid #ab6f3e;
  border-radius: 50%;
  width: 70px;
  height: 70px;
  animation: spin 2s linear infinite;
  display: none;
  z-index: 2;
  position: relative;
}

@keyframes spin {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}
/*******/
h1 {
  font-family: "DaunPenh";
  font-size: 4rem;
  color: #282828;
  text-transform: uppercase;
}
@media only screen and (max-width:767px) {
  h1 {
    font-size: 3rem;
  }
}

h1.admin-heading-home {
  font-family: "DaunPenh";
  font-size: 3rem;
  color: #ffffff;
  text-transform: none;
  margin: 40px 0;
}
@media only screen and (max-width:767px) {
  h1.admin-heading-home {
    font-size: 2rem;
  }
}

h2 {
  font-family: "Parisienne";
  color: #cca789;
  font-size: 3rem;
  text-transform: lowercase;
}
@media only screen and (max-width:767px) {
  h2 {
    font-size: 2.5rem;
  }
}

@media only screen and (max-width:767px) {
  h3 {
    font-size: 1.5rem;
  }
}

h3,
h4,
h5,
h6 {
  color: #282828;
  line-height: 1.3;
  font-weight: 400;
  font-family: "Merriweather", serif;
  text-transform: capitalize;
}

p {
  font-family: "Poppins", sans-serif;
  color: #595959;
  font-size: 16px;
  line-height: 2;
  font-weight: 400;
}

a,
a:hover,
a:focus {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  text-decoration: none;
  outline: 0 solid transparent;
  color: #654e41;
  font-family: "Poppins", sans-serif;
}

ul,
ol {
  margin: 0;
}
ul li,
ol li {
  list-style: none;
}

img {
  height: auto;
  max-width: 100%;
}

img[alt*=logo] {
  height: auto;
  max-width: 20%;
}
@media only screen and (max-width:767px) {
  img[alt*=logo] {
    max-width: 50%;
  }
}

/* :: 3.1.0 Spacing */
.mt-15 {
  margin-top: 15px !important;
}

.mt-30 {
  margin-top: 30px !important;
}

.mt-50 {
  margin-top: 50px !important;
}

.mt-70 {
  margin-top: 70px !important;
}

.mt-100 {
  margin-top: 100px !important;
}

.mb-15 {
  margin-bottom: 15px !important;
}

.mb-30 {
  margin-bottom: 30px !important;
}

.mb-50 {
  margin-bottom: 50px !important;
}

.mb-70 {
  margin-bottom: 70px !important;
}

.mb-100 {
  margin-bottom: 100px !important;
}

.ml-15 {
  margin-left: 15px !important;
}

.ml-30 {
  margin-left: 30px !important;
}

.ml-50 {
  margin-left: 50px !important;
}

.mr-15 {
  margin-right: 15px !important;
}

.mr-30 {
  margin-right: 30px !important;
}

.mr-50 {
  margin-right: 50px !important;
}

/* :: 3.2.0 Height */
.height-400 {
  height: 400px;
}

.height-500 {
  height: 500px;
}

.height-600 {
  height: 600px;
}

.height-700 {
  height: 700px;
}

.height-800 {
  height: 800px;
}

/* :: 3.3.0 Section Padding */
.section-padding-100 {
  padding-top: 50px;
  padding-bottom: 100px;
}

.section-padding-100-0 {
  padding-top: 100px;
  padding-bottom: 0;
}

.section-padding-0-100 {
  padding-top: 0;
  padding-bottom: 50px;
}

.section-padding-100-70 {
  padding-top: 100px;
  padding-bottom: 70px;
}

/* :: 3.4.0 Section Heading */
.section-heading {
  position: relative;
  z-index: 1;
  margin-bottom: 50px;
  text-align: center;
}
.section-heading h2 {
  font-size: 36px;
  font-family: "Merriweather", serif;
  font-weight: 300;
}
@media only screen and (max-width:767px) {
  .section-heading h2 {
    font-size: 24px;
  }
}
.section-heading span {
  color: #bfb2aa;
  margin-bottom: 0;
  font-family: "Merriweather", serif;
  font-weight: 400;
}
.section-heading p {
  font-size: 16px;
  color: #595959;
  margin-bottom: 0;
}

.btn-action {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  position: relative;
  z-index: 1;
  display: inline-block;
  min-width: 180px;
  height: 45px;
  color: white;
  background-color: #F22727;
  border: 1px solid #F22727;
  border-radius: 3px;
  padding: 0 30px;
  font-size: 14px;
  line-height: 43px;
  text-transform: uppercase;
  font-weight: 400;
  cursor: pointer;
}
.btn-action.active, .btn-action:hover, .btn-action:focus {
  font-size: 14px;
  color: white;
  font-weight: 400;
  background-color: #c30515;
  border: 1px solid #F22727;
}
.btn-action.btn-sm {
  min-width: 80px;
  height: 30px;
  line-height: 28px;
}

/* :: 3.5.0 Preloader */
.preloader {
  background-color: #ffffff;
  width: 100%;
  height: 100%;
  position: fixed;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  z-index: 999999;
  overflow: hidden;
}
.preloader .circle-preloader {
  text-align: center;
  overflow: hidden;
}
.preloader .circle-preloader .foode-preloader {
  position: relative;
  z-index: 10;
  width: 160px;
  height: 4px;
  border-radius: 2px;
  margin-top: 30px;
  background-color: #ebebeb;
  overflow: hidden;
  left: 40%;
}
.preloader .circle-preloader .foode-preloader span {
  width: 80px;
  height: 100%;
  position: absolute;
  background-color: #bfb2aa;
  top: 0;
  left: 0;
  border-radius: 2px;
  z-index: 100;
  -webkit-animation: line 1000ms infinite linear;
  animation: line 1000ms infinite linear;
}

@-webkit-keyframes line {
  0% {
    left: -80px;
  }
  100% {
    left: 160px;
  }
}
@keyframes line {
  0% {
    left: -80px;
  }
  100% {
    left: 160px;
  }
}
/* :: 3.6.0 Miscellaneous */
.bg-img {
  background-position: center center;
  background-size: cover;
  background-repeat: no-repeat;
}

.bg-white {
  background-color: #ffffff !important;
}

.bg-dark {
  background-color: #000000 !important;
}

.bg-transparent {
  background-color: transparent !important;
}

.font-bold {
  font-weight: 700;
}

.font-light {
  font-weight: 300;
}

.bg-overlay {
  position: relative;
  z-index: 2;
  background-position: center center;
  background-size: cover;
}
.bg-overlay::after {
  background-color: rgba(21, 4, 48, 0.89);
  position: absolute;
  z-index: -1;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  content: "";
}

.bg-fixed {
  background-attachment: fixed !important;
}

/* :: 3.7.0 ScrollUp */
#scrollUp {
  background-color: #402414;
  border-radius: 0;
  bottom: 0;
  box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.3);
  color: #ffffff;
  font-size: 24px;
  height: 40px;
  line-height: 40px;
  right: 50px;
  text-align: center;
  width: 40px;
  -webkit-transition-duration: 800ms;
  transition-duration: 800ms;
}
#scrollUp:hover {
  background-color: #bfb2aa;
}

/* :: 4.0 Header Area CSS */
.header-area {
  position: relative;
  width: 100%;
  z-index: 100;
  background-color: #ffffff;
}
.header-area .top-header {
  position: relative;
  z-index: 1;
  background-color: #ffffff;
  width: 100%;
  height: 60px;
  box-shadow: 0 3px 10px 2px rgba(0, 0, 0, 0.15);
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .header-area .top-header {
    border-bottom: 1px solid #f2f4f5;
  }
}
@media only screen and (max-width:767px) {
  .header-area .top-header {
    border-bottom: 1px solid #f2f4f5;
  }
}
.header-area .top-header .search-form form {
  position: relative;
  z-index: 1;
}
.header-area .top-header .search-form form input.form-control {
  width: 200px;
  height: 40px;
  border: none;
  background-color: #ffffff;
  font-size: 12px;
  font-style: italic;
  color: #a6a6a6;
  padding: 0;
  font-weight: 500;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
}
.header-area .top-header .search-form form input.form-control::placeholder {
  color: #a6a6a6;
}
.header-area .top-header .search-form form input.form-control:focus {
  box-shadow: none;
}
@media only screen and (max-width:767px) {
  .header-area .top-header .search-form form input.form-control {
    width: 160px;
    font-size: 10px;
  }
}
@media only screen and (min-width:480px) and (max-width:767px) {
  .header-area .top-header .search-form form input.form-control {
    width: 200px;
    font-size: 12px;
  }
}
.header-area .top-header .search-form form button {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  position: absolute;
  width: 40px;
  height: 40px;
  right: 0;
  top: 0;
  z-index: 10;
  border: none;
  background-color: #ffffff;
}
.header-area .top-header .search-form form button:hover {
  color: #bfb2aa;
  cursor: pointer;
}
.header-area .top-header .top-header-content {
  height: 60px;
}
.header-area .top-header .top-header-content .top-social-info a {
  display: inline-block;
  padding: 0 10px;
  font-size: 14px;
}
.header-area .top-header .top-header-content .top-social-info a:hover {
  color: #bfb2aa;
}
@media only screen and (max-width:767px) {
  .header-area .top-header .top-header-content .top-social-info a {
    padding: 0 5px;
  }
}
@media only screen and (min-width:480px) and (max-width:767px) {
  .header-area .top-header .top-header-content .top-social-info a {
    padding: 0 10px;
  }
}
.header-area .logo-area {
  position: relative;
  z-index: 1;
  margin-top: 5px;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .header-area .logo-area {
    display: none;
  }
}
@media only screen and (max-width:767px) {
  .header-area .logo-area {
    display: none;
  }
}
.header-area .foode-main-menu {
  -webkit-transition-duration: 200ms;
  transition-duration: 200ms;
}
.header-area .foode-main-menu .classy-navbar {
  padding: 0;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .header-area .foode-main-menu .classy-navbar {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }
}
@media only screen and (max-width:767px) {
  .header-area .foode-main-menu .classy-navbar {
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
  }
}
.header-area .foode-main-menu .classy-navbar .nav-brand {
  display: none;
  width: 40%;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .header-area .foode-main-menu .classy-navbar .nav-brand {
    display: block;
  }
}
@media only screen and (max-width:767px) {
  .header-area .foode-main-menu .classy-navbar .nav-brand {
    display: block;
  }
}
.header-area .foode-main-menu .classynav ul li a {
  padding: 0 25px;
  font-weight: 500;
  text-transform: uppercase;
  letter-spacing: 1px;
}
@media only screen and (min-width:992px) and (max-width:1199px) {
  .header-area .foode-main-menu .classynav ul li a {
    padding: 0 15px;
  }
}
.header-area .foode-main-menu .classynav ul li a:hover, .header-area .foode-main-menu .classynav ul li a:focus {
  color: #bfb2aa;
}
.header-area .foode-main-menu .classynav ul li ul li a {
  padding: 0 20px;
  letter-spacing: 0;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .header-area .foode-main-menu .classynav ul li ul li a {
    padding: 0 30px;
  }
}
@media only screen and (max-width:767px) {
  .header-area .foode-main-menu .classynav ul li ul li a {
    padding: 0 30px;
  }
}
.header-area .foode-main-menu .classynav ul li .megamenu {
  background-image: url(images/blog-img/1.png);
  background-position: center center;
  background-size: cover;
}
.header-area .foode-main-menu .classynav ul li .megamenu .single-mega {
  background-color: rgba(255, 255, 255, 0.95);
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
}
.header-area .foode-main-menu .classynav ul li .megamenu .single-mega a {
  text-transform: uppercase;
}
.header-area .is-sticky .foode-main-menu {
  position: fixed;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 9999;
  box-shadow: 0 5px 50px 15px rgba(0, 0, 0, 0.2);
}
.header-area .is-sticky .foode-main-menu .classy-navbar {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.header-area .is-sticky .foode-main-menu .classy-navbar .nav-brand {
  display: block;
}

/* :: 5.0 Hero Slides Area */
.hero-area,
.hero-post-slides {
  position: relative;
  z-index: 1;
}

.single-hero-post {
  width: 100%;
  height: 480px;
  position: relative;
  z-index: 3;
  overflow: hidden;
}
@media only screen and (max-width:767px) {
  .single-hero-post {
    height: 400px;
  }
}
.single-hero-post::after {
  content: "";
  position: absolute;
  height: 50%;
  width: 100%;
  z-index: -1;
  top: 50%;
  left: 0;
  background: rgba(0, 0, 0, 0.7);
  background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.01) 90%, rgba(0, 0, 0, 0) 100%);
  background: linear-gradient(to top, rgba(0, 0, 0, 0.7) 0%, rgba(0, 0, 0, 0.01) 90%, rgba(0, 0, 0, 0) 100%);
}
.single-hero-post .slide-img {
  position: absolute;
  width: 100%;
  height: 100%;
  z-index: -10;
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
}
.single-hero-post .hero-slides-content {
  position: absolute;
  z-index: 30;
  bottom: 25px;
  left: 30px;
  right: 20px;
}
.single-hero-post .hero-slides-content p {
  font-weight: 500;
  font-size: 13px;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 2px;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .single-hero-post .hero-slides-content p {
    letter-spacing: 1px;
    font-size: 12px;
  }
}
.single-hero-post .hero-slides-content .post-title h4 {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  color: #ffffff;
  font-weight: 300;
  line-height: 1.5;
  margin-bottom: 0;
}
.single-hero-post .hero-slides-content .post-title h4:hover {
  color: #bfb2aa;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .single-hero-post .hero-slides-content .post-title h4 {
    font-size: 20px;
  }
}
@media only screen and (max-width:767px) {
  .single-hero-post .hero-slides-content .post-title h4 {
    font-size: 20px;
  }
}

.hero-post-slides .owl-item.center .single-hero-post .slide-img {
  -webkit-animation: slide 24s linear infinite;
  animation: slide 24s linear infinite;
}

@-webkit-keyframes slide {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  50% {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
@keyframes slide {
  0% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
  50% {
    -webkit-transform: scale(1.3);
    transform: scale(1.3);
  }
  100% {
    -webkit-transform: scale(1);
    transform: scale(1);
  }
}
/* :: 6.0 About Us Area CSS */
.about-content {
  position: relative;
  z-index: 1;
}
.about-content img {
  margin-bottom: 30px;
}
.about-content p {
  font-size: 16px;
}
.about-content blockquote h5 {
  font-size: 18px;
  color: #bfb2aa;
  line-height: 1.8;
  font-weight: 300;
  font-style: italic;
}
.about-content ul {
  position: relative;
  z-index: 1;
  margin-left: 10%;
}
.about-content ul li {
  font-size: 16px;
  color: #595959;
  margin-bottom: 15px;
  display: block;
}
.about-content ul li i {
  position: relative;
  z-index: 1;
  top: -2px;
  font-size: 8px;
  color: #282828;
  margin-right: 10px;
}
.about-content .signature {
  text-align: center;
}

/* :: 7.0 Featured Post Sildes CSS */
.featured-post-area {
  position: relative;
  z-index: 1;
  box-shadow: 0 0 10px 3px rgba(0, 0, 0, 0.15);
}
.featured-post-area .carousel-inner {
  position: relative;
  z-index: 3;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 66.6667%;
  flex: 0 0 66.6667%;
  min-width: 66.6667%;
  width: 66.6667%;
  height: 502px;
}
@media only screen and (max-width:767px) {
  .featured-post-area .carousel-inner {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    min-width: 100%;
    width: 100%;
  }
}
.featured-post-area .carousel-inner .carousel-item {
  position: relative;
  z-index: 5;
  width: 100%;
  height: 100%;
}
.featured-post-area .carousel-inner .carousel-item::after {
  content: "";
  position: absolute;
  height: 50%;
  width: 100%;
  z-index: -1;
  top: 50%;
  left: 0;
  background: rgba(0, 0, 0, 0.8);
  background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.01) 90%, rgba(0, 0, 0, 0) 100%);
  background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.01) 90%, rgba(0, 0, 0, 0) 100%);
}
.featured-post-area .carousel-inner .carousel-item .featured-post-content {
  position: absolute;
  bottom: 20px;
  left: 30px;
  z-index: 30;
  right: 50px;
}
.featured-post-area .carousel-inner .carousel-item .featured-post-content p {
  font-weight: 500;
  font-size: 13px;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.featured-post-area .carousel-inner .carousel-item .featured-post-content .post-title h2 {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  font-size: 36px;
  color: #ffffff;
  font-weight: 300;
  line-height: 1.5;
  margin-bottom: 0;
}
.featured-post-area .carousel-inner .carousel-item .featured-post-content .post-title h2:hover {
  color: #bfb2aa;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .featured-post-area .carousel-inner .carousel-item .featured-post-content .post-title h2 {
    font-size: 30px;
  }
}
@media only screen and (max-width:767px) {
  .featured-post-area .carousel-inner .carousel-item .featured-post-content .post-title h2 {
    font-size: 24px;
  }
}
.featured-post-area .carousel-indicators {
  height: 502px;
  position: relative;
  right: 0;
  bottom: 0;
  left: 0;
  z-index: 15;
  padding-left: 0;
  margin-right: 0;
  margin-left: 0;
  list-style: none;
  background-color: #f8f2ef;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 33.3333%;
  flex: 0 0 33.3333%;
  min-width: 33.3333%;
  width: 33.3333%;
}
@media only screen and (max-width:767px) {
  .featured-post-area .carousel-indicators {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    min-width: 100%;
    width: 100%;
  }
}
.featured-post-area .carousel-indicators li {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-align: center;
  -ms-flex-align: center;
  -ms-grid-row-align: center;
  align-items: center;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  min-width: 100%;
  width: 100%;
  height: 20%;
  margin-right: 0;
  margin-left: 0;
  text-indent: 0;
  border-left: 4px solid transparent;
  padding: 0 20px;
}
.featured-post-area .carousel-indicators li h2 {
  font-size: 38px;
  color: #a6a6a6;
  margin-bottom: 0;
  margin-right: 30px;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .featured-post-area .carousel-indicators li h2 {
    font-size: 24px;
    margin-right: 15px;
  }
}
@media only screen and (max-width:767px) {
  .featured-post-area .carousel-indicators li h2 {
    font-size: 24px;
    margin-right: 15px;
  }
}
.featured-post-area .carousel-indicators li .post-title h5 {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  font-size: 18px;
  font-weight: 300;
  line-height: 1.5;
  margin-bottom: 0;
}
.featured-post-area .carousel-indicators li .post-title h5:hover {
  color: #bfb2aa;
}
@media only screen and (min-width:992px) and (max-width:1199px) {
  .featured-post-area .carousel-indicators li .post-title h5 {
    font-size: 16px;
  }
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .featured-post-area .carousel-indicators li .post-title h5 {
    font-size: 14px;
  }
}
@media only screen and (max-width:767px) {
  .featured-post-area .carousel-indicators li .post-title h5 {
    font-size: 14px;
  }
}
.featured-post-area .carousel-indicators li.active {
  border-left: 4px solid #e59f80;
  box-shadow: 0 0 5px 3px rgba(0, 0, 0, 0.15);
}

.featured-posts {
  position: relative;
  z-index: 2;
}
.featured-posts::after {
  content: "";
  position: absolute;
  height: 50%;
  width: 100%;
  z-index: 2;
  top: 50%;
  left: 0;
  background: rgba(0, 0, 0, 0.8);
  background: -webkit-linear-gradient(bottom, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.01) 90%, rgba(0, 0, 0, 0) 100%);
  background: linear-gradient(to top, rgba(0, 0, 0, 0.8) 0%, rgba(0, 0, 0, 0.01) 90%, rgba(0, 0, 0, 0) 100%);
}
@media only screen and (max-width:767px) {
  .featured-posts::after {
    height: 90%;
    top: 10%;
  }
}
.featured-posts .featured-post-content {
  position: absolute;
  bottom: 20px;
  left: 30px;
  z-index: 30;
  right: 50px;
}
.featured-posts .featured-post-content p {
  font-weight: 500;
  font-size: 13px;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 2px;
}
.featured-posts .featured-post-content .post-title h2 {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  font-size: 36px;
  color: #ffffff;
  font-weight: 300;
  line-height: 1.5;
  margin-bottom: 0;
}
.featured-posts .featured-post-content .post-title h2:hover {
  color: #bfb2aa;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .featured-posts .featured-post-content .post-title h2 {
    font-size: 30px;
  }
}
@media only screen and (max-width:767px) {
  .featured-posts .featured-post-content .post-title h2 {
    font-size: 16px;
  }
}

.post-sidebar-area,
.contact-information {
  position: relative;
  z-index: 1;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .post-sidebar-area,
.contact-information {
    margin-top: 50px;
  }
}
@media only screen and (max-width:767px) {
  .post-sidebar-area,
.contact-information {
    margin-top: 50px;
  }
}

/* :: 8.0 Instagram Area CSS */
.single-instagram-slide {
  position: relative;
  z-index: 2;
  overflow: hidden;
}
.single-instagram-slide::after {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  width: 100%;
  height: 100%;
  top: 0;
  left: 0;
  z-index: 5;
  background-color: rgba(255, 255, 255, 0.7);
  content: "";
  position: absolute;
  opacity: 0;
  visibility: hidden;
}
.single-instagram-slide img {
  -webkit-transition-duration: 1000ms;
  transition-duration: 1000ms;
}
.single-instagram-slide a {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  text-align: center;
  display: inline-block;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  position: absolute;
  z-index: 30;
  width: 100%;
  top: 50%;
  left: 0;
  font-size: 14px;
  font-weight: 500;
  color: #282828;
  text-transform: uppercase;
  opacity: 0;
  visibility: hidden;
}
.single-instagram-slide a:hover {
  color: #282828;
}
.single-instagram-slide a i {
  margin-right: 5px;
}
.single-instagram-slide:hover img {
  transform: scale(1.2) rotate(5deg);
}
.single-instagram-slide:hover::after, .single-instagram-slide:hover a {
  opacity: 1;
  visibility: visible;
}

/* :: 9.0 Footer Area CSS */
.footer-area {
  position: relative;
  z-index: 1;
  margin-top: 60px;
}
.footer-area .footer-social-info {
  position: relative;
  z-index: 1;
  padding: 30px 0;
}
.footer-area .footer-social-info a {
  display: inline-block;
  text-transform: uppercase;
  font-weight: 400;
  letter-spacing: 1px;
}
.footer-area .footer-social-info a span {
  margin-left: 10px;
}
@media only screen and (max-width:767px) {
  .footer-area .footer-social-info a span {
    display: none;
  }
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .footer-area .footer-social-info a span {
    display: none;
  }
}
.footer-area .footer-social-info a:hover, .footer-area .footer-social-info a:focus {
  color: #bfb2aa;
}
.footer-area .copywrite-text {
  position: relative;
  z-index: 1;
  padding: 20px 0;
  text-align: center;
}
.footer-area .copywrite-text p {
  font-size: 14px;
  color: #a6a6a6;
  font-weight: 400;
}
@media only screen and (max-width:767px) {
  .footer-area .copywrite-text p {
    font-size: 12px;
  }
}
.footer-area .copywrite-text p a {
  font-size: 14px;
  color: #a6a6a6;
  font-weight: 400;
}
.footer-area .copywrite-text p a:hover, .footer-area .copywrite-text p a:focus {
  color: #bfb2aa;
}
@media only screen and (max-width:767px) {
  .footer-area .copywrite-text p a {
    font-size: 12px;
  }
}

/* :: 10.0 Breadcumb Area CSS */
.breadcrumb-area {
  position: relative;
  z-index: 10;
  width: 100%;
  padding-bottom: 60px;
}
.breadcrumb-area .breadcrumb {
  margin: 0;
  padding: 0;
  padding-top: 30px;
  background-color: transparent;
}
.breadcrumb-area .breadcrumb .breadcrumb-item {
  font-size: 16px;
  color: #a6a6a6;
}
.breadcrumb-area .breadcrumb .breadcrumb-item a {
  font-size: 16px;
  color: #282828;
}
.breadcrumb-area .breadcrumb .breadcrumb-item a:hover, .breadcrumb-area .breadcrumb .breadcrumb-item a:focus {
  color: #bfb2aa;
}
.breadcrumb-area .breadcrumb .breadcrumb-item + .breadcrumb-item::before {
  color: #282828;
  content: ">";
}

/* :: 11.0 Blog Area CSS */
.single-blog-post {
  position: relative;
  z-index: 1;
}
.single-blog-post .post-thumbnail {
  position: relative;
  z-index: 1;
  -webkit-box-flex: 0;
  -ms-flex: 0 0 50%;
  flex: 0 0 50%;
  max-width: 50%;
  width: 50%;
  margin-right: 6%;
}
@media only screen and (max-width:767px) {
  .single-blog-post .post-thumbnail {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    min-width: 100%;
    width: 100%;
    margin-right: 0;
  }
}
.single-blog-post .post-content {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 44%;
  flex: 0 0 44%;
  max-width: 44%;
  width: 44%;
}
@media only screen and (max-width:767px) {
  .single-blog-post .post-content {
    -webkit-box-flex: 0;
    -ms-flex: 0 0 100%;
    flex: 0 0 100%;
    min-width: 100%;
    width: 100%;
  }
}
.single-blog-post .post-content .post-date {
  font-weight: 500;
  font-size: 13px;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #bfb2aa;
}
.single-blog-post .post-content .post-title h4 {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  font-weight: 300;
  line-height: 1.5;
  margin-bottom: 15px;
}
.single-blog-post .post-content .post-title h4:hover {
  color: #bfb2aa;
}
@media only screen and (min-width:768px) and (max-width:991px) {
  .single-blog-post .post-content .post-title h4 {
    font-size: 20px;
  }
}
@media only screen and (max-width:767px) {
  .single-blog-post .post-content .post-title h4 {
    font-size: 20px;
  }
}
.single-blog-post .post-content .post-meta {
  position: relative;
  z-index: 1;
  margin-bottom: 15px;
}
.single-blog-post .post-content .post-meta a {
  display: inline-block;
  font-size: 14px;
  color: #282828;
  margin-right: 15px;
}
.single-blog-post .post-content .post-meta a:first-child {
  font-style: italic;
}
.single-blog-post .post-content .post-meta a span,
.single-blog-post .post-content .post-meta a i {
  color: #a6a6a6;
  margin-left: 3px;
}
.single-blog-post .post-content .post-meta a:hover {
  color: #bfb2aa;
}
.single-blog-post .post-content .post-excerpt {
  font-size: 16px;
  color: #595959;
  margin-bottom: 0;
}
.single-blog-post .post-content .read-more-btn {
  display: block;
  margin-top: 20px;
  color: #a6a6a6;
  font-size: 13px;
  margin-bottom: 0;
  text-transform: uppercase;
}
.single-blog-post .post-content .read-more-btn i {
  -webkit-transition-duration: 300ms;
  transition-duration: 300ms;
  color: #bfb2aa;
}
.single-blog-post .post-content .read-more-btn:hover, .single-blog-post .post-content .read-more-btn:focus {
  color: #bfb2aa;
}
.single-blog-post .post-content .read-more-btn:hover i, .single-blog-post .post-content .read-more-btn:focus i {
  margin-left: 5px;
}
.single-blog-post.related-post .post-thumbnail {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
  width: 100%;
  margin-right: 0;
  margin-bottom: 30px !important;
}
.single-blog-post.related-post .post-content {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 100%;
  flex: 0 0 100%;
  max-width: 100%;
  width: 100%;
}

/* :: 12.0 Comment Area */
.comment_area {
  position: relative;
  z-index: 1;
  padding: 50px 0;
}
.comment_area .headline {
  margin-bottom: 30px;
}
.comment_area .single_comment_area {
  position: relative;
  z-index: 1;
}
.comment_area .single_comment_area::after {
  position: absolute;
  width: 1px;
  height: 90%;
  background-color: #ebebeb;
  left: 100px;
  top: 0;
  z-index: 2;
  content: "";
}
@media only screen and (max-width:767px) {
  .comment_area .single_comment_area::after {
    display: none;
  }
}
.comment_area .single_comment_area .comment-wrapper {
  margin-bottom: 30px;
}
.comment_area .single_comment_area .comment-wrapper .comment-author {
  width: 70px;
  height: 70px;
  border-radius: 50%;
  margin-right: 60px;
}
@media only screen and (max-width:767px) {
  .comment_area .single_comment_area .comment-wrapper .comment-author {
    margin-right: 20px;
  }
}
.comment_area .single_comment_area .comment-wrapper .comment-author img {
  width: 100%;
  height: 100%;
  border-radius: 50%;
}
.comment_area .single_comment_area .comment-wrapper .comment-content {
  -webkit-box-flex: 0;
  -ms-flex: 1;
  flex: 1;
}
.comment_area .single_comment_area .comment-wrapper .comment-content .comment-date {
  font-size: 12px;
  text-transform: uppercase;
  letter-spacing: 1px;
  color: #bfb2aa;
}
.comment_area .single_comment_area .comment-wrapper .comment-content h5 {
  font-size: 18px;
  margin: 5px 0;
}
.comment_area .single_comment_area .comment-wrapper .comment-content p {
  font-size: 16px;
}
.comment_area .single_comment_area .comment-wrapper .comment-content a {
  min-width: 80px;
  height: 30px;
  border: 1px solid #ebebeb;
  line-height: 28px;
  font-size: 12px;
  text-align: center;
  color: #282828;
  display: inline-block;
}
.comment_area .single_comment_area .comment-wrapper .comment-content a:hover {
  border-color: #282828;
  color: #ffffff;
  background-color: #282828;
}

.single_comment_area ol li.single_comment_area {
  margin-left: 130px;
}
.single_comment_area ol li.single_comment_area::after {
  display: none;
}
@media only screen and (max-width:767px) {
  .single_comment_area ol li.single_comment_area {
    margin-left: 40px;
  }
}
.single_comment_area ol li.single_comment_area .comment-wrapper .comment-author {
  margin-right: 30px;
}
@media only screen and (max-width:767px) {
  .single_comment_area ol li.single_comment_area .comment-wrapper .comment-author {
    margin-right: 15px;
  }
}

/* :: 13.0 Leave A Reply Area CSS */
.leave-comment-area {
  position: relative;
  z-index: 1;
}
.leave-comment-area h4 {
  margin-bottom: 30px;
}
.leave-comment-area form .form-control {
  width: 100%;
  height: 40px;
  border: 1px solid #ebebeb;
  font-size: 14px;
  color: #a6a6a6;
  padding: 10px 20px;
  margin-bottom: 20px;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
}
.leave-comment-area form .form-control:focus {
  box-shadow: none;
  border-color: #bfb2aa;
}
.leave-comment-area form textarea.form-control {
  width: 100%;
  height: 120px;
}

/* :: 14.0 Pager CSS */
.foode-pager {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
}
.foode-pager li a {
  width: 130px;
  height: 44px;
  border: 1px solid #ebebeb;
  display: inline-block;
  font-size: 13px;
  color: #a6a6a6;
  text-transform: uppercase;
  letter-spacing: 1px;
  line-height: 42px;
  text-align: center;
}
.foode-pager li a:hover, .foode-pager li a:focus {
  color: #282828;
}

/* :: 15.0 Sidebar Area CSS */
.single-widget-area {
  position: relative;
  z-index: 1;
  margin-top: 50px;
}
.single-widget-area .widget-title {
  width: 100%;
  position: relative;
  z-index: 2;
  margin-bottom: 45px;
  text-align: center;
}
.single-widget-area .widget-title::before {
  width: 100%;
  height: 14px;
  background-image: url(images/core-img/widget-curve.png);
  background-position: center center;
  background-repeat: repeat;
  position: absolute;
  top: 4px;
  left: 0;
  z-index: 1;
  content: "";
}
.single-widget-area .widget-title h6 {
  position: relative;
  z-index: 5;
  font-size: 14px;
  text-transform: uppercase;
  letter-spacing: 1px;
  margin-bottom: 0;
  line-height: 1;
  background-color: #ffffff;
  padding: 0 25px;
  display: inline-block;
}
.single-widget-area .about-thumbnail {
  width: 200px;
  height: 200px;
  border-radius: 50%;
  margin: 0 auto;
  display: block;
}
.single-widget-area .about-thumbnail img {
  border-radius: 50%;
}
.single-widget-area .widget-content img {
  margin-top: 20px;
  margin-bottom: 15px;
}
.single-widget-area .widget-content p {
  margin-bottom: 0;
  font-size: 16px;
  line-height: 1.6;
}
.single-widget-area .widget-social-info a {
  display: inline-block;
  padding: 0 10px;
}
.single-widget-area .widget-social-info a:hover, .single-widget-area .widget-social-info a:focus {
  color: #bfb2aa;
}
.single-widget-area .single-latest-post {
  position: relative;
  z-index: 1;
  margin-bottom: 30px;
}
.single-widget-area .single-latest-post:last-child {
  margin-bottom: 0;
}
.single-widget-area .single-latest-post .post-thumb {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 35%;
  flex: 0 0 35%;
  max-width: 35%;
  width: 35%;
  margin-right: 10%;
}
.single-widget-area .single-latest-post .post-content {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 55%;
  flex: 0 0 55%;
  max-width: 55%;
  width: 55%;
}
.single-widget-area .single-latest-post .post-content .post-title h6 {
  -webkit-transition-duration: 300ms;
  transition-duration: 300ms;
  font-size: 18px;
  margin-bottom: 15px;
  line-height: 1.5;
}
.single-widget-area .single-latest-post .post-content .post-title h6:hover, .single-widget-area .single-latest-post .post-content .post-title h6:focus {
  color: #bfb2aa;
}
.single-widget-area .single-latest-post .post-content .post-author {
  display: block;
  font-size: 14px;
  font-style: italic;
}
.single-widget-area .single-latest-post .post-content .post-author span {
  color: #a6a6a6;
}
.single-widget-area .newsletter-content {
  position: relative;
  z-index: 1;
}
.single-widget-area .newsletter-content p {
  margin-bottom: 30px;
  font-size: 16px;
  line-height: 1.5;
}
.single-widget-area .newsletter-content form {
  position: relative;
  z-index: 2;
}
.single-widget-area .newsletter-content form input {
  background-color: #f2f4f5;
  padding: 0 20px;
  width: 100%;
  height: 50px;
  font-size: 14px;
  color: #a6a6a6;
  border: none;
  border-radius: 0;
}
.single-widget-area .newsletter-content form input:focus {
  box-shadow: none;
}
.single-widget-area .newsletter-content form button {
  position: absolute;
  top: 0;
  right: 0;
  width: 50px;
  height: 50px;
  z-index: 10;
  border: none;
  background-color: #bfb2aa;
  cursor: pointer;
  color: #ffffff;
}
.single-widget-area .newsletter-content form button:hover {
  -webkit-transition-duration: 300ms;
  transition-duration: 300ms;
  background-color: #282828;
}
.single-widget-area .popular-tags li a {
  display: inline-block;
  margin: 4px;
  border: 1px solid #ebebeb;
  padding: 10px 15px;
  line-height: 1;
  text-transform: uppercase;
  font-size: 13px;
  color: #282828;
}
.single-widget-area .popular-tags li a:hover, .single-widget-area .popular-tags li a:focus {
  color: #bfb2aa;
}
.single-widget-area .foode-catagories {
  position: relative;
  z-index: 1;
}
.single-widget-area .foode-catagories li a {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: justify;
  -ms-flex-pack: justify;
  justify-content: space-between;
  border-bottom: 1px dotted #ebebeb;
  padding: 15px 0;
  font-size: 16px;
  line-height: 1;
  font-family: "Merriweather", serif;
  font-weight: 300;
}
.single-widget-area .foode-catagories li a span {
  color: #282828;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
}
.single-widget-area .foode-catagories li a span i {
  position: relative;
  top: -3px;
  font-size: 8px;
  margin-right: 8px;
}
.single-widget-area .foode-catagories li a span:last-child {
  color: #a6a6a6;
  font-weight: 400;
}
.single-widget-area .foode-catagories li a:hover span, .single-widget-area .foode-catagories li a:focus span {
  color: #bfb2aa;
}
.single-widget-area .foode-catagories li:last-child a {
  border-bottom: none;
}
.single-widget-area .foode-archives {
  position: relative;
  z-index: 1;
}
.single-widget-area .foode-archives li a {
  display: block;
  border-bottom: 1px dotted #ebebeb;
  padding: 15px 0;
  font-size: 16px;
  line-height: 1;
  font-family: "Merriweather", serif;
  font-weight: 300;
}
.single-widget-area .foode-archives li a span {
  color: #282828;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
}
.single-widget-area .foode-archives li a span i {
  position: relative;
  top: -3px;
  font-size: 8px;
  margin-right: 8px;
}
.single-widget-area .foode-archives li a:hover span, .single-widget-area .foode-archives li a:focus span {
  color: #bfb2aa;
}
.single-widget-area .foode-archives li:last-child a {
  border-bottom: none;
}
.single-widget-area .search-form {
  position: relative;
  z-index: 2;
}
.single-widget-area .search-form input {
  background-color: #f2f4f5;
  padding: 0 20px;
  width: 100%;
  height: 50px;
  font-size: 14px;
  color: #a6a6a6;
  border: none;
  border-radius: 0;
}
.single-widget-area .search-form input:focus {
  box-shadow: none;
}
.single-widget-area .search-form button {
  position: absolute;
  top: 0;
  right: 0;
  width: 50px;
  height: 50px;
  z-index: 10;
  border: none;
  background-color: #bfb2aa;
  cursor: pointer;
  color: #ffffff;
}
.single-widget-area .search-form button:hover {
  -webkit-transition-duration: 300ms;
  transition-duration: 300ms;
  background-color: #282828;
}
.single-widget-area img {
  width: 100%;
}

.single-post-details-area {
  position: relative;
  z-index: 1;
  margin-bottom: 50px;
}
.single-post-details-area .post-content .post-date {
  font-weight: 500;
  font-size: 13px;
  color: #ffffff;
  text-transform: uppercase;
  letter-spacing: 2px;
  color: #bfb2aa;
}
.single-post-details-area .post-content .post-title {
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
  font-weight: 300;
  line-height: 1.5;
  margin-bottom: 15px;
  font-size: 36px;
}
@media only screen and (max-width:767px) {
  .single-post-details-area .post-content .post-title {
    font-size: 24px;
  }
}
.single-post-details-area .post-content .post-meta {
  position: relative;
  z-index: 1;
  margin-bottom: 30px;
}
.single-post-details-area .post-content .post-meta a {
  display: inline-block;
  font-size: 14px;
  color: #282828;
  margin-right: 15px;
}
.single-post-details-area .post-content .post-meta a:first-child {
  font-style: italic;
}
.single-post-details-area .post-content .post-meta a span,
.single-post-details-area .post-content .post-meta a i {
  color: #a6a6a6;
  margin-left: 3px;
}
.single-post-details-area .post-content .post-meta a:hover {
  color: #bfb2aa;
}
.single-post-details-area .post-content p {
  font-size: 16px;
  color: #595959;
}
.single-post-details-area .post-content blockquote {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
  z-index: 1;
  padding: 15px 0 10px 0;
}
.single-post-details-area .post-content blockquote .blockquote-icon {
  position: relative;
  z-index: 1;
  margin-right: 20px;
}
.single-post-details-area .post-content blockquote .blockquote-icon img {
  width: 40px;
  height: auto;
}
.single-post-details-area .post-content blockquote .blockquote-text h6 {
  font-weight: 300;
  line-height: 1.9;
}
.single-post-details-area .post-content blockquote .blockquote-text h6:first-child {
  font-style: italic;
}
.single-post-details-area .post-content blockquote .blockquote-text h6:last-child {
  color: #bfb2aa;
}

.post-tags-share {
  position: relative;
  z-index: 1;
  margin-bottom: 50px;
}
.post-tags-share .popular-tags li a {
  display: inline-block;
  margin: 4px;
  border: 1px solid #ebebeb;
  padding: 10px 15px;
  line-height: 1;
  text-transform: uppercase;
  font-size: 13px;
  color: #282828;
}
.post-tags-share .popular-tags li a:hover, .post-tags-share .popular-tags li a:focus {
  color: #bfb2aa;
}
.post-tags-share .post-share span {
  font-family: "Merriweather", serif;
  font-size: 14px;
}
.post-tags-share .post-share a {
  font-size: 14px;
  display: inline-block;
  padding: 0 10px;
}
.post-tags-share .post-share a:hover, .post-tags-share .post-share a:focus {
  color: #bfb2aa;
}
@media only screen and (max-width:767px) {
  .post-tags-share .post-share a {
    padding: 0 5px;
  }
}

.related-posts {
  position: relative;
  z-index: 1;
}
.related-posts .curve-line {
  width: 100%;
  height: 6px;
}
.related-posts .headline {
  margin-bottom: 30px;
}

.map-area {
  position: relative;
  z-index: 2;
  width: 100%;
  height: 530px;
  border: none;
  margin-bottom: 0;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}
@media only screen and (max-width:767px) {
  .map-area {
    height: 300px;
  }
}

.map-area-product {
  position: relative;
  z-index: 2;
  width: 100%;
  min-height: 530px;
  border: none;
  margin-bottom: 0;
  background-repeat: no-repeat;
  background-size: cover;
  background-position: center;
}

/* :: 16.0 Contact Area CSS */
.contact-content-area {
  position: relative;
  z-index: 50;
  padding: 8%;
  box-shadow: 0 5px 30px 0 rgba(0, 0, 0, 0.15);
  top: -100px;
  background-color: #ffffff;
}
@media only screen and (max-width:767px) {
  .contact-content-area {
    top: -20px;
  }
}

.contact-content {
  position: relative;
  z-index: 2;
}
.contact-content h4 {
  font-weight: 300;
  text-transform: uppercase;
  margin-bottom: 50px;
}
.contact-content .single-contact-info {
  position: relative;
  margin-bottom: 20px;
}
.contact-content .single-contact-info:last-child {
  margin-bottom: 0;
}
.contact-content .single-contact-info .icon {
  -webkit-box-flex: 0;
  -ms-flex: 0 0 40px;
  flex: 0 0 40px;
  max-width: 40px;
  width: 40px;
}
.contact-content .single-contact-info .icon i {
  font-size: 16px;
  margin-top: 8px;
}
.contact-content .single-contact-info p {
  margin-bottom: 0;
  font-size: 16px;
}
.contact-content .contact-social-info a {
  display: inline-block;
  margin-right: 25px;
}
.contact-content .contact-social-info a:hover, .contact-content .contact-social-info a:focus {
  color: #bfb2aa;
}
@media only screen and (max-width:767px) {
  .contact-content .contact-social-info a {
    margin-right: 15px;
  }
}
.contact-content .contact-form-area .form-control {
  position: relative;
  z-index: 2;
  height: 45px;
  width: 100%;
  background-color: #ffffff;
  font-size: 12px;
  margin-bottom: 15px;
  border: 1px solid #ebebeb;
  border-radius: 0;
  padding: 15px 30px;
  font-style: italic;
  font-weight: 700;
  color: #bbbbbb;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
}
.contact-content .contact-form-area .form-control:focus {
  box-shadow: none;
  border-color: #bfb2aa;
}
.contact-content .contact-form-area textarea.form-control {
  height: 120px;
}

/* :: 17.0 Typography CSS */
.type-face {
  position: relative;
  z-index: 1;
}
.type-face p {
  font-size: 16px;
}

.foode-image,
.foode-blockquote {
  position: relative;
  z-index: 1;
  padding: 50px 0;
}

.foode-list-area {
  position: relative;
  z-index: 1;
}

.foode-list {
  position: relative;
  z-index: 1;
}
.foode-list li {
  font-size: 16px;
  color: #595959;
  margin-bottom: 15px;
  display: block;
}
.foode-list li:last-child {
  margin-bottom: 0;
}
.foode-list li i {
  position: relative;
  z-index: 1;
  top: -2px;
  font-size: 8px;
  color: #282828;
  margin-right: 10px;
}

blockquote {
  display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  position: relative;
  z-index: 1;
  padding: 15px 0 10px 0;
}
blockquote .blockquote-icon {
  position: relative;
  z-index: 1;
  margin-right: 20px;
}
blockquote .blockquote-icon img {
  width: 40px;
  height: auto;
}
blockquote .blockquote-text h6 {
  font-weight: 300;
  line-height: 1.9;
}
blockquote .blockquote-text h6:first-child {
  font-style: italic;
}
blockquote .blockquote-text h6:last-child {
  color: #bfb2aa;
}

.contact-form-area .form-control {
  position: relative;
  z-index: 2;
  height: 45px;
  width: 100%;
  background-color: #ffffff;
  font-size: 12px;
  margin-bottom: 15px;
  border: 1px solid #ebebeb;
  border-radius: 0;
  padding: 15px 30px;
  font-style: italic;
  font-weight: 700;
  color: #bbbbbb;
  -webkit-transition-duration: 500ms;
  transition-duration: 500ms;
}
.contact-form-area .form-control:focus {
  box-shadow: none;
  border-color: #bfb2aa;
}
.contact-form-area textarea.form-control {
  height: 120px;
}

/* ======= The End ======= */

/*# sourceMappingURL=sh.map */

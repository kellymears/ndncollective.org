// import external dependencies
import 'jquery';

// Import everything from autoload
import "./autoload/**/*"

// import local dependencies
import Router from './util/Router';
import common from './routes/common';
import home from './routes/home';
import aboutUs from './routes/about';
import post from './routes/post';

/** Populate Router instance with DOM routes */
const routes = new Router({
  common,
  home,
  aboutUs,
  post,
});

// Load Events
jQuery(document).ready(() => routes.loadEvents());

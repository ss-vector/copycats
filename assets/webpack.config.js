const path = require( 'path' );
// Create paths for each asset
const JS_DIR = path.resolve( __dirname, '/assets/js' );


const entry = {
  main: JS_DIR + '/main.js',
  app: JS_DIR + '/app.js',
};
const output = {
  path: BUILD_DIR,
  filename: 'js/[name].js',
};

const rules = [
];

module.exports = ( env, argv );=> ({
  entry: entry,
  output: {
    filename: 'main.js',
  }
});

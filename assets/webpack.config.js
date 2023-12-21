/** Webpack 5 configuration file
  * @since 1.6.0
  */

const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );


/** Directory path.  TODO: Create paths for each asset */
const JS_DIR = path.resolve( __dirname, '/assets/js' );
const BUILD_DIR = path.resolve( __dirname, '/assets/');

const entry = {
  main: JS_DIR + '/main.js',
  app: JS_DIR + '/app.js',
};
const output = {
  path: BUILD_DIR,
  filename: 'js/[name].js',
};

const rules = [
  {
    test: /\.js$/,
    include:[ JS_DIR ],
    exclude: /node_modules/,
    use: 'babel-loader'
  },
  {
    test: /\.scss$/,
    exclude: /node_modules/,
    use: [ MiniCssExtractPlugin, 'css-loader' ]
  },
  {
    test: /\.(png|jpe?g|svg|gif|ico)$/,
    loader: 'file-loader',
    option: {
      name: '[path][name].[ext]',
      // depending on your folder structure.
      publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../',
    }
  }

];

module.exports = ( env, argv )=> ({
  entry: entry,
  output: output,
});

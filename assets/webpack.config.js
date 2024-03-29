/** Webpack 5 configuration file
  * @since 1.6.0
  */

const path = require( 'path' );
const MiniCssExtractPlugin = require( 'mini-css-extract-plugin' );
const cssnano = require( 'cssnano' );
const { CleanWebpackPlugin } = require( 'clean-webpack-plugin' );

/** Directory path.  TODO: Create paths for each asset */
const JS_DIR = path.join( __dirname, 'src/js/' );
const BUILD_DIR = path.join( __dirname, '/js/');

const entry = {
  app: JS_DIR + '/app.js',
  bootstrap: JS_DIR + '/bootstrap.bundle.min.js'
};

const output = {
  // In the same directory
  path: BUILD_DIR,
  filename: '[name].js',
};

const plugins = ( argv ) => [
  new CleanWebpackPlugin( {
    cleanStakeWebpackAssets: ( 'production' === argv.mode )
  } ),

  new MiniCssExtractPlugin( {
    filename: 'css/[name].css'
  })
];

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
    use: [
      MiniCssExtractPlugin.loader,
      'css-loader',
      'sass-loader'
    ]
  },
  {
    test: /\.(png|jpeg|svg|gif|ico)$/,
    loader: 'file-loader',
    options: {
      name: '[path][name].[ext]',
      // depending on your folder structure.
      publicPath: 'production' === process.env.NODE_ENV ? '../' : '../../',
    }
  }
];

module.exports = ( env, argv )=> ({
  entry: entry,
  output: output,

  devtool: false,

  module: {
    rules: rules
  },

  plugins: plugins( argv ),
  externals: {
    jquery: 'jQuery'
  }
});

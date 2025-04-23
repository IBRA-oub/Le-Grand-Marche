const path = require('path');

module.exports = {
  entry: './assets/js/main.js', // Point d'entrée pour votre JS
  output: {
    path: path.resolve(__dirname, 'dist'), // Dossier de sortie
    filename: 'bundle.js', // Fichier JS compilé
  },
  mode: 'development', // Mode développement (peut être 'production' en production)
  devServer: {
    contentBase: './dist',
    watchContentBase: true,
    hot: true,
  },
  module: {
    rules: [
      {
        test: /\.css$/, // Traiter les fichiers CSS
        use: ['style-loader', 'css-loader', 'postcss-loader'],
      },
      {
        test: /\.js$/, // Traiter les fichiers JS
        exclude: /node_modules/,
        use: 'babel-loader',
      },
    ],
  },
};

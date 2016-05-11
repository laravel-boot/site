'use strict';

var path = require('path');
var webpack = require('webpack');
var babel = require('babel-preset-es2015');

var PROD = JSON.parse(process.env.PROD_ENV || '0');

module.exports = {
    context: path.resolve('resources'),
    entry: {
        app: './assets/js/index.js'
    },
    module: {
        loaders: [{
            test : /\.jsx?/,
            loader: 'babel-loader',
            exclude: /(node_modules|bower_components)/,
            query: {
                presets: ['es2015', 'react']
            }
        },
            {
                test: /\.less$/,
                loader: "style!css!less"
            }
        ]
    },
    output: {
        path: path.resolve('public/js'),
        filename: "bundle.js"
    },
    plugins: PROD ? [
        new webpack.optimize.UglifyJsPlugin({
            compress: false
        }),
    ] : []
};
'use strict';

const webpack = require('webpack');
const NODE_ENV = process.env.NODE_ENV || 'development';

module.exports = {
    module: {
        loaders: [
            {test: /\.js$/, loader: "babel"},
            { test: /\.css$/, loader: "style!css" },
            { test: /\.less$/, loader: "style!css!less" },
            { test: /\.png$/, loader: "url?limit=100000" },
            { test: /\.jpg$/, loader: "file" }
        ]
    },
    resolve: {
        modulesDirectories: ['node_modules'],
        extensions: ['', '.js']
    },
    resolveLoader: {
        modulesDirectories: ['node_modules'],
        moduleTemplate: ['*-loader', '*'],
        extensions: ['', '.js']
    },


    watch: NODE_ENV == 'development'
};

if (NODE_ENV == 'production') {
    module.exports.plugins.push(
        new webpack.optimize.UglifyJsPlugin({
            compress: {
                warnings: false,
                drop_console: false
            }
        })
    );
}
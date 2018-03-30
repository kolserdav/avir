const path = require('path');

module.exports = {
    entry: './resources/js/index.js',
    output: {
        filename: 'bundle.js',
        path: path.resolve(__dirname, './public/assets/js')
    }
};



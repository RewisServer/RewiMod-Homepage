var express = require('express');
var router = express.Router();
var fs = require('fs');
var path = require('path');

router.get('/', function (req, res) {
    fs.readFile(path.join(__dirname, '/../public/static/index.html'), 'utf8', function (err, text) {
        if (err) {
            throw err;
        }
        res.send(text);
    });
});

router.get('/features', function (req, res) {
    fs.readFile(path.join(__dirname, '/../public/static/features.html'), 'utf8', function (err, text) {
        if (err) {
            throw err;
        }
        res.send(text);
    });
});

router.get('/download', function (req, res) {
    fs.readFile(path.join(__dirname, '/../public/static/download.html'), 'utf8', function (err, text) {
        if (err) {
            throw err;
        }
        res.send(text);
    });
});

module.exports = router;
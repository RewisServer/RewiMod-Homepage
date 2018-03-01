const express = require('express');
const path = require('path');
const favicon = require('serve-favicon');

const app = express();

// view engine setup
app.set('views', path.join(__dirname, 'views'));
app.set('view engine', 'jade');

app.use(favicon(path.join(__dirname, 'public', 'favicon.ico')));
app.use(express.static(path.join(__dirname, 'public')));

// Routes
app.get('/', getFile);
app.get('/features', getFile);
app.get('/download', getFile);
app.get('/join', getFile);
app.get('/download/:version', function (req, res) {
    let version = req.params.version;
    switch(version){
        case 'latest':
        case 'newest':
        default:
            return res.redirect('https://ci.rewinside.tv/job/RewiMod/lastSuccessfulBuild/');
    }
});

function getFile(req, res){
    return res.sendFile(path.join(__dirname, `/public/static${(req.path === "/") ? '/index': req.path }.html`));
}


// catch 404 and forward to error handler
app.use(function(req, res, next) {
    let err = new Error('Not Found');
    err.status = 404;
  next(err);
});

// error handlers

// development error handler
// will print stacktrace
if (app.get('env') === 'development') {
  app.use(function(err, req, res, next) {
    res.status(err.status || 500);
    res.render('error', {
      message: err.message,
      error: err
    });
  });
}

// production error handler
// no stacktraces leaked to user
app.use(function(err, req, res, next) {
  res.status(err.status || 500);
  res.render('error', {
    message: err.message,
    error: {}
  });
});


module.exports = app;

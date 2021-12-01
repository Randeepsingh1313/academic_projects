var createError = require('http-errors');
var express = require('express');
var path = require('path');
var cookieParser = require('cookie-parser');
var logger = require('morgan');

// require db.js //
require("./APP_SERVER/models/db");
/////////////////////////////////////////////////////

// Require API //
const apiRouter = require('./APP_API/routes/mobiles');
/////////////////////////////////////////////////////


///////////////////////////////////////////////////////////
// const indexRouter = require('./APP_SERVER/routes/index');
var usersRouter = require('./APP_SERVER/routes/users');
//////////////////////////////////////////////////////////
var app = express();

// view engine setup
app.set('views', path.join(__dirname,'APP_SERVER', 'views'));
app.set('view engine', 'pug');

/// 
app.all('/*', function(req, res, next) {
  res.header("Access-Control-Allow-Origin", "*");
  res.header("Access-Control-Allow-Headers", "*");
  next();
});

app.use(logger('dev'));
app.use(express.json());
app.use(express.urlencoded({ extended: false }));
app.use(cookieParser());
app.use(express.static(path.join(__dirname, 'public')));

// app.use('/', indexRouter);
app.use('/users', usersRouter);

// Tell the application to use apiRouter //
app.use('/api', apiRouter);
/////////////////////////////////////////////////////

// catch 404 and forward to error handler
app.use(function(req, res, next) {
  next(createError(404));
});

// error handler
app.use(function(err, req, res, next) {
  // set locals, only providing error in development
  res.locals.message = err.message;
  res.locals.error = req.app.get('env') === 'development' ? err : {};

  // render the error page
  res.status(err.status || 500);
  res.render('error');
});

module.exports = app;
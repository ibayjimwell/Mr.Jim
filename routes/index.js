var express = require('express');
var router = express.Router();

/* GET home page. */
router.get('/', function(req, res, next) {
  res.render('layout', { title: 'ibayjimwell | Projects', name: 'ibayjimwell' });
});

router.get('/experience', function(req, res, next) {
  res.render('layout', { title: 'ibayjimwell | Experience', name: 'ibayjimwell' });
});

router.get('/skills', function(req, res, next) {
  res.render('layout', { title: 'ibayjimwell | Skills', name: 'ibayjimwell' });
});

router.get('/certificates', function(req, res, next) {
  res.render('layout', { title: 'ibayjimwell | Certificates', name: 'ibayjimwell' });
});

module.exports = router;

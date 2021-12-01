// Require express and router 
var express = require('express');
var router = express.Router();

// Require controller 
const ctrlMobile = require('../controllers/mobile');


// Create routes which include crud operations //
router.get('/mobiles', ctrlMobile.mobilelist);
router.get('/mobiles/:mobileid', ctrlMobile.mobileinfo);
router.post('/mobiles',  ctrlMobile.createMobile);

//router.post('/createMobile', ctrlMobile.createMobile);

//router.put('/updateMobile', ctrlMobile.updateMobile);

//router.get('/deleteMobile', ctrlMobile.deleteMobile);

// export router //
module.exports = router;
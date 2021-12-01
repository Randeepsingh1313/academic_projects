var express = require('express');
var router = express.Router();
const ctrlMain = require('../controllers/main'); 
const ctrlList = require('../controllers/list');

/* GET home page. */
router.get('/', ctrlList.mobilelist);
router.get('/mobiles/:mobileid', ctrlList.mobileInfo);

// FORM for adding new item Route
router.route('/new')
        .get(ctrlList.addNewMobile)
        .post(ctrlList.doAddNewMobile)

// Update item Route
// router.delete('/mobiles/:mobileid', ctrlList.deleteMobile);


module.exports = router;

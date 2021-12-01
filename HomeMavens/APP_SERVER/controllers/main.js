const indexCtrl = function(req, res){
    res.render('index', {title : 'MOBILE STORE'});
};
module.exports = {
    indexCtrl
};

// Require express and request module 
const { response } = require('express');
const request =  require('request');

// Require apiOptions path 
const apiOptions =  {    
    server: 'http://localhost:3000'};

// Express fetch list of mobiles through api and render on page ////
    const mobilelist=function(req,res){
        const path='/api/mobiles';
        const requestOptions={
            url:apiOptions.server+path,
            method:'GET',
            json:{}
    };

    request(requestOptions, (err,response,body)=>{
            _renderHomepage(req,res,body);
        });
    };

    const _renderHomepage=function(req,res,responseBody){
        console.log(responseBody);
        res.render('list-display',{
            mobiles:responseBody
        });
    };

// Render Info of each item when clicked particular item ///////
    const mobileInfo=function(req,res){
        const path=`/api/mobiles/${req.params.mobileid}`;
        const requestOptions={
            url:apiOptions.server+path,
            method:'GET',
            json:{}
    };

    request(requestOptions, (err,response,body) =>{ 
        _renderDetailPage(req,res,body);
        });
    };

    const _renderDetailPage=function(req,res,responseBody){
        console.log("Data", responseBody);
        res.render('details',{
            currentMobile : responseBody
    
        });
    };

    // Create Add new mobile Page and FORM  ///////////////////////
    const _renderCreatePage = function(req,res){
        res.render('create',{
            title:"Create New Mobile"
        });
    };

    const addNewMobile = function(req,res){
        _renderCreatePage(req,res);
    };

    const doAddNewMobile = function(req,res){
        const path = '/api/mobiles';
        const postdata = {
            property: req.body.property,
            adddress: req.body.adddress,
            type: req.body.type,
            size: req.body.size,
            ownership: req.body.ownership,

            heating: req.body.heating,
            basement: req.body.basement,
            flooring: req.body.flooring,
            garage: req.body.garage,
            inclusions: req.body.inclusions,

            foundation: req.body.foundation,
            exterior: req.body.exterior,
            fronting: req.body.fronting,

            water: req.body.water,
            buildinginsurance: req.body.buildinginsurance,
            cabletv: req.body.cabletv,
            parkingmaintenance: req.body.parkingmaintenance
     };
     const requestOptions = {
            url: apiOptions.server+path,
            method: 'POST',
            json: postdata
        };
     request(requestOptions, (err, response, body) => {
                if (response.statusCode === 201){
                    res.redirect('/');
                }
            });
    };

module.exports = {
    mobilelist,mobileInfo,addNewMobile,doAddNewMobile,deleteMobile
};
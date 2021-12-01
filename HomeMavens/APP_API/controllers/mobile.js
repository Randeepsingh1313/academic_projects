// API will interact with MongoDB for fetching DATA

const { response } = require('express');
const mongoose = require('mongoose');
const request = require('request');
const Mobile = mongoose.model('Mobile');

// Define all functions here

// Fetch Mobile list ///////////// Working ///////
const mobilelist = function (req, res){
    Mobile
    .find()
    .exec(function(err, mobiledata){
        if(err){
            res
            .status(404)
            .json(err);
            return;
        }
        res
        .status(200)
        .json(mobiledata);
        console.log('Mobiles data found', mobiledata);

    })
};

// Get Info about single Mobile ////// Working ////////////////////////  pg 176

const mobileinfo = (req, res) => {
    console.log('Mobile with particular id is found', req.params.mobileid);
    Mobile.findById(req.params.mobileid).exec((err, mobiledata) => {
    if (!mobiledata) {
        return res
        .status(404)
        .json({"message": "Mobile not found"});
    } 
    else if (err) {
        return res
        .status(404)
        .json(err);
    }
    res.status(200).json(mobiledata);
    console.log('Mobile with particular id is found');
    });
};

// Create Mobile ///////////////////////////Working////////////////////
const createMobile = function (req, res){
    console.log('Mobile is created', req.body.company,req.body.model);
    Mobile.create({
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
    }, (err, mobiledata) => {
        if(err){
            res
            .status(404)
            .json(err)
            return;
        }
        else{
            res.status(201)
            .json(mobiledata);
            console.log('Mobile is Created');   
        }    
    });
};

// Update Food //////////////////////////////////////////////
const updateMobile = function (req, res){

    if(!req.params.mobileid){
        return res
        .status(404)
        .json({"message": "Not found, mobileid is required"});
    return;
    }
    Mobile.findById(req.params.mobileid).exec((err, mobiledata) => {
        if (!mobiledata) {
            res
            .status(404)
            .json({"message": "mobileid not found"});
            return;
        } 
        else if (err) {
            return res
            .status(404)
            .json(err);
        }
        mobiledata.property = req.body.property;
        mobiledata.adddress = req.body.adddress;
        mobiledata.type = req.body.type;
        mobiledata.size = req.body.size;
        mobiledata.ownership = req.body.ownership;

        mobiledata.heating = req.body.heating;
        mobiledata.basement = req.body.basement;
        mobiledata.flooring = req.body.flooring;
        mobiledata.garage = req.body.garage;
        mobiledata.inclusions = req.body.inclusions;

        mobiledata.foundation = req.body.foundation;
        mobiledata.exterior = req.body.exterior;
        mobiledata.fronting = req.body.fronting;

        mobiledata.water = req.body.water;
        mobiledata.buildinginsurance = req.body.buildinginsurance;
        mobiledata.cabletv = req.body.cabletv;
        mobiledata.parkingmaintenance = req.body.parkingmaintenance;
        mobiledata.save((err, mobiledata) => {
            if(err){
                res
                .status(404)
                .json(err);
            }
            else{
                res
                .status(200)
                .json(mobiledata);
            }
            console.log('Mobile is updated');
        });
    });
};

// Delete Food/////////////////////////////////////////////
const deleteMobile = function (req, res){

    const foodid = req.params.mobileid;

    if(foodid){
        Mobile.findByIdAndRemove(mobileid).exec((err, mobiledata) =>{
            if(err){
                res.status(404).json(err);
                return;
            }
            res
            .status(204).json(null)
            console.log('Mobile is deleted');
        });
    }
    else{
        res.status(200).json({"message" : "No mobileid"});
    }
};

// Module exports
module.exports = {
    mobilelist, mobileinfo, createMobile, updateMobile, deleteMobile
};
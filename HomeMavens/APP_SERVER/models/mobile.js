var mongoose = require( 'mongoose' );

const mobileSchema  = new mongoose.Schema({ 

      // Home Features
      property: { type: String, require: true },
      adddress: { type: String, require: true },
      type: { type: String,  require: true },
      size: { type: String, require: true },
      ownership: { type: String, require: true },
  
      // Interior Features
      heating: { type: String, require: true },
      basement: { type: String, require: true },
      flooring: { type: String, require: true },
      garage: { type: String,  require: true },
      inclusions: { type: String, require: true },
  
      // Exterior Features
      foundation: { type: String, require: true },
      exterior: { type: String, require: true },
      fronting: { type: String, require: true },
  
      // Maintenance Fee
      water: { type: String, require: true },
      buildinginsurance: { type: String,  require: true },
      cabletv: { type: String, require: true },
      parkingmaintenance: { type: String, require: true },
  
         
      // Amenities
      description: { type: String, require: true },
     /*color: { type: String, require: true },
    memory: { type: String, require: true },
    specs: {
            generalspecs: {
                dimensions: { type: String, require: true },
                weight: { type: String, require: true },
                os: { type: String, lowercase: true, trim: true }
            },
            display: {
                size: { type: String, require: true },
                technology: { type: String,  lowercase: true, trim: true },
                ppi: { type: Number, require: true },
            },
            battery: {
                capacity: { type: String, require: true },
                wirelesscharge: { type: Boolean },
            },
            camera: {
                rearresol: { type: String, require: true },
                frontresol: { type: String, require: true },
            },       
        } */
});

//var mobileModel = mongoose.model('Mobile', mobileSchema, 'mobile'); 
module.exports = mongoose.model('Mobile', mobileSchema, 'mobile');